<?php

namespace ProfilePress\Core\ContentProtection\Frontend;

use ProfilePress\Core\Classes\PROFILEPRESS_sql;
use ProfilePress\Core\ContentProtection\SettingsPage;

class SearchAndAPI
{
    public function __construct()
    {
        add_action('pre_get_posts', [$this, 'exclude_protected_posts']);
    }

    public function exclude_protected_posts($query)
    {
        // Determine if this query is for a frontend WP search or a REST API search.
        if (
            ( ! is_admin() && $query->is_main_query() && $query->is_search()) ||
            (defined('REST_REQUEST') && REST_REQUEST && strpos($_SERVER['REQUEST_URI'], '/wp/v2/search') !== false)
        ) {

            $metas = PROFILEPRESS_sql::get_meta_data_by_key(SettingsPage::META_DATA_KEY);

            if (is_array($metas)) {

                foreach ($metas as $meta) {

                    $meta = ppress_var($meta, 'meta_value', []);

                    if ( ! in_array(ppress_var($meta, 'is_active', true), ['true', true], true)) continue;

                    $access_condition = ppress_var($meta, 'access_condition', []);

                    $who_can_access = ppress_var($access_condition, 'who_can_access', 'everyone');

                    $access_roles = ppress_var($access_condition, 'access_roles', []);

                    $access_wp_users = ppress_var($access_condition, 'access_wp_users', []);

                    $access_membership_plans = ppress_var($access_condition, 'access_membership_plans', []);

                    if (Checker::is_blocked($who_can_access, $access_roles, $access_wp_users, $access_membership_plans)) {

                        $restricted_content = $this->get_restricted_post_ids_for_user($meta['content']);

                        if ( ! empty($restricted_content['cpt_is_all']) && is_array($restricted_content['cpt_is_all'])) {

                            $excluded_post_types = $restricted_content['cpt_is_all'];

                            // Get the current post types being queried.
                            $post_type = $query->get('post_type');

                            // Retrieve all registered public post types.
                            $all_post_types = get_post_types(['public' => true]);

                            // Remove the excluded post types from the list.
                            $allowed_post_types = array_diff($all_post_types, $excluded_post_types);

                            if (is_string($post_type) && in_array($post_type, $excluded_post_types, true)) {
                                // If the query explicitly requests an excluded post type, return no posts.
                                // we using 'post__in' => [0] or similar techniques to ensure the query returns no posts. Here's the corrected version:
                                $query->set('post__in', [0]);

                            } elseif ($post_type === 'any' || empty($post_type)) {
                                // If querying "any" post type or not specified, exclude the excluded post types.
                                $query->set('post_type', array_values($allowed_post_types));

                            } elseif (is_array($post_type)) {

                                // If querying multiple post types, exclude the excluded post types.
                                $new_post_type = array_diff($post_type, $excluded_post_types);
                                // if empty array, it means we don't want any post type, so let's use eg 'zznonezz' which does not exist
                                if (empty($new_post_type)) {
                                    $new_post_type = 'zznonezz';
                                }
                                $query->set('post_type', $new_post_type);
                            }
                        }

                        /* $excluded_posts structure is below
                            [
                                "post" => [
                                    10087,
                                    10012,
                                ],
                                "page" => [
                                    1008,
                                    1001,
                                ],
                            ]
                            */
                        $excluded_posts = [];


                        if ( ! empty($restricted_content['cpt_posts']) && is_array($restricted_content['cpt_posts'])) {
                            $excluded_posts = array_merge_recursive($excluded_posts, $restricted_content['cpt_posts']);
                        }

                        if ( ! empty($restricted_content['cpt_post_children']) && is_array($restricted_content['cpt_post_children'])) {
                            $excluded_posts = array_merge_recursive($excluded_posts, $restricted_content['cpt_post_children']);
                        }

                        if ( ! empty($restricted_content['cpt_post_parents']) && is_array($restricted_content['cpt_post_parents'])) {
                            $excluded_posts = array_merge_recursive($excluded_posts, $restricted_content['cpt_post_parents']);
                        }

                        if ( ! empty($restricted_content['template_cpt_posts']) && is_array($restricted_content['template_cpt_posts'])) {
                            $excluded_posts = array_merge_recursive($excluded_posts, $restricted_content['template_cpt_posts']);
                        }

                        if ( ! empty($excluded_posts)) {

                            // Get the current post types being queried.
                            $post_type = $query->get('post_type');

                            // Build a list of post IDs to exclude based on the query's post types.
                            $post__not_in = $query->get('post__not_in') ?: [];

                            if ($post_type === 'any' || empty($post_type)) {
                                // Exclude IDs for all specified post types if no specific post type is queried.
                                $post__not_in = array_merge($post__not_in, ...array_values($excluded_posts));

                            } elseif (is_string($post_type) && isset($excluded_posts[$post_type])) {
                                // Exclude IDs for a single queried post type.
                                $post__not_in = array_merge($post__not_in, $excluded_posts[$post_type]);
                            } elseif (is_array($post_type)) {
                                // Exclude IDs for multiple queried post types.
                                foreach ($post_type as $type) {
                                    if (isset($excluded_posts[$type])) {
                                        $post__not_in = array_merge($post__not_in, $excluded_posts[$type]);
                                    }
                                }
                            }

                            // Set the updated list of excluded post IDs.
                            $query->set('post__not_in', array_unique($post__not_in));
                        }
                    }
                }
            }
        }
    }

    private function get_restricted_post_ids_for_user($rule_content)
    {
        $cache_key = hash('sha256', wp_json_encode($rule_content));

        $cache_bucket = [];

        if ( ! isset($cache_bucket[$cache_key])) {

            // do not recursively hook our callback again or things will go awry.
            remove_action('pre_get_posts', [$this, 'exclude_protected_posts']);

            $response = [
                'cpt_is_all'         => [], // array of CPT whose all posts are protected
                'cpt_posts'          => [],
                'cpt_post_children'  => [],
                'cpt_post_parents'   => [],
                'template_cpt_posts' => []
            ];

            if (is_array($rule_content) && ! empty($rule_content)) {

                foreach ($rule_content as $group => $conditions) {

                    foreach ($conditions as $condition) {

                        if (isset($condition['condition'])) {

                            if (strstr($condition['condition'], '_all') !== false) {
                                $response['cpt_is_all'][] = str_replace('_all', '', $condition['condition']);
                            }

                            if (strstr($condition['condition'], '_selected') !== false && ! empty($condition['value'])) {
                                $cpt                         = str_replace('_selected', '', $condition['condition']);
                                $existing_val                = isset($response['cpt_posts'][$cpt]) && is_array($response['cpt_posts'][$cpt]) ? $response['cpt_posts'][$cpt] : [];
                                $response['cpt_posts'][$cpt] = array_merge($existing_val, array_map('absint', $condition['value']));
                            }

                            if (strstr($condition['condition'], '_children') !== false && ! empty($condition['value'])) {

                                $parent_posts = array_map('absint', $condition['value']);

                                $cpt = str_replace('_children', '', $condition['condition']);

                                foreach ($parent_posts as $parent_post_id) {
                                    $existing_val                        = isset($response['cpt_post_children'][$cpt]) && is_array($response['cpt_post_children'][$cpt]) ? $response['cpt_post_children'][$cpt] : [];
                                    $response['cpt_post_children'][$cpt] = array_merge($existing_val, $this->get_child_post_ids($parent_post_id, $cpt));
                                }
                            }

                            if (strstr($condition['condition'], '_ancestors') !== false && ! empty($condition['value'])) {

                                $child_posts = array_map('absint', $condition['value']);

                                $cpt = str_replace('_ancestors', '', $condition['condition']);

                                foreach ($child_posts as $child_post_id) {
                                    $existing_val                       = isset($response['cpt_post_parents'][$cpt]) && is_array($response['cpt_post_parents'][$cpt]) ? $response['cpt_post_parents'][$cpt] : [];
                                    $response['cpt_post_parents'][$cpt] = array_merge($existing_val, $this->get_parent_post_ids($child_post_id));
                                }
                            }

                            if (strstr($condition['condition'], '_template') !== false && ! empty($condition['value'])) {

                                $templates = $condition['value'];

                                $cpt = str_replace('_template', '', $condition['condition']);

                                foreach ($templates as $template) {
                                    $existing_val                         = isset($response['template_cpt_posts'][$cpt]) && is_array($response['template_cpt_posts'][$cpt]) ? $response['template_cpt_posts'][$cpt] : [];
                                    $response['template_cpt_posts'][$cpt] = array_merge($existing_val, $this->get_post_ids_by_template($template, $cpt));
                                }
                            }
                        }
                    }
                }
            }

            $cache_bucket[$cache_key] = $response;
        }

        return $cache_bucket[$cache_key];
    }

    /**
     * Get all child post IDs of a specific parent post ID in WordPress.
     *
     * @param int $parent_id The parent post ID.
     * @param string $post_type The parent post type
     *
     * @return array List of child post IDs.
     */
    private function get_child_post_ids($parent_id, $post_type): array
    {
        // Validate the parent ID.
        if ( ! is_numeric($parent_id) || $parent_id <= 0) return [];

        // Query for child posts.
        $child_posts = new \WP_Query([
            'post_parent'    => $parent_id,
            'post_type'      => $post_type,
            'posts_per_page' => 1000,
            'fields'         => 'ids',
            'post_status'    => 'any'
        ]);

        return $child_posts->posts;
    }

    /**
     * Get all parent post IDs of a specific post ID in WordPress.
     *
     * @param int $post_id The ID of the post.
     *
     * @return array List of parent post IDs (from closest to root).
     */
    private function get_parent_post_ids($post_id)
    {
        if ( ! is_numeric($post_id) || $post_id <= 0) return [];

        return get_post_ancestors($post_id);
    }

    /**
     * Get all post IDs using a specific template file.
     *
     * @param string $template_filename The filename of the template (e.g., 'template-custom.php').
     * @param string $post_type The post type to filter by (default is 'any').
     *
     * @return array List of post IDs using the specified template.
     */
    private function get_post_ids_by_template($template_filename, $post_type)
    {
        global $wpdb;

        // Sanitize the input.
        $template_filename = sanitize_text_field($template_filename);

        if (empty($template_filename)) return [];

        // Query for posts with the specified template.
        $query = $wpdb->prepare(
            "SELECT p.ID
         FROM $wpdb->posts p
         INNER JOIN $wpdb->postmeta pm ON p.ID = pm.post_id
         WHERE pm.meta_key = '_wp_page_template'
           AND pm.meta_value = %s
           AND p.post_type = %s
           AND p.post_status = 'publish'",
            $template_filename,
            $post_type
        );

        // Fetch results.
        $post_ids = $wpdb->get_col($query);

        return is_array($post_ids) && ! empty($post_ids) ? $post_ids : [];
    }


    public static function get_instance()
    {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new self();
        }

        return $instance;
    }
}
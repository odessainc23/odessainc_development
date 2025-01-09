<?php

namespace ProfilePress\Core\Themes\DragDrop;

use WP_User;
use WP_User_Query;

trait MemberDirectoryTrait
{
    protected int $_form_id;

    protected array $args;

    public function initializeMemberDirectoryTrait($_form_id, $args)
    {
        $this->_form_id = $_form_id;

        $this->args = $args;
    }

    protected function search_query_key(): string
    {
        return 'search-' . $this->_form_id;
    }

    protected function search_filter_query_params()
    {
        static $cache = [];

        if ( ! isset($cache[$this->_form_id])) {

            $query_params = [];

            if (empty($query_params) && ! empty($_GET['filter' . $this->_form_id])) {
                $query_params = json_decode(base64_decode($_GET['filter' . $this->_form_id]), true);
            }

            $cache[$this->_form_id] = $query_params;
        }

        return $cache[$this->_form_id];
    }

    protected function wp_user_query()
    {
        static $cache = [];

        if ( ! isset($cache[$this->_form_id])) {

            $search_q_key = self::search_query_key();

            $current_page = $this->get_current_page();

            $users_per_page = $this->args['users_per_page'] ?: 9;

            $roles = array_filter($this->args['user_roles'] ?? []);

            $include_user_ids = $this->args['specific_users'] ?? '';

            $exclude_user_ids = $this->args['exclude_users'] ?? '';

            $default_sort_method = $this->args['sort_default'] ?? 'newest';

            if (empty($include_user_ids)) {
                $include_user_ids = [];
            } else {
                $include_user_ids = array_map(function ($val) {
                    return absint(trim($val));
                }, explode(',', $include_user_ids));
            }

            if (empty($exclude_user_ids)) {
                $exclude_user_ids = [];
            } else {
                $exclude_user_ids = array_map(function ($val) {
                    return absint(trim($val));
                }, explode(',', $exclude_user_ids));
            }

            $search_field_harsh_map = [
                'pp_email_address' => 'user_email',
                'pp_website_url'   => 'user_url',
                'pp_display_name'  => 'display_name'
            ];

            $db_search_fields = array_filter($this->args['search_fields'] ?? [], function ($item) {
                return ! empty($item);
            });

            // get meta fields to be used by meta query of WP_User_Query
            $meta_fields = array_filter($db_search_fields, function ($item) use ($search_field_harsh_map) {
                return ! in_array($item, array_keys($search_field_harsh_map));
            });

            // get wp_user table columns to use in searching for users
            $search_columns = array_reduce($db_search_fields, function ($carry, $item) use ($search_field_harsh_map) {

                if (isset($search_field_harsh_map[$item])) {
                    $carry[] = $search_field_harsh_map[$item];
                }

                return $carry;

            }, ['user_login']);

            $sort_method = ppress_var($_GET, 'sortby' . $this->_form_id, $default_sort_method, true);

            $query_params = $this->search_filter_query_params();

            $offset = $current_page > 1 ? ($current_page - 1) * $users_per_page : 0;

            $wp_user_query = $this->member_directory_users([
                'number'             => $users_per_page,
                'paged'              => $current_page,
                'offset'             => $offset,
                'roles'              => $roles,
                'include_user_ids'   => $include_user_ids,
                'exclude_user_ids'   => $exclude_user_ids,
                'sort_method'        => $sort_method,
                'search_columns'     => $search_columns,
                'search_meta_fields' => $meta_fields,
                'filter_meta_fields' => isset($query_params['filters']) ? array_filter(
                    array_map('ppress_recursive_trim', ppress_var($query_params, 'filters', [], true))
                ) : [],
                'is_search_query'    => ! empty($query_params['ppmd-search']),
                'search_q'           => isset($query_params[$search_q_key]) ? sanitize_text_field($query_params[$search_q_key]) : ''
            ]);

            $users = $wp_user_query->get_results();

            $total_users_found = $wp_user_query->get_total();

            if ( ! empty($roles) && ! empty($query_params['ppmd-search']) && is_array($users) && ! empty($users)) {

                /**
                 * @var int $key
                 * @var WP_User $user
                 */
                foreach ($users as $key => $user) {

                    if (empty(array_intersect($user->roles, $roles))) {
                        unset($users[$key]);
                    }
                }

                $total_users_found = count($users);

                // only necessary because if filtering by role, LIMIT is removed from query.
                // limit is removed in pre_user_query action callback.
                $users = array_slice($users, $offset, $users_per_page);
            }

            $cache[$this->_form_id] = [
                'users'             => $users,
                'total_users_found' => $total_users_found
            ];
        }

        return $cache[$this->_form_id];
    }

    public function member_directory_users(array $parsed_args = []): WP_User_Query
    {
        $parsed_args = apply_filters('ppress_member_directory_parsed_args', wp_parse_args($parsed_args, [
            'number'             => 9,
            'paged'              => 1,
            'offset'             => 0,
            'roles'              => [],
            'include_user_ids'   => [],
            'exclude_user_ids'   => [],
            'count_total'        => true,
            'sort_method'        => 'newest',
            'is_search_query'    => false,
            'search_q'           => '',
            'search_columns'     => ['user_login', 'user_email', 'user_url', 'display_name'],
            'search_meta_fields' => ['first_name', 'last_name'],
            'filter_meta_fields' => []
        ]));

        $args = [
            'number'   => $parsed_args['number'],
            'paged'    => $parsed_args['paged'],
            'offset'   => $parsed_args['offset'],
            'role__in' => $parsed_args['roles'],
            'include'  => $parsed_args['include_user_ids'],
            'exclude'  => $parsed_args['exclude_user_ids']
        ];

        // no check for username because it's the default orderby
        switch ($parsed_args['sort_method']) {
            case 'newest':
                $args['orderby'] = 'user_registered';
                $args['order']   = 'DESC';
                break;
            case 'oldest':
                $args['orderby'] = 'user_registered';
                break;
            case 'username':
                $args['orderby'] = 'user_login';
                break;
            case 'first-name':
                $args['meta_key'] = 'first_name';
                $args['orderby']  = 'meta_value';
                $args['order']    = 'ASC';
                break;
            case 'last-name':
                $args['meta_key'] = 'last_name';
                $args['orderby']  = 'meta_value';
                $args['order']    = 'ASC';
                break;
            default:
                $args['meta_key'] = $parsed_args['sort_method'];
                $args['orderby']  = 'meta_value';
                $args['order']    = 'ASC';
        }

        if ($parsed_args['is_search_query'] === true) {

            $search_term = sanitize_text_field($parsed_args['search_q']);

            $search_columns = $parsed_args['search_columns'];

            $roles = $parsed_args['roles'];

            $filter_meta_fields = $parsed_args['filter_meta_fields'];

            $args['search'] = '*' . $search_term . '*';

            // we need to empty out the search column so wp user query doesn't restrict the search only
            // to supplied search columns. We want to also check usermeta too.
            add_filter('user_search_columns', '__return_empty_array', 999999999);

            add_action('pre_user_query', function ($query) use ($roles) {
                // removes "AND ()" from query which causes the sql to be invalid.
                // SELECT DISTINCT wp_users.* FROM wp_users INNER JOIN wp_usermeta ON
                // ( wp_users.ID = wp_usermeta.user_id ) WHERE 1=1 AND ( wp_users.user_nicename LIKE '%little%' OR
                // wp_users.user_email LIKE '%little%' OR ( ( wp_usermeta.meta_key = 'first_name' AND wp_usermeta.meta_value LIKE '%little%' )
                // OR ( wp_usermeta.meta_key = 'last_name' AND wp_usermeta.meta_value LIKE '%little%' ) OR ( wp_usermeta.meta_key = 'twitter'
                // AND wp_usermeta.meta_value LIKE '%little%' ) ) ) AND () ORDER BY user_registered DESC
                $query->query_where = str_replace('AND ()', '', $query->query_where);

                if ( ! empty($roles)) {
                    // remove query LIMIT so we can get actual total number of result when filitering by roles
                    unset($query->query_limit);
                }
            });

            /**
             * Modifies the query so we can tactically include searching of $search_columns in wp_users table
             * @see https://wordpress.stackexchange.com/a/248674/59917
             */
            add_filter('get_meta_sql', function ($sql) use ($search_term, $search_columns, $filter_meta_fields) {

                global $wpdb;

                // Only run once:
                static $nr = 0;

                if (0 != $nr++) return $sql;

                $OR_placeholders = [];
                $queries         = [];


                if (is_array($search_columns) && ! empty($search_columns)) {

                    foreach ($search_columns as $search_column) {

                        $OR_placeholders[] = '%s';

                        $queries[] = $wpdb->prepare("{$wpdb->users}.$search_column LIKE %s", '%' . $wpdb->esc_like($search_term) . '%');
                    }
                }

                $OR_placeholders[] = '%s';

                $queries[] = ppress_mb_function(
                    ['mb_substr', 'substr'],
                    [
                        $sql['where'],
                        5,
                        ppress_mb_function(['mb_strlen', 'strlen'], [$sql['where']])
                    ]
                );


                $filter_queries = '';

                /** @see https://stackoverflow.com/a/65653006/2648410 */
                if ( ! empty($filter_meta_fields)) {

                    foreach ($filter_meta_fields as $meta_key => $meta_value) {

                        $filter_queries .= "AND EXISTS ( SELECT 1 FROM {$wpdb->usermeta} WHERE {$wpdb->users}.ID = {$wpdb->usermeta}.user_id AND ";

                        $filter_queries .= '(';

                        if (is_array($meta_value)) {

                            $meta_value_count = count($meta_value);

                            foreach ($meta_value as $index2 => $value) {
                                $index2++;

                                $filter_queries .= $wpdb->prepare(
                                    "({$wpdb->usermeta}.meta_key = %s AND {$wpdb->usermeta}.meta_value LIKE %s)",
                                    $meta_key,
                                    '%' . $wpdb->esc_like($value) . '%'
                                );

                                if ($index2 != $meta_value_count) {
                                    $filter_queries .= ' OR ';
                                }
                            }

                        } else {

                            $filter_queries .= $wpdb->prepare(
                                "({$wpdb->usermeta}.meta_key = %s AND {$wpdb->usermeta}.meta_value = %s)",
                                $meta_key,
                                $meta_value
                            );
                        }

                        $filter_queries .= ')';

                        $filter_queries .= ')';
                    }
                }

                $queries[] = $filter_queries;

                $where = vsprintf(
                    " AND ((" . implode(' OR ', $OR_placeholders) . " ) %s )",
                    $queries
                );

                $sql['where'] = $where;

                return $sql;
            });

            if (is_array($parsed_args['search_meta_fields']) && ! empty($parsed_args['search_meta_fields'])) {

                $args['meta_query'][0]['relation'] = 'OR';

                foreach ($parsed_args['search_meta_fields'] as $search_meta_field) {

                    $args['meta_query'][0][] = [
                        'key'     => $search_meta_field,
                        'value'   => $search_term,
                        'compare' => 'LIKE'
                    ];
                }
            }
        }

        return new WP_User_Query(apply_filters('ppress_member_directory_wp_user_args', $args, $this->_form_id, $this));
    }

    protected function get_current_page(): int
    {
        return absint(max(1, ppressGET_var('mdpage' . $this->_form_id, 1, true)));
    }

    protected function display_pagination(
        $total_users_found,
        $users_per_page,
        $prev_text = '<span class="ppress-material-icons">keyboard_arrow_left</span>',
        $next_text = '<span class="ppress-material-icons">keyboard_arrow_right</span>'
    )
    {
        $current_page = $this->get_current_page();

        $total_pages = ceil($total_users_found / ($users_per_page ?: 9));

        if ($total_pages > 1) {

            echo '<div class="ppmd-pagination-wrap">';

            // from https://wordpress.stackexchange.com/questions/275527/paginate-links-ignore-my-format
            echo paginate_links([
                //'base'      => '%_%', somehow with this enabled, pagination breaks where page 1 link becomes the current page url
                'total'     => $total_pages,
                'current'   => $current_page,
                'format'    => '?mdpage' . $this->_form_id . '=%#%',
                'prev_text' => $prev_text,
                'next_text' => $next_text
            ]);

            echo '</div>';
        }
    }
}

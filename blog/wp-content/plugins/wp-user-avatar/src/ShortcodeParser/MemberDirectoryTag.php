<?php

namespace ProfilePress\Core\ShortcodeParser;

use ProfilePress\Core\Classes\FormRepository as FR;
use ProfilePress\Core\ShortcodeParser\Builder\FrontendProfileBuilder;
use ProfilePress\Core\Themes\DragDrop\MemberDirectoryTrait;
use WP_User;

class MemberDirectoryTag
{
    use MemberDirectoryTrait;

    protected int $directory_id;

    protected int $total_users_found;

    public function __construct()
    {
        add_shortcode('profilepress-member-directory', [$this, 'parser']);
        add_action('init', [$this, 'base64_search_query_params']);

        $this->define_shortcodes();
    }

    public function base64_search_query_params()
    {
        if (empty($_GET['ppmd-search'])) return;

        $directory_id = absint($_GET['ppmd-search']);
        $url          = ppress_get_current_url_raw();

        if (
            ! empty($_GET['search-' . $directory_id]) ||
            (is_array($_GET['filters']) && ! empty(array_filter($_GET['filters'])))
        ) {
            $url = add_query_arg(
                [sprintf('filter%s', $directory_id) => base64_encode(wp_json_encode($_GET))],
                $url
            );

            $url .= '#pp-member-directory-' . $directory_id;

            wp_safe_redirect($url);
            exit;
        }
    }

    /**
     * @param $atts
     *
     * @return string
     */
    public function parser($atts): string
    {
        // only useful for shortcode builder member directory
        $atts = shortcode_atts([
            'id'            => '',
            'sorting'       => 'newest',
            'search_fields' => 'pp_email_address,pp_website_url,pp_display_name,first_name,last_name'
        ], $atts);

        if (empty($atts['id'])) return esc_html__('No member directory ID specified.', 'wp-user-avatar');

        $id = absint($atts['id']);

        $this->directory_id = $id;

        do_action('ppress_member_directory_before', $id, $atts);

        $this->init($atts['sorting'], $atts['search_fields']);

        $attribution_start = apply_filters('ppress_hide_attribution', '<!-- This WordPress member directory is built and powered by ProfilePress WordPress plugin - https://profilepress.com -->' . "\r\n");
        $attribution_end   = apply_filters('ppress_hide_attribution', "\r\n" . '<!-- / ProfilePress WordPress plugin. -->' . "\r\n");
        $css               = self::directory_css($id);

        return apply_filters('ppress_member_directory', $attribution_start . $css . $this->directory_structure($id) . $attribution_end, $id);
    }

    /**
     * @param int $id
     *
     * @return string
     */
    public static function directory_structure(int $id): string
    {
        if (FR::is_drag_drop($id, FR::MEMBERS_DIRECTORY_TYPE)) {
            $form_instance = FR::dnd_class_instance($id, FR::MEMBERS_DIRECTORY_TYPE);
            if ( ! $form_instance) return esc_html__('Member directory class not found. Please check it actually exist in ProfilePress.', 'wp-user-avatar');
            $structure = $form_instance->form_structure();
        } else {
            $structure = FR::get_form_meta($id, FR::MEMBERS_DIRECTORY_TYPE, FR::FORM_STRUCTURE);

            // replace [ and ] in shortcodes to { and } so they don't get parsed yet inside [user-loop] ... [/user-loop]
            $structure = self::convert_shortcode_brackets($structure);
        }

        return do_shortcode($structure);
    }

    /**
     * @param int $id
     *
     * @return string
     */
    public static function directory_css(int $id): string
    {
        if (FR::is_drag_drop($id, FR::MEMBERS_DIRECTORY_TYPE)) {
            $form_instance = FR::dnd_class_instance($id, FR::MEMBERS_DIRECTORY_TYPE);
            if ( ! $form_instance) return '';
            $css = $form_instance->minified_form_css();
        } else {
            $css = FR::get_form_meta($id, FR::MEMBERS_DIRECTORY_TYPE, FR::FORM_CSS);
        }

        return "<style>$css</style>";
    }

    /** Member directory shortcode builder codes STARTS HERE  */

    public function define_shortcodes()
    {
        add_shortcode('user-loop', [$this, 'user_loop']);
        add_shortcode('user-search-form', [$this, 'search_form']);
        add_shortcode('user-pagination', [$this, 'pagination']);
    }

    public function init($sorting = 'newest', $search_fields = '')
    {
        if ( ! isset($this->directory_id) && isset($GLOBALS['ppress_member_directory_id'])) {
            $this->directory_id = $GLOBALS['ppress_member_directory_id'];
        }

        static $cache_bucket = [];

        if ( ! isset($cache_bucket[$this->directory_id])) {

            $cache_bucket[$this->directory_id] = true;

            if (FR::is_drag_drop($this->directory_id, FR::MEMBERS_DIRECTORY_TYPE)) return;

            $user_per_page = FR::get_form_meta($this->directory_id, FR::MEMBERS_DIRECTORY_TYPE, 'users_per_page');

            $user_ids_include = FR::get_form_meta($this->directory_id, FR::MEMBERS_DIRECTORY_TYPE, 'user_ids_include');
            $user_ids_exclude = FR::get_form_meta($this->directory_id, FR::MEMBERS_DIRECTORY_TYPE, 'user_ids_exclude');

            $db_user_roles = FR::get_form_meta($this->directory_id, FR::MEMBERS_DIRECTORY_TYPE, 'user_roles');
            $user_roles    = ! empty($db_user_roles) ? array_map('trim', explode(',', $db_user_roles)) : [];

            $search_fields = ! empty($search_fields) ? array_map('trim', explode(',', $search_fields)) : [];

            $this->initializeMemberDirectoryTrait(
                $this->directory_id,
                [
                    'users_per_page' => $user_per_page,
                    'user_roles'     => $user_roles,
                    'specific_users' => $user_ids_include,
                    'exclude_users'  => $user_ids_exclude,
                    'search_fields'  => $search_fields,
                    'sort_default'   => $sorting
                ]
            );
        }
    }

    public function search_form($atts)
    {
        // calling this is required incase pagination shortcode is used before user-loop shortcode
        $this->init();

        $atts = shortcode_atts([
            'button_label'             => esc_html__('Search', 'wp-user-avatar'),
            'placeholder' => esc_html__('Search', 'wp-user-avatar'),
        ], $atts);

        $entered_search_term = ppress_var($this->search_filter_query_params(), 'search-' . $this->directory_id, '');
        ob_start();
        ?>
        <div class="ppress-members-search-wrap">
            <form action="<?= ppress_get_current_url_query_string() ?>" method="get">
                <label>
                    <input name="search-<?= $this->directory_id ?>" type="search" class="ppressmd-search-line" placeholder="<?php echo esc_attr($atts['placeholder']) ?>" value="<?php echo esc_attr($entered_search_term) ?>">
                </label>
                <input type="submit" class="ppress-members-submit-button" value="<?php echo esc_attr($atts['button_label']) ?>">
                <input type="hidden" name="ppmd-search" value="<?php echo esc_attr($this->directory_id) ?>">
            </form>
        </div>
        <?php
        return ob_get_clean();
    }

    public function pagination(array $atts): string
    {
        // calling this is required incase pagination shortcode is used before user-loop shortcode
        $this->init();

        $atts = shortcode_atts([
            'prev_text' => esc_html__('&laquo; Previous', 'wp-user-avatar'),
            'next_text' => esc_html__('Next &raquo;', 'wp-user-avatar'),
        ], $atts);

        $user_per_page = FR::get_form_meta($this->directory_id, FR::MEMBERS_DIRECTORY_TYPE, 'users_per_page');

        ob_start();

        $this->display_pagination(
            $this->total_users_found,
            $user_per_page,
            $atts['prev_text'],
            $atts['next_text']
        );

        return ob_get_clean();
    }

    public function user_loop($atts, $content): string
    {
        $this->init();

        global $ppress_frontend_profile_user_obj;

        $wp_user_query           = $this->wp_user_query();
        $this->total_users_found = $wp_user_query['total_users_found'];

        $output = '';

        /** @var WP_User $user */
        foreach ($wp_user_query['users'] as $user) {

            $ppress_frontend_profile_user_obj = $user;

            new FrontendProfileBuilder($user);

            // replace { and } with { and } so they get parsed as shortcode since they are inside [user-loop] ... [/user-loop]
            $content = preg_replace("/(\{)([^\}]+)(\})/", '[$2]', $content);

            $output .= do_shortcode($content);
        }

        return $output;
    }

    public static function convert_shortcode_brackets($content)
    {
        // First, we'll split the content at user-loop tags to process only what's between them
        $pattern = "/(\[user-loop\])(.*?)(\[\/user-loop\])/s";

        return preg_replace_callback(
            $pattern,
            function ($matches) {
                // $matches[1] = [user-loop]
                // $matches[2] = content between tags
                // $matches[3] = [/user-loop]

                // Replace square brackets with curly brackets, but only for shortcodes
                $converted_content = preg_replace(
                    "/\[([a-zA-Z0-9-]+(?:\s+[^]]+)?)\]/",
                    '{$1}',
                    $matches[2]
                );

                // Return the complete string with original user-loop tags
                return $matches[1] . $converted_content . $matches[3];
            },
            $content
        );
    }

    public static function get_instance()
    {
        static $instance = false;

        if ( ! $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
<?php

namespace ProfilePress\Core\Admin\SettingsPages;

use ProfilePress\Core\Admin\SettingsPages\DragDropBuilder\DragDropBuilder;
use ProfilePress\Core\Classes\FormRepository as FR;
use ProfilePress\Custom_Settings_Page_Api;

// Exit if accessed directly
if ( ! defined('ABSPATH')) {
    exit;
}

class MemberDirectories extends AbstractSettingsPage
{
    /**
     * @var FormList
     */
    protected $wplist_instance;
    protected $DragDropClassInstance;

    public function __construct()
    {
        add_action('ppress_register_menu_page', array($this, 'register_settings_page'));
        add_action('ppress_admin_settings_page_member-directories', [$this, 'settings_admin_page_callback']);
        add_action('ppress_admin_settings_page_add-new', [$this, 'settings_admin_page_callback']);
        add_action('ppress_admin_settings_page_edit-shortcode-member-directory', [$this, 'settings_admin_page_callback']);

        add_filter('set-screen-option', array($this, 'set_screen'), 10, 3);
        add_filter('set_screen_option_forms_per_page', array($this, 'set_screen'), 10, 3);

        $this->DragDropClassInstance = DragDropBuilder::get_instance();

        do_action('ppress_admin_member_directory_class_constructor');
    }

    public function admin_page_title(): string
    {
        $page_title = esc_html__('Member Directories', 'wp-user-avatar');

        if ( ! empty($_GET['page']) && $_GET['page'] == PPRESS_MEMBER_DIRECTORIES_SLUG) {

            if ( ! empty($_GET['view'])) {
                if ($_GET['view'] === 'add') $page_title = esc_html__('Add Member Directory', 'wp-user-avatar');

                if ($_GET['view'] === 'edit-shortcode-member-directory' ||
                    ( ! empty($_GET['form-type']) && $_GET['form-type'] == FR::MEMBERS_DIRECTORY_TYPE)) {
                    $page_title = esc_html__('Edit Member Directory', 'wp-user-avatar');
                }
            }
        }

        return $page_title;
    }

    public function register_settings_page()
    {
        $hook = add_submenu_page(
            PPRESS_DASHBOARD_SETTINGS_SLUG,
            'ProfilePress ' . $this->admin_page_title(),
            esc_html__('Member Directories', 'wp-user-avatar'),
            'manage_options',
            PPRESS_MEMBER_DIRECTORIES_SLUG,
            array($this, 'admin_page_callback')
        );

        add_action("load-$hook", array($this, 'screen_option'));
    }

    public function default_header_menu()
    {
        return 'member-directories';
    }

    /**
     * Save screen option.
     *
     * @param string $status
     * @param string $option
     * @param string $value
     *
     * @return mixed
     */
    public function set_screen($status, $option, $value)
    {
        return $value;
    }

    /**
     * Screen options
     */
    public function screen_option()
    {
        if (isset($_GET['page'], $_GET['view']) && strpos($_GET['view'], 'edit-shortcode') !== false) return;

        $args = [
            'label'   => esc_html__('Member Directories', 'wp-user-avatar'),
            'default' => 10,
            'option'  => 'forms_per_page',
        ];

        add_screen_option('per_page', $args);

        if (isset($_GET['id']) || ppress_var($_GET, 'view') == 'add-new') {
            add_filter('screen_options_show_screen', '__return_false');
        }

        $this->wplist_instance = MembersDirectoryList::get_instance();
    }

    /**
     * @param $echo
     *
     * @return string|void
     */
    public function live_form_preview_btn($echo = true)
    {
        if ( ! isset($_GET['view'])) return;

        $preview_url = esc_url(add_query_arg(
            ['pp_preview_form' => absint($_GET['id']), 'type' => FR::MEMBERS_DIRECTORY_TYPE],
            home_url()
        ));

        $html = "<a target='_blank' class=\"add-new-h2\" href=\"$preview_url\">" . esc_html__('Live Preview', 'wp-user-avatar') . '</a>';

        if ($echo === false) {
            return $html;
        }

        echo $html;
    }

    /**
     * Build the settings page structure. I.e tab, sidebar.
     *
     * @return mixed|void
     */
    public function settings_admin_page_callback()
    {
        remove_all_actions('media_buttons');
        remove_all_filters('media_buttons_context');
        remove_all_filters('mce_buttons', 10);
        remove_all_filters('mce_external_plugins', 10);

        add_action('media_buttons', 'media_buttons');

        if ( ! empty($_GET['view']) && $_GET['view'] == 'add-new') {
            echo '<script type="text/javascript">var pp_is_member_directory = true;</script>';

            return AddNewForm::get_instance()->settings_admin_page();
        }

        $short_circuit = apply_filters('ppress_member_directory_settings_admin_page_short_circuit', false);

        if (false !== $short_circuit) return $short_circuit;

        add_filter('wp_cspa_main_content_area', array($this, 'wp_list_table'), 10, 2);
        add_action('wp_cspa_before_closing_header', [$this, 'add_new_form_button']);

        $instance = Custom_Settings_Page_Api::instance();
        $instance->option_name(PPRESS_FORMS_DB_OPTION_NAME);
        $instance->page_header($this->admin_page_title());
        $this->register_core_settings($instance, true);
        echo '<div class="pp-form-listing pp-forms">';
        $instance->build(true);
        echo '</div>';
    }

    public function add_new_form_button()
    {
        $url = esc_url(add_query_arg('view', 'add-new', PPRESS_MEMBER_DIRECTORIES_SETTINGS_PAGE));
        echo "<a class=\"add-new-h2\" href=\"$url\">" . esc_html__('Add New', 'wp-user-avatar') . '</a>';
    }

    /**
     * @param string $content
     * @param string $option_name settings Custom_Settings_Page_Api option name.
     *
     * @return string
     */
    public function wp_list_table($content, $option_name)
    {
        if ($option_name != PPRESS_FORMS_DB_OPTION_NAME) return $content;

        $this->wplist_instance->prepare_items(FR::MEMBERS_DIRECTORY_TYPE);

        ob_start();

        $this->wplist_instance->display();

        return ob_get_clean();
    }

    /**
     * @return self
     */
    public static function get_instance()
    {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new self();
        }

        return $instance;
    }
}
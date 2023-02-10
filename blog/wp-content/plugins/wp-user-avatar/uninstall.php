<?php
//if uninstall not called from WordPress exit
use ProfilePress\Core\Base;

if ( ! defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

// Load ProfilePress file
include_once(dirname(__FILE__) . '/wp-user-avatar.php');

function ppress_mo_uninstall_function()
{
    if (ppress_get_setting('remove_plugin_data') == 'yes') {

        wp_clear_scheduled_hook('ppress_daily_recurring_job');

        delete_option('ppress_cpf_select_multi_selectable');
        delete_option(PPRESS_SETTINGS_DB_OPTION_NAME);
        delete_option(PPRESS_CONTACT_INFO_OPTION_NAME);
        delete_option(PPRESS_FORMS_DB_OPTION_NAME);
        delete_option(PPRESS_PAYMENT_METHODS_OPTION_NAME);
        delete_option(PPRESS_TAXES_OPTION_NAME);
        delete_option('ppress_plugin_activated');
        delete_option('ppress_new_v4_install');
        delete_option('ppress_license_key');
        delete_option('ppress_license_status');
        delete_option('ppress_db_ver');
        delete_option('ppress_extension_manager');
        delete_option('ppress_install_date');
        delete_option('ppress_dismiss_leave_review_forever');
        delete_site_option('pand-' . md5('ppress-create-plugin-pages-notice'));
        delete_site_option('pand-' . md5('ppress-review-plugin-notice'));
        delete_site_option('pand-' . md5('pp-registration-disabled-notice'));
        delete_site_option('pand-' . md5('wp_user_avatar_now_ppress_notice'));
        delete_site_option('pand-' . md5('ppress_dismissed_uploads_directory_is_unprotected'));

        // Admin dashboard access control
        delete_option('ppress_abdc_options');

        // wp user avatar
        delete_option('avatar_default_wp_user_avatar');
        delete_option('wp_user_avatar_disable_gravatar');
        delete_option('wp_user_avatar_load_scripts');
        delete_option('wp_user_avatar_resize_crop');
        delete_option('wp_user_avatar_resize_h');
        delete_option('wp_user_avatar_resize_upload');
        delete_option('wp_user_avatar_resize_w');
        delete_option('wp_user_cover_upload_size_limit');
        delete_option('wp_user_avatar_upload_size_limit');
        delete_option('wp_user_avatar_default_avatar_updated');
        delete_option('wp_user_avatar_media_updated');
        delete_option('wp_user_avatar_users_updated');
        delete_option('wpua_has_gravatar');
        delete_option('ppress_is_from_wp_user_avatar');
        // Delete post meta
        delete_post_meta_by_key('_wp_attachment_wp_user_avatar');
        // Reset all default avatars to Mystery Man
        update_option('avatar_default', 'mystery');

        global $wpdb;

        // Remove any transients we've left behind
        $wpdb->query("DELETE FROM $wpdb->options WHERE option_name LIKE '\_transient\_pp%'");
        $wpdb->query("DELETE FROM $wpdb->options WHERE option_name LIKE '\_site\_transient\_pp%'");
        $wpdb->query("DELETE FROM $wpdb->options WHERE option_name LIKE '\_transient\_timeout\_pp%'");
        $wpdb->query("DELETE FROM $wpdb->options WHERE option_name LIKE '\_site\_transient\_timeout\_pp%'");

        $drop_tables   = [];
        $drop_tables[] = Base::form_db_table();
        $drop_tables[] = Base::form_meta_db_table();
        $drop_tables[] = Base::meta_data_db_table();
        $drop_tables[] = Base::subscription_plans_db_table();
        $drop_tables[] = Base::customers_db_table();
        $drop_tables[] = Base::orders_db_table();
        $drop_tables[] = Base::order_meta_db_table();
        $drop_tables[] = Base::subscriptions_db_table();
        $drop_tables[] = Base::coupons_db_table();
        $drop_tables[] = $wpdb->prefix . 'ppress_sessions';

        $drop_tables = apply_filters('ppress_drop_database_tables', $drop_tables);

        foreach ($drop_tables as $table) {
            $wpdb->query("DROP TABLE IF EXISTS $table");
        }

        flush_rewrite_rules();

        // Clear any cached data that has been removed.
        wp_cache_flush();
    }
}

if ( ! is_multisite()) {
    ppress_mo_uninstall_function();
} else {

    if ( ! wp_is_large_network()) {
        $site_ids = get_sites(['fields' => 'ids', 'number' => 0]);

        foreach ($site_ids as $site_id) {
            switch_to_blog($site_id);
            ppress_mo_uninstall_function();
            restore_current_blog();
        }
    }
}
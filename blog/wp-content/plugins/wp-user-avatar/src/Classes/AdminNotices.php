<?php

namespace ProfilePress\Core\Classes;

use ProfilePress\Core\Membership\PaymentMethods\AbstractPaymentMethod;
use ProfilePress\Core\Membership\PaymentMethods\Stripe\Helpers;
use ProfilePressVendor\PAnD;

class AdminNotices
{
    public function __construct()
    {
        add_action('admin_init', function () {

            if (ppress_is_admin_page()) {
                remove_all_actions('admin_notices');
            }

            add_action('admin_notices', [$this, 'admin_notices_bucket']);

            add_filter('removable_query_args', [$this, 'removable_query_args']);
        });

        if (class_exists('\ProfilePressVendor\PAnD')) {
            // persist admin notice dismissal initialization
            add_action('admin_init', array('ProfilePressVendor\PAnD', 'init'));
            add_action('wp_ajax_dismiss_admin_notice', ['ProfilePressVendor\PAnD', 'dismiss_admin_notice']);
        }
        add_action('admin_init', array($this, 'act_on_request'));

        add_filter('admin_body_class', [$this, 'add_admin_body_class']);
    }

    public function add_admin_body_class($classes)
    {
        $current_screen = get_current_screen();

        if (empty ($current_screen)) return $classes;

        if (false !== strpos($current_screen->id, 'ppress-')) {
            // Leave space on both sides so other plugins do not conflict.
            $classes .= ' ppress-admin ';
        }

        return $classes;
    }

    public function admin_notices_bucket()
    {
        do_action('ppress_admin_notices');

        $this->test_mode_notice();

        $this->seo_friendly_permalink_not_set();

        $this->connect_enabled_stripe_method();

        $this->registration_disabled_notice();

        $this->create_plugin_pages();

        $this->review_plugin_notice();

        $this->wp_user_avatar_now_ppress_notice();

        $this->addons_promo_notices();
    }

    public function act_on_request()
    {
        if ( ! empty($_GET['ppress_admin_action'])) {

            if ($_GET['ppress_admin_action'] == 'dismiss_leave_review_forever') {
                update_option('ppress_dismiss_leave_review_forever', true);
            }

            if ($_GET['ppress_admin_action'] == 'dismiss_wp_user_avatar_now_ppress') {

                PAnD::set_admin_notice_cache('wp_user_avatar_now_ppress_notice', 'forever');
            }

            wp_safe_redirect(esc_url_raw(remove_query_arg('ppress_admin_action')));
            exit;
        }
    }

    public function test_mode_notice()
    {
        if (ppress_is_test_mode() && current_user_can('manage_options')) {
            $link = add_query_arg(
                ['view' => 'payments', 'section' => 'payment-methods'],
                PPRESS_SETTINGS_SETTING_PAGE
            );

            $notice = sprintf(__('<strong>Important:</strong> No real payment is being processed because ProfilePress is in test mode. Go to <a href="%s">Payment method settings</a> to disable test mode.', 'wp-user-avatar'), $link);
            ?>
            <div class="notice notice-warning">
                <p><?php echo $notice; ?></p>
            </div>
            <?php
        }
    }

    /**
     * Display one-time admin notice to review plugin at least 7 days after installation
     */
    public function review_plugin_notice()
    {
        if ( ! current_user_can('manage_options')) return;

        if ( ! PAnD::is_admin_notice_active('ppress-review-plugin-notice-forever')) return;

        if (get_option('ppress_dismiss_leave_review_forever', false)) return;

        $install_date = get_option('ppress_install_date', '');

        if (empty($install_date)) return;

        $diff = round((time() - strtotime($install_date)) / 24 / 60 / 60);

        if ($diff < 7) return;

        $review_url = 'https://wordpress.org/support/plugin/wp-user-avatar/reviews/?filter=5#new-post';

        $dismiss_url = esc_url(add_query_arg('ppress_admin_action', 'dismiss_leave_review_forever'));

        $notice = sprintf(
            __('Hey, I noticed you have been using ProfilePress for at least 7 days now - that\'s awesome! Could you please do us a BIG favor and give it a %1$s5-star rating on WordPress?%2$s This will help us spread the word and boost our motivation - thanks!', 'wp-user-avatar'),
            '<a href="' . $review_url . '" target="_blank">',
            '</a>'
        );
        $label  = __('Sure! I\'d love to give a review', 'wp-user-avatar');

        $dismiss_label = __('Dismiss Forever', 'wp-user-avatar');

        $notice .= "<div style=\"margin:10px 0 0;\"><a href=\"$review_url\" target='_blank' class=\"button-primary\">$label</a></div>";
        $notice .= "<div style=\"margin:10px 0 0;\"><a href=\"$dismiss_url\">$dismiss_label</a></div>";

        echo '<div data-dismissible="ppress-review-plugin-notice-forever" class="update-nag notice notice-warning is-dismissible">';
        echo "<p>$notice</p>";
        echo '</div>';
    }

    public function seo_friendly_permalink_not_set()
    {
        if ( ! PAnD::is_admin_notice_active('ppress_seo_friendly_permalink_not_set-2')) return;

        if (is_admin() && current_user_can('administrator') && ! get_option('permalink_structure')) {

            $change_permalink_button = sprintf(
                '<a class="button" href="%s">%s</a>',
                admin_url('options-permalink.php'),
                __('Change Permalink Structure', 'wp-user-avatar')
            );

            $notice = sprintf(
                __("Your site permalink structure is currently set to <code>Plain</code>. This setting is not compatible with ProfilePress. Change your permalink structure to any other setting to avoid issues. We recommend <code>Post name</code>.</p><p>%s", 'wp-user-avatar'),
                $change_permalink_button
            );

            echo '<div data-dismissible="ppress_seo_friendly_permalink_not_set-2" class="update-nag notice notice-warning is-dismissible">';
            echo "<p>$notice</p>";
            echo '</div>';
        }
    }

    /**
     * Let user avatar plugin users know it is now ProfilePress
     */
    public function wp_user_avatar_now_ppress_notice()
    {
        if ( ! PAnD::is_admin_notice_active('wp_user_avatar_now_ppress_notice-forever')) return;

        if (get_option('ppress_is_from_wp_user_avatar', false) != 'true') return;

        $dismiss_url = esc_url(add_query_arg('ppress_admin_action', 'dismiss_wp_user_avatar_now_ppress'));

        $notice = sprintf(
            __('Important news! %1$sWP User Avatar%2$s is now %1$sProfilePress%2$s. We added new features such as member directories, frontend user registration & login forms, user profile, content protection and more. %3$sCheck Them Out%5$s | %4$sDismiss Notice%5$s', 'wp-user-avatar'),
            '<strong>', '</strong>',
            '<a href="' . PPRESS_SETTINGS_SETTING_GENERAL_PAGE . '">', '<a href="' . $dismiss_url . '">', '</a>'
        );

        echo '<div data-dismissible="wp_user_avatar_now_ppress_notice-forever" class="update-nag notice notice-warning is-dismissible">';
        echo "<p>$notice</p>";
        echo '</div>';
    }

    public function addons_promo_notices()
    {
        $notices = [
            'learndash' => [
                'message'   => esc_html__('Did you know that you can sell access to LearnDash courses and groups and enroll users after registration?', 'wp-user-avatar'),
                'url'       => 'https://profilepress.com/article/setting-up-learndash-addon/',
                'condition' => class_exists('\SFWD_LMS')
            ]
        ];

        foreach ($notices as $notice_id => $notice) {

            if (true === $notice['condition']) {

                $notice_pand_key = sprintf('ppress_addons_promo_%s_notice-forever', $notice_id);

                $url = $notice['url'] . '?utm_source=wp_dashboard&utm_medium=addons-promo&utm_campaign=admin-notice';

                if (PAnD::is_admin_notice_active($notice_pand_key)) {

                    echo '<div data-dismissible="' . $notice_pand_key . '" class="notice notice-info is-dismissible">';
                    printf(
                        '<p>%s <a target="_blank" href="%s">%s</a></p>',
                        $notice['message'], $url, esc_html__('Learn more', 'wp-user-avatar'));
                    echo '</div>';
                }
            }
        }
    }

    public function create_plugin_pages()
    {
        if ( ! PAnD::is_admin_notice_active('ppress-create-plugin-pages-notice-forever')) {
            return;
        }

        $create_page_url = esc_url(add_query_arg(['ppress_create_pages' => 'true', 'ppress_nonce' => wp_create_nonce('ppress_create_pages')]));

        $class   = 'notice notice-info is-dismissible';
        $message = __('ProfilePress needs to create several pages (Checkout, Order Confirmation, User Profile, My Account, Registration, Login, Member Directory) to function correctly.', 'wp-user-avatar');
        $buttons = sprintf(
            '<a href="%s" class="button button-primary">%s</a> <a href="#" class="button-secondary dismiss-this">%s</a>',
            $create_page_url, esc_html__('Create Pages', 'wp-user-avatar'), esc_html__('No Thanks', 'wp-user-avatar')
        );

        printf('<div data-dismissible="ppress-create-plugin-pages-notice-forever" class="%1$s"><p>%2$s</p><p>%3$s</p></div>', esc_attr($class), esc_html($message), $buttons);
    }

    public function connect_enabled_stripe_method()
    {
        if ( ! PAnD::is_admin_notice_active('ppress-connect-enabled-stripe-method-7')) {
            return;
        }

        if (
            ppress_get_payment_method_setting('stripe_enabled') != 'true' ||
            ! empty(Helpers::get_secret_key())
        ) {
            return;
        }

        $class = 'notice notice-info is-dismissible';

        $message = $this->stripe_connect_notice_html(
            esc_html__('You enabled Stripe payment method in ProfilePress but did not connect your Stripe account. Connect now to start accepting payments instantly.', 'wp-user-avatar')
        );

        printf('<div data-dismissible="ppress-connect-enabled-stripe-method-7" class="%1$s">%2$s</div>', esc_attr($class), $message);
    }

    /**
     * Notice when user registration is disabled.
     */
    function registration_disabled_notice()
    {
        if ( ! current_user_can('manage_options')) return;

        if (get_option('users_can_register') || apply_filters('ppress_remove_registration_disabled_notice', false)) {
            return;
        }

        if ( ! class_exists('\ProfilePressVendor\PAnD')) return;

        if ( ! PAnD::is_admin_notice_active('pp-registration-disabled-notice-forever')) {
            return;
        }

        $url = is_multisite() ? network_admin_url('settings.php') : admin_url('options-general.php');

        ?>
        <div data-dismissible="pp-registration-disabled-notice-forever" id="message" class="updated notice is-dismissible">
            <p>
                <?php printf(__('User registration currently disabled. To enable, Go to <a href="%1$s">Settings -> General</a>, and under Membership, check "Anyone can register"', 'wp-user-avatar'), $url); ?>
                . </p>
        </div>
        <?php
    }

    public function removable_query_args($args = [])
    {
        $args[] = 'settings-updated';
        $args[] = 'rule-updated';
        $args[] = 'settings-added';
        $args[] = 'field-edited';
        $args[] = 'field-added';
        $args[] = 'updated-contact-info';
        $args[] = 'form-added';
        $args[] = 'form-edited';
        $args[] = 'user-profile-added';
        $args[] = 'user-profile-edited';
        $args[] = 'melange-edited';
        $args[] = 'melange-added';
        $args[] = 'license';

        return $args;
    }

    private function stripe_connect_notice_html($message)
    {
        ob_start();
        ?>

        <p>
            <?php echo $message; ?>
        </p>

        <p>
            <?php echo Helpers::get_connect_button(AbstractPaymentMethod::get_payment_method_admin_page_url('stripe')); ?>

            <a href="https://profilepress.com/article/setting-up-stripe/" target="_blank" rel="noopener noreferrer" class="button button-secondary" style="margin-left: 5px;">
                <?php esc_html_e('Learn More', 'wp-user-avatar'); ?>
            </a>
        </p>

        <?php

        return ob_get_clean();
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
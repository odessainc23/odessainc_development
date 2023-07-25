<?php

namespace ProfilePress\Core\Admin\SettingsPages\Membership;

use ProfilePress\Core\Admin\SettingsPages\AbstractSettingsPage;
use ProfilePress\Core\Classes\ExtensionManager;
use ProfilePress\Core\Membership\CheckoutFields;
use ProfilePress\Custom_Settings_Page_Api;

class PaymentSettings extends AbstractSettingsPage
{
    public $settingsPageInstance;

    public function __construct()
    {
        add_filter('ppress_settings_page_tabs', [$this, 'header_menu_tab']);
        add_filter('ppress_settings_page_submenus_tabs', [$this, 'header_sub_menu_tab']);
        add_action('ppress_admin_settings_submenu_page_payments_settings', [$this, 'settings_page']);
    }

    public function header_menu_tab($tabs)
    {
        $tabs[35] = ['id' => 'payments', 'url' => add_query_arg('view', 'payments', PPRESS_SETTINGS_SETTING_PAGE), 'label' => esc_html__('Payments', 'wp-user-avatar')];

        return $tabs;
    }

    public function header_sub_menu_tab($tabs)
    {
        $tabs[172] = ['parent' => 'payments', 'id' => 'settings', 'label' => esc_html__('Settings', 'wp-user-avatar')];

        return $tabs;
    }

    public function settings_page()
    {
        $page_header = esc_html__('Payment Settings', 'wp-user-avatar');

        $currency_code_options = ppress_get_currencies();

        foreach ($currency_code_options as $code => $name) {
            $currency_code_options[$code] = $name . ' (' . ppress_get_currency_symbol($code) . ')';
        }

        $settings = [
            [
                'section_title'               => esc_html__('Currency Settings', 'wp-user-avatar'),
                'payment_currency'            => [
                    'label'       => esc_html__('Currency', 'wp-user-avatar'),
                    'description' => esc_html__('Choose your currency. Note that some payment gateways have currency restrictions.', 'wp-user-avatar'),
                    'type'        => 'select',
                    'options'     => $currency_code_options
                ],
                'currency_position'           => [
                    'label'       => esc_html__('Currency Position', 'wp-user-avatar'),
                    'description' => esc_html__('The position of the currency symbol.', 'wp-user-avatar'),
                    'type'        => 'select',
                    'options'     => [
                        'left'        => 'Left (' . sprintf('%1$s%2$s', ppress_get_currency_symbol(), 99.99) . ')',
                        'right'       => 'Right (' . sprintf('%2$s%1$s', ppress_get_currency_symbol(), 99.99) . ')',
                        'left_space'  => 'Left with Space (' . sprintf('%1$s&nbsp;%2$s', ppress_get_currency_symbol(), 99.99) . ')',
                        'right_space' => 'Right with Space (' . sprintf('%2$s&nbsp;%1$s', ppress_get_currency_symbol(), 99.99) . ')',
                    ]
                ],
                'currency_decimal_separator'  => [
                    'label'   => esc_html__('Decimal Separator', 'wp-user-avatar'),
                    'type'    => 'select',
                    'options' => [
                        '.' => 'Period (12.50)',
                        ',' => 'Comma (12,50)'
                    ],
                ],
                'currency_thousand_separator' => [
                    'label'   => esc_html__('Thousand Separator', 'wp-user-avatar'),
                    'type'    => 'select',
                    'options' => [
                        ','    => __('Comma (10,000)', 'wp-user-avatar'),
                        '.'    => __('Period (10.000)', 'wp-user-avatar'),
                        ' '    => __('Space (10 000)', 'wp-user-avatar'),
                        'none' => __('None', 'wp-user-avatar')
                    ],
                ],
                'currency_decimal_number'     => [
                    'label'   => esc_html__('Number of Decimals', 'wp-user-avatar'),
                    'type'    => 'select',
                    'options' => [
                        '0' => '0',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                    ]
                ]
            ],
            [
                'section_title'         => esc_html__('Checkout Settings', 'wp-user-avatar'),
                'one_time_trial'        => [
                    'label'       => esc_html__('One Time Trials', 'wp-user-avatar'),
                    'description' => esc_html__('Check this if you will like customers to be prevented from using the free trial of a plan multiple times.', 'wp-user-avatar'),
                    'type'        => 'checkbox'
                ],
                'terms_agreement_label' => [
                    'label'       => esc_html__('Terms & Conditions Label', 'wp-user-avatar'),
                    'description' => sprintf(
                        esc_html__('Label for the "Agree to Terms" checkbox where "[terms]" is a link to the %sterms and condition page%s', 'wp-user-avatar'),
                        '<a href="' . PPRESS_SETTINGS_SETTING_GENERAL_PAGE . '#global_pages?terms_page_id_row" target="_blank">', '</a>'
                    ),
                    'type'        => 'text'
                ],
                'proration_method'      => [
                    'label'       => esc_html__('Proration Method', 'wp-user-avatar'),
                    'description' => sprintf(
                        esc_html__('Specify how to calculate proration for subscription downgrades and upgrades. %sCost-based calculation is where the value of an upgrade is calculated based on the cost difference between the current and new membership plans. %sTime-based calculation is true proration in which the amount of time remaining on the current subscription plan is calculated to adjust the cost of the new subscription.', 'wp-user-avatar'),
                        '</p><p class="description">', '</p><p class="description">'
                    ),
                    'type'        => 'select',
                    'options'     => [
                        'cost-based' => esc_html__('Cost-Based Calculation', 'wp-user-avatar'),
                        'time-based' => esc_html__('Time-Based Calculation', 'wp-user-avatar')
                    ]
                ],
                'disable_auto_renew'    => [
                    'label'          => esc_html__('Disable Auto-renewal', 'wp-user-avatar'),
                    'checkbox_label' => esc_html__('Disable', 'wp-user-avatar'),
                    'description'    => esc_html__('Check to disable automatic renewal of subscriptions at the end of a billing cycle', 'wp-user-avatar'),
                    'type'           => 'checkbox'
                ],
            ]
        ];

        if (ExtensionManager::is_enabled(ExtensionManager::RECAPTCHA)) {
            $settings[1]['checkout_recaptcha'] = [
                'label'       => esc_html__('Checkout reCAPTCHA', 'wp-user-avatar'),
                'description' => esc_html__('Enable to display reCAPTCHA on the checkout page to prevent spam and abuse.', 'wp-user-avatar'),
                'type'        => 'checkbox'
            ];
        }

        if (ExtensionManager::is_enabled(ExtensionManager::SOCIAL_LOGIN)) {
            $settings[1]['checkout_social_login_buttons'] = [
                'label'       => esc_html__('Checkout Social Login', 'wp-user-avatar'),
                'description' => esc_html__('Select the social login buttons to display on the checkout page.', 'wp-user-avatar'),
                'type'        => 'select2',
                'options'     => ppress_social_login_networks()
            ];
        }

        $settingsPageInstance = Custom_Settings_Page_Api::instance('', PPRESS_SETTINGS_DB_OPTION_NAME);
        $settingsPageInstance->page_header($page_header);
        $settingsPageInstance->main_content(apply_filters('ppress_payment_admin_settings', $settings));
        $settingsPageInstance->sidebar(AbstractSettingsPage::sidebar_args());
        $settingsPageInstance->build();
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
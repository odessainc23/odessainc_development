<?php

namespace ProfilePress\Core\Themes\DragDrop;

use ProfilePress\Core\Classes\ExtensionManager as EM;
use ProfilePress\Core\Classes\PROFILEPRESS_sql;
use ProfilePress\Core\ShortcodeParser\Builder\FieldsShortcodeCallback;
use WP_User_Query;

abstract class AbstractMemberDirectoryTheme extends AbstractTheme
{
    use MemberDirectoryTrait;

    public function __construct($form_id, $form_type)
    {
        parent::__construct($form_id, $form_type);

        $this->initializeMemberDirectoryTrait($form_id, [
            'users_per_page' => $this->get_default_result_number_per_page(),
            'user_roles'     => array_filter($this->get_meta('ppress_md_user_roles')),
            'specific_users' => $this->get_meta('ppress_md_specific_users'),
            'exclude_users'  => $this->get_meta('ppress_md_exclude_users'),
            'sort_default'   => $this->get_meta('ppress_md_sort_default'),
            'search_fields'   => $this->get_meta('ppress_md_search_fields')
        ]);

        add_action('ppress_drag_drop_builder_admin_page', [$this, 'js_script']);
    }

    abstract function form_wrapper_class();

    abstract function directory_structure();

    public function form_structure()
    {
        $wp_user_query = $this->wp_user_query();

        $total_users_found = $wp_user_query['total_users_found'];

        $query_params = $this->search_filter_query_params();

        ob_start();

        printf('[pp-form-wrapper class="%s"]', $this->form_wrapper_class());

        $this->search_filter_sort_structure();

        if ( ! $this->is_result_after_search_enabled() || (isset($query_params['ppmd-search']) && $query_params['ppmd-search'] == $this->form_id)) {

            if (0 === $total_users_found) { ?>

                <div class="ppressmd-members-total-wrap">
                    <div class="ppressmd-members-total">
                        <?= $this->get_no_result_text() ?>
                    </div>
                </div>

                <?php

            } else {

                if ( ! empty($query_params[$this->search_query_key()])) { ?>

                    <div class="ppressmd-members-total-wrap">
                        <div class="ppressmd-members-total">

                            <?= str_replace(
                                '{total_users}', $total_users_found,
                                $total_users_found > 1 ? $this->get_results_text() : $this->get_single_result_text()
                            ) ?>
                        </div>
                    </div>

                    <?php
                }
            }

            if ($total_users_found > 0) {

                $this->directory_structure();

                $this->display_pagination(
                    $total_users_found,
                    $this->get_default_result_number_per_page()
                );
            }
        }

        echo '[/pp-form-wrapper]';

        return ob_get_clean();
    }

    public function js_script()
    {
        ?>
        <script type="text/javascript">
            (function ($) {

                var run = function () {
                    $('#ppress_md_enable_custom_sort').on('change', function () {
                        $('.ppress_md_sort_method_fields_wrap').toggle(this.checked);
                    }).trigger('change');

                    $('#ppress_md_enable_search').on('change', function () {
                        $('.ppress_md_search_fields_wrap').toggle(this.checked);
                        $('.ppress_md_enable_filters_wrap').toggle(this.checked);
                        $('.ppress_md_filter_fields_wrap').toggle(this.checked);
                    }).trigger('change');
                };

                $(run);

            })(jQuery);
        </script>
        <?php
    }

    public function default_metabox_settings()
    {
        $data                             = parent::default_metabox_settings();
        $data['ppress_md_user_roles']     = [];
        $data['ppress_md_specific_users'] = '';
        $data['ppress_md_exclude_users']  = '';

        $data['ppress_md_sort_default']       = 'newest';
        $data['ppress_md_enable_custom_sort'] = 'false';
        $data['ppress_md_sort_method_fields'] = [];

        $data['ppress_md_enable_search']  = 'true';
        $data['ppress_md_search_fields']  = [
            'pp_email_address',
            'pp_website_url',
            'pp_display_name',
            'first_name',
            'last_name'
        ];
        $data['ppress_md_enable_filters'] = 'false';
        $data['ppress_md_filter_fields']  = [];

        $data['ppress_md_enable_result_after_search'] = 'false';
        $data['ppress_md_result_number_per_page']     = '9';
        $data['ppress_md_results_text']               = sprintf(esc_html__('%s Members', 'wp-user-avatar'), '{total_users}');
        $data['ppress_md_single_result_text']         = sprintf(esc_html__('%s Member', 'wp-user-avatar'), '{total_users}');
        $data['ppress_md_no_result_text']             = esc_html__('We could not find any user that matches your search criteria', 'wp-user-avatar');

        $data['ppress_md_search_filter_field_text_color']   = '#666666';
        $data['ppress_md_search_filter_field_border_color'] = '#dddddd';

        $data['ppress_md_pagination_link_color']              = '#666666';
        $data['ppress_md_pagination_active_link_color']       = '#ffffff';
        $data['ppress_md_pagination_active_background_color'] = '#007bff';

        return $data;
    }

    public function appearance_settings($settings)
    {
        $settings[] = [
            'id'          => 'ppress_md_user_roles',
            'type'        => 'select2',
            'label'       => esc_html__('User Roles to Display', 'wp-user-avatar'),
            'description' => esc_html__('If you do not want to show all members, select the user roles to appear in this directory.', 'wp-user-avatar'),
            'options'     => ppress_wp_roles_key_value(false),
            'priority'    => 5
        ];

        $settings[] = [
            'id'          => 'ppress_md_specific_users',
            'type'        => 'textarea',
            'placeholder' => esc_html__('Example: 1, 6, 32', 'wp-user-avatar'),
            'label'       => esc_html__('Comma Separated List of Users ID to Only Show', 'wp-user-avatar'),
            'priority'    => 10
        ];

        $settings[] = [
            'id'          => 'ppress_md_exclude_users',
            'type'        => 'textarea',
            'placeholder' => esc_html__('Example: 1, 6, 32', 'wp-user-avatar'),
            'label'       => esc_html__('Comma Separated List of Users ID to Exclude', 'wp-user-avatar'),
            'priority'    => 10
        ];

        return $settings;
    }

    public function color_settings($settings)
    {
        $settings2 = [
            [
                'id'    => 'ppress_md_search_filter_field_text_color',
                'type'  => 'color',
                'label' => esc_html__('Search & Filter Fields Text', 'wp-user-avatar')
            ],
            [
                'id'    => 'ppress_md_search_filter_field_border_color',
                'type'  => 'color',
                'label' => esc_html__('Search & Filter Fields Border', 'wp-user-avatar')
            ],
            [
                'id'    => 'ppress_md_pagination_link_color',
                'type'  => 'color',
                'label' => esc_html__('Pagination Links', 'wp-user-avatar')
            ],
            [
                'id'    => 'ppress_md_pagination_active_link_color',
                'type'  => 'color',
                'label' => esc_html__('Pagination Active Link Color', 'wp-user-avatar')
            ],
            [
                'id'    => 'ppress_md_pagination_active_background_color',
                'type'  => 'color',
                'label' => esc_html__('Pagination Active Link Background', 'wp-user-avatar')
            ]
        ];

        return array_merge($settings, $settings2);
    }

    public function metabox_settings($settings, $form_type, $DragDropBuilderInstance)
    {
        $sorting_options = [esc_html__('Standard Fields', 'wp-user-avatar') => $this->md_standard_sort_fields()];

        $search_options = [
            esc_html__('Standard', 'wp-user-avatar') => [
                'pp_email_address' => esc_html__('Email Address', 'wp-user-avatar'),
                'pp_website_url'   => esc_html__('Website', 'wp-user-avatar'),
                'pp_display_name'  => esc_html__('Display Name', 'wp-user-avatar'),
                'first_name'       => esc_html__('First Name', 'wp-user-avatar'),
                'last_name'        => esc_html__('Last Name', 'wp-user-avatar'),
                'description'      => esc_html__('Biography', 'wp-user-avatar')
            ]
        ];

        if (EM::is_enabled(EM::CUSTOM_FIELDS)) {
            $cf_label                   = esc_html__('Custom Fields', 'wp-user-avatar');
            $sorting_options[$cf_label] = ppress_custom_fields_key_value_pair(true);
            $search_options[$cf_label]  = ppress_custom_fields_key_value_pair(true);
        }

        $new_settings['ppress_md_sorting'] = [
            'tab_title' => esc_html__('Sorting', 'wp-user-avatar'),
            [
                'id'      => 'ppress_md_sort_default',
                'label'   => esc_html__('Default Sorting method', 'wp-user-avatar'),
                'type'    => 'select',
                'options' => $sorting_options
            ],
            [
                'id'    => 'ppress_md_enable_custom_sort',
                'label' => esc_html__('Enable custom sorting', 'wp-user-avatar'),
                'type'  => 'checkbox',
            ],
            [
                'id'          => 'ppress_md_sort_method_fields',
                'label'       => esc_html__('Sorting Method Fields', 'wp-user-avatar'),
                'type'        => 'select2',
                'options'     => $sorting_options,
                'description' => esc_html__('Fields to show in sorting dropdown menu', 'wp-user-avatar')
            ],
        ];

        $new_settings['ppress_md_search'] = [
            'tab_title' => esc_html__('Search', 'wp-user-avatar'),
            [
                'id'    => 'ppress_md_enable_search',
                'label' => esc_html__('Display Search Form', 'wp-user-avatar'),
                'type'  => 'checkbox'
            ],
            [
                'id'          => 'ppress_md_search_fields',
                'label'       => esc_html__('Search Fields', 'wp-user-avatar'),
                'type'        => 'select2',
                'options'     => $search_options,
                'description' => esc_html__('Select fields to search in.', 'wp-user-avatar')
            ]
        ];


        if (EM::is_enabled(EM::CUSTOM_FIELDS)) {

            $new_settings['ppress_md_search'][] = [
                'id'          => 'ppress_md_enable_filters',
                'label'       => esc_html__('Enable Filters', 'wp-user-avatar'),
                'type'        => 'checkbox',
                'description' => esc_html__('If enabled, users will be able to filter members in this directory', 'wp-user-avatar')
            ];

            $new_settings['ppress_md_search'][] = [
                'id'          => 'ppress_md_filter_fields',
                'label'       => esc_html__('Filter Fields', 'wp-user-avatar'),
                'type'        => 'select2',
                'options'     => array_reduce(PROFILEPRESS_sql::get_profile_custom_fields_by_types([
                    'select',
                    'checkbox',
                    'radio',
                    'country',
                    'date'
                ]), function ($carry, $item) {
                    $carry[$item->field_key] = ppress_woocommerce_field_transform($item->field_key, $item->label_name);

                    return $carry;
                }, []),
                'description' => esc_html__('Select custom fields that members can be filtered by. Only Select, Checkbox, Radio, Country and Date/Time fields are supported.', 'wp-user-avatar')
            ];
        }

        if ( ! EM::is_enabled(EM::CUSTOM_FIELDS)) {
            $upgrade_url                        = 'https://profilepress.com/pricing/?utm_source=wp_dashboard&utm_medium=upgrade&utm_campaign=md_custom_field_upsell';
            $new_settings['ppress_md_search'][] = [
                'id'      => 'ppress_md_search_filter_upsell',
                'label'   => '',
                'type'    => 'custom',
                'content' => sprintf(
                    esc_html__('%sUpgrade to ProfilePress premium%s if you don\'t have the custom field addon so you can enable search and filtering by custom fields.', 'wp-user-avatar'),
                    '<a href="' . $upgrade_url . '" target="_blank">', '</a>'
                ),
            ];
        }

        $new_settings['ppress_md_result_pagination'] = [
            'tab_title' => esc_html__('Result & Pagination', 'wp-user-avatar'),
            [
                'id'          => 'ppress_md_enable_result_after_search',
                'label'       => esc_html__('Show Results Only After a Search', 'wp-user-avatar'),
                'type'        => 'checkbox',
                'description' => esc_html__('Enable to only show members after a search is performed', 'wp-user-avatar')
            ],
            [
                'id'    => 'ppress_md_result_number_per_page',
                'label' => esc_html__('Number of Members per Page', 'wp-user-avatar'),
                'type'  => 'number'
            ],
            [
                'id'    => 'ppress_md_results_text',
                'label' => esc_html__('Results Text', 'wp-user-avatar'),
                'type'  => 'text'
            ],
            [
                'id'    => 'ppress_md_single_result_text',
                'label' => esc_html__('Single Result Text', 'wp-user-avatar'),
                'type'  => 'text'
            ],
            [
                'id'    => 'ppress_md_no_result_text',
                'label' => esc_html__('No Result Text', 'wp-user-avatar'),
                'type'  => 'text'
            ],
        ];

        return $new_settings;
    }

    protected function search_filter_query_params()
    {
        static $cache = [];

        if ( ! isset($cache[$this->form_id])) {

            $query_params = [];

            if (empty($query_params) && ! empty($_GET['filter' . $this->form_id])) {
                $query_params = json_decode(base64_decode($_GET['filter' . $this->form_id]), true);
            }

            $cache[$this->form_id] = $query_params;
        }

        return $cache[$this->form_id];
    }

    public function md_standard_sort_fields(): array
    {
        return [
            'newest'     => esc_html__('Newest Users First', 'wp-user-avatar'),
            'oldest'     => esc_html__('Oldest Users First', 'wp-user-avatar'),
            'first-name' => esc_html__('First Name', 'wp-user-avatar'),
            'last-name'  => esc_html__('Last Name', 'wp-user-avatar'),
            'username'   => esc_html__('Username', 'wp-user-avatar')
        ];
    }

    public function get_sort_field_label($field)
    {
        $pp_custom_fields = ppress_custom_fields_key_value_pair(true);

        return ppress_var($this->md_standard_sort_fields(), $field, ppress_var($pp_custom_fields, $field));
    }

    protected function sort_method_dropdown_menu()
    {
        $sortby_query_key = 'sortby' . $this->form_id;

        $custom_sort_enabled = $this->get_meta('ppress_md_enable_custom_sort') == 'true';

        $default_sort_field = ppress_var($_GET, $sortby_query_key, $this->get_meta('ppress_md_sort_default'), true);

        $custom_sort_fields = array_filter($this->get_meta('ppress_md_sort_method_fields'), function ($item) use ($default_sort_field) {
            return ! empty($item) && $item != $default_sort_field;
        });

        if ( ! $custom_sort_enabled || empty($custom_sort_fields)) return;

        ?>
        <div class="ppressmd-member-directory-sorting">
            <span><?= esc_html__('Sort by', 'wp-user-avatar') ?>:&nbsp;</span>
            <div class="ppressmd-member-directory-sorting-a">
                <a href=" <?= esc_url(add_query_arg([$sortby_query_key => $default_sort_field])) ?>" class="ppressmd-member-directory-sorting-a-text">
                    <?= $this->get_sort_field_label($default_sort_field) ?>
                    <span class="ppress-material-icons">keyboard_arrow_down</span> </a>

                <div class="ppressmd-new-dropdown">
                    <ul>
                        <?php foreach ($custom_sort_fields as $field) : ?>
                            <li>
                                <a href="<?= esc_url(add_query_arg([$sortby_query_key => $field])) ?>">
                                    <?= $this->get_sort_field_label($field) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php
    }

    protected function filter_structure($show_filter_fields = false)
    {
        $filter_enabled = $this->get_meta('ppress_md_enable_filters') == 'true';

        $filter_fields = apply_filters('ppress_member_directory_filter_fields', array_filter($this->get_meta('ppress_md_filter_fields'), function ($item) {
            return ! empty($item);
        }), $this->form_id, $this);

        if ( ! $filter_enabled || empty($filter_fields)) return;

        if ( ! $show_filter_fields) : ?>
            <span class="ppressmd-member-directory-filters">
		    <span class="ppressmd-member-directory-filters-a">
			    <a href="#">
				    <?= esc_html__('More Filters', 'wp-user-avatar') ?>
					    <span class="ppress-material-icons ppress-up">keyboard_arrow_up</span>
                        <span class="ppress-material-icons ppress-down">keyboard_arrow_down</span>
                </a>
			</span>
		</span>
        <?php endif;

        if ($show_filter_fields) : $query_params = $this->search_filter_query_params(); ?>

            <div class="ppressmd-member-directory-header-row ppressmd-member-directory-filters-bar">

                <div class="ppressmd-search ppressmd-search-invisible">

                    <?php foreach ($filter_fields as $field_key) : ?>

                        <?php $custom_field = PROFILEPRESS_sql::get_profile_custom_field_by_key($field_key); ?>

                        <div class="ppressmd-search-filter ppressmd-text-filter-type">

                            <?php

                            switch ($custom_field['type']) {
                                case 'select' :
                                case 'checkbox' :
                                case 'radio' :
                                case 'country' :

                                    if ( ! empty($custom_field['options'])) {

                                        $is_multiple = false;

                                        if ($custom_field['type'] == 'select') {
                                            $is_multiple = ppress_is_select_field_multi_selectable($field_key);

                                        }

                                        if ($custom_field['type'] == 'checkbox') $is_multiple = true;

                                        printf(
                                            '<select name="%s" data-placeholder="%s" class="ppressmd-form-field ppmd-select2"%s>',
                                            $is_multiple ? 'filters[' . $field_key . '][]' : 'filters[' . $field_key . ']',
                                            $custom_field['label_name'],
                                            $is_multiple ? ' multiple' : ' data-allow-clear="true"'
                                        );

                                        $options = array_map('trim', explode(',', $custom_field['options']));

                                        if ( ! $is_multiple) {
                                            echo '<option></option>';
                                        }

                                        foreach ($options as $option) {
                                            $bucket = ppress_var(ppress_var($query_params, 'filters', []), $field_key);
                                            printf(
                                                '<option value="%1$s" %2$s>%1$s</option>',
                                                $option,
                                                ! $is_multiple ? selected($option, $bucket, false) : (is_array($bucket) && in_array($option, $bucket) ? 'selected=selected' : '')
                                            );
                                        }

                                        echo '</select>';
                                    }
                                    break;

                                case 'date' :

                                    $dateFormat = ! empty($custom_field['options']) ? $custom_field['options'] : 'Y-m-d';

                                    $config = FieldsShortcodeCallback::date_picker_config($field_key, $dateFormat);

                                    printf(
                                        '<input type="text" name="%1$s" placeholder="%2$s" value="%4$s" class="ppressmd-form-field ppmd-date" data-config="%3$s">',
                                        'filters[' . $custom_field['field_key'] . ']',
                                        $custom_field['label_name'],
                                        esc_attr(json_encode($config)),
                                        ppress_var(ppress_var($query_params, 'filters', []), $field_key)
                                    );
                                    break;
                            }
                            ?>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>
        <?php endif;
    }

    protected function search_form()
    {
        if ($this->get_meta('ppress_md_enable_search') != 'true') return;

        $search_string = apply_filters('ppressmd_member_directory_search_string', esc_html__('Search', 'wp-user-avatar'));

        $search_string_placeholder = apply_filters('ppressmd_member_directory_search_placeholder', esc_html__('Search', 'wp-user-avatar'));

        $entered_search_term = ppress_var($this->search_filter_query_params(), 'search-' . $this->form_id, '');

        ?>
        <div class="ppressmd-member-directory-header-row ppressmd-member-directory-search-row">
            <div class="ppressmd-member-directory-search-line">
                <label>
                    <input name="search-<?= $this->form_id ?>" type="search" class="ppressmd-search-line" placeholder="<?= $search_string_placeholder ?>" value="<?= esc_attr($entered_search_term) ?>">
                </label> <input type="submit" class="ppressmd-do-search ppressmd-button" value="<?= $search_string ?>">
            </div>
        </div>
        <?php
    }

    protected function search_filter_sort_structure()
    {
        $is_filters_expanded = false;

        $query_params = $this->search_filter_query_params();

        if (isset($query_params['filters']) && ! empty(array_filter($query_params['filters']))) {
            $is_filters_expanded = true;
        }
        ?>

        <div class="ppressmd-member-directory-header ppressmd-form<?= $is_filters_expanded ? ' ppmd-filters-expand' : ''; ?>">

            <form action="<?= ppress_get_current_url_query_string() ?>" method="get">

                <?php $this->search_form(); ?>

                <div class="ppressmd-member-directory-header-row">
                    <div class="ppressmd-member-directory-nav-line">

                        <?php $this->sort_method_dropdown_menu(); ?>

                        <?php $this->filter_structure(); ?>

                    </div>
                </div>

                <?php $this->filter_structure(true) ?>

                <input type="hidden" name="ppmd-search" value="<?= $this->form_id ?>">

            </form>

        </div>
        <?php
    }

    protected function is_result_after_search_enabled()
    {
        return $this->get_meta('ppress_md_enable_result_after_search') == 'true';
    }

    protected function get_results_text()
    {
        return esc_html($this->get_meta('ppress_md_results_text'));
    }

    protected function get_single_result_text()
    {
        return esc_html($this->get_meta('ppress_md_single_result_text'));
    }

    protected function get_no_result_text()
    {
        return esc_html($this->get_meta('ppress_md_no_result_text'));
    }

    protected function get_default_result_number_per_page()
    {
        static $cache = [];

        if ( ! isset($cache[$this->form_id])) {
            $cache[$this->form_id] = absint($this->get_meta('ppress_md_result_number_per_page'));
        }

        return $cache[$this->form_id];
    }

    /**
     * @return MemberDirectoryListing
     */
    protected function directory_listing($user_id = false)
    {
        return (new MemberDirectoryListing($this->form_id, $user_id))->defaults($this->default_fields_settings());
    }

    public function form_css()
    {
        $form_id   = $this->form_id;
        $form_type = $this->form_type;

        $search_filter_field_text_color   = esc_attr($this->get_meta('ppress_md_search_filter_field_text_color'));
        $search_filter_field_border_color = esc_attr($this->get_meta('ppress_md_search_filter_field_border_color'));

        $pagination_link_color        = esc_attr($this->get_meta('ppress_md_pagination_link_color'));
        $pagination_active_link_color = esc_attr($this->get_meta('ppress_md_pagination_active_link_color'));
        $pagination_active_bg_color   = esc_attr($this->get_meta('ppress_md_pagination_active_background_color'));

        return <<<CSS
#pp-$form_type-$form_id.pp-member-directory .ppressmd-member-directory-header .ppressmd-member-directory-header-row .ppressmd-member-directory-search-line label .ppressmd-search-line,
#pp-$form_type-$form_id.pp-member-directory .ppressmd-member-directory-header .ppressmd-member-directory-header-row .ppressmd-search .ppressmd-search-filter.ppressmd-text-filter-type input:not(.select2-search__field),
#pp-$form_type-$form_id.pp-member-directory .ppressmd-member-directory-header .select2.select2-container .select2-selection {
    border: 1px solid $search_filter_field_border_color !important;
}

#pp-$form_type-$form_id.pp-member-directory .ppressmd-member-directory-header .ppressmd-member-directory-header-row .ppressmd-search .ppressmd-search-filter.ppressmd-text-filter-type input,
#pp-$form_type-$form_id.pp-member-directory .ppressmd-member-directory-header .ppressmd-member-directory-header-row .ppressmd-member-directory-search-line label .ppressmd-search-line,
#pp-$form_type-$form_id.pp-member-directory .ppressmd-member-directory-header .ppressmd-member-directory-header-row .ppressmd-member-directory-nav-line .ppress-material-icons,
#pp-$form_type-$form_id.pp-member-directory .ppressmd-member-directory-header .select2.select2-container .select2-selection__rendered {
    color: $search_filter_field_text_color !important;
}

#pp-$form_type-$form_id.pp-member-directory .ppmd-pagination-wrap .page-numbers {
    color: $pagination_link_color !important;
}

#pp-$form_type-$form_id.pp-member-directory .ppmd-pagination-wrap .page-numbers.current {
    background: $pagination_active_bg_color !important;
    color: $pagination_active_link_color !important;
}
CSS;

    }
}

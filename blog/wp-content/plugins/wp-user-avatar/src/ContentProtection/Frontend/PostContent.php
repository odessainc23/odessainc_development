<?php

namespace ProfilePress\Core\ContentProtection\Frontend;


use ProfilePress\Core\ContentProtection\SettingsPage;
use ProfilePress\Core\Classes\PROFILEPRESS_sql;

class PostContent
{
    public function __construct()
    {
        add_filter('the_content', [$this, 'the_content'], PHP_INT_MAX - 1);
    }

    public function protection_disabled()
    {
        $checks = [
            is_preview() && current_user_can('edit_post', get_the_ID()),
            did_action('elementor/loaded') &&
            class_exists('\Elementor\Plugin') &&
            isset(\Elementor\Plugin::$instance) &&
            isset(\Elementor\Plugin::$instance->preview) &&
            method_exists(\Elementor\Plugin::$instance->preview, 'is_preview_mode') &&
            \Elementor\Plugin::$instance->preview->is_preview_mode(),
        ];

        return in_array(true, $checks, true);
    }

    public function the_content($content)
    {
        if ( ! $this->protection_disabled()) {

            $metas = PROFILEPRESS_sql::get_meta_data_by_key(SettingsPage::META_DATA_KEY);

            if (is_array($metas)) {

                foreach ($metas as $meta) {

                    $meta = ppress_var($meta, 'meta_value', []);

                    if ( ! in_array(ppress_var($meta, 'is_active', true), ['true', true], true)) continue;

                    $access_condition = ppress_var($meta, 'access_condition', []);

                    $noaccess_action = ppress_var($access_condition, 'noaccess_action');

                    if ('message' != $noaccess_action) continue;

                    $who_can_access = ppress_var($access_condition, 'who_can_access', 'everyone');

                    $access_roles = ppress_var($access_condition, 'access_roles', []);

                    $access_wp_users = ppress_var($access_condition, 'access_wp_users', []);

                    $access_membership_plans = ppress_var($access_condition, 'access_membership_plans', []);

                    $noaccess_message_type = ppress_var($access_condition, 'noaccess_action_message_type', 'global');

                    $custom_message = ppress_var($access_condition, 'noaccess_action_message_custom', 'global');

                    $noaccess_action_message_style = ppress_var($access_condition, 'noaccess_action_message_style', 'none');

                    if (Checker::content_match($meta['content'])) {

                        if (Checker::is_blocked($who_can_access, $access_roles, $access_wp_users, $access_membership_plans)) {
                            $content = $this->get_restricted_message($noaccess_message_type, $custom_message, $noaccess_action_message_style);
                        }

                        break;
                    };
                }
            }
        }

        return $content;
    }

    public function get_restricted_message($noaccess_message_type = 'global', $custom_message = '', $message_style = 'none')
    {
        $message = '';

        $global_message = ppress_settings_by_key(
            'global_restricted_access_message',
            esc_html__('You are unauthorized to view this page.', 'wp-user-avatar'),
            true
        );

        switch ($noaccess_message_type) {
            case 'custom':
                $message = $this->style_paywall_message(wpautop($custom_message), $message_style);
                break;
            case 'post_excerpt':
                $message = $this->get_post_excerpt();
                break;
            case 'post_excerpt_global':
                $message = $this->get_post_excerpt() . $this->style_paywall_message($this->parse_message($global_message), $message_style);
                break;
            case 'post_excerpt_custom':
                $message = $this->get_post_excerpt() . $this->style_paywall_message($this->parse_message($custom_message), $message_style);
                break;
        }

        if (empty($message)) {
            $message = $this->style_paywall_message($this->parse_message($global_message), $message_style);
        }

        return $message;
    }

    public function parse_message($message)
    {
        return do_shortcode(wpautop($message));
    }

    public function style_paywall_message($message, $style = 'none')
    {
        if ('default' == $style) {
            $message = sprintf('<div class="ppress-paywall-message-wrap"><div class="ppress-paywall-message">%s</div></div>', $message);
        }

        return $message;
    }

    public function get_post_excerpt()
    {
        global $post;

        if ( ! is_object($post)) return false;

        $length = apply_filters('ppress_content_protection_excerpt_length', 100);

        $more = false;

        if (has_excerpt($post->ID)) {
            $the_excerpt = $post->post_excerpt;
        } elseif (strstr($post->post_content, '<!--more-->')) {
            $more        = true;
            $length      = strpos($post->post_content, '<!--more-->');
            $the_excerpt = $post->post_content;
        } else {
            $the_excerpt = $post->post_content;
        }

        if ( ! empty($the_excerpt)) {

            $tags = apply_filters('ppress_content_protection_excerpt_tags', '<style><a><img><em><i><code><ins><del><strong><blockquote><ul><ol><li><h1><h2><h3><h4><h5><h6><b><div><span>');

            if ($more) {
                $the_excerpt = strip_shortcodes(strip_tags(stripslashes(substr($the_excerpt, 0, $length)), $tags));
            } else {
                $the_excerpt   = strip_shortcodes(strip_tags(stripslashes($the_excerpt), $tags));
                $the_excerpt   = preg_split('/\b/', $the_excerpt, $length * 2 + 1);
                $excerpt_waste = array_pop($the_excerpt);
                $the_excerpt   = implode($the_excerpt);

                if ( ! empty($the_excerpt)) {

                    $ellipsis = apply_filters('ppress_content_protection_excerpt_extra', '. . .');

                    $the_excerpt .= $ellipsis;

                    // when truncated text ends with malfunctioned link eg <a href="https://hello.com, <img src="http://hey.com/img.png, remove them
                    $the_excerpt = preg_replace(sprintf("/<(img|a|em)[^>]+(%s)/", preg_quote($ellipsis, '/')), '$2', $the_excerpt);
                }
            }

            $the_excerpt = wpautop($this->close_tags($the_excerpt));
        }

        return apply_filters('ppress_content_protection_excerpt', $the_excerpt, $post, $length);
    }

    /**
     * See https://stackoverflow.com/a/3810341/2648410
     *
     * @param $content
     *
     * @return false|mixed|string
     */
    public function close_tags($content)
    {
        if ( ! empty($content)) {
            // remove cos it can be unreliable
            //if (class_exists('\DOMDocument')) {
            // $doc    = new \DOMDocument();
            // $result = $doc->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            /** @see https://stackoverflow.com/a/20675396/2648410 */
            // if ($result) utf8_decode($doc->saveHTML($doc->documentElement));
            // } else {
            /** @see https://stackoverflow.com/a/3810341/2648410 */
            preg_match_all('#<(?!meta|img|br|hr|input\b)\b([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $content, $result);
            $openedtags = $result[1];
            preg_match_all('#</([a-z]+)>#iU', $content, $result);
            $closedtags = $result[1];
            $len_opened = count($openedtags);
            if (count($closedtags) == $len_opened) {
                return $content;
            }
            $openedtags = array_reverse($openedtags);
            for ($i = 0; $i < $len_opened; $i++) {
                if ( ! in_array($openedtags[$i], $closedtags)) {
                    $content .= '</' . $openedtags[$i] . '>';
                } else {
                    unset($closedtags[array_search($openedtags[$i], $closedtags)]);
                }
            }
        }

        return $content;
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
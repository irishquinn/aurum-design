<?php
/**
 * @version    1.0.1
 * @package    Aurum_Theme
 * @author     Chris Quinn <https://github.com/irishquinn>
 * @copyright  Copyright (C) 2019 Chris Quinn. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: https://aurumdesign.com
 */

/**
 * Plug WR Nitro theme options into WordPress Theme Customize.
 *
 * @package  WR_Theme
 * @since    1.0
 */
class WR_Nitro_Customize_Options_Header
{
    public static function get()
    {
        $theme_options = null;

        // Get all headers.
        $list_header = new WP_Query([
            'posts_per_page' => -1,
            'post_type' => 'header_builder',
            'post_status' => 'publish',
            'suppress_filters' => true,
        ]);

        $header_layout = [];

        // Set to normal headers default
        if ($list_header->post_count) {
            foreach ($list_header->posts as $val) {
                $header_layout[$val->ID] = $val->post_title;
            }
        };

        if ($header_layout) {
            $theme_options = [
                'title' => esc_html__('Header', 'wr-nitro'),
                'description' => sprintf(__('With Nitro theme, you can build an unlimited amount of unique header styles. The "magic" happens via the section <b><a target="_blank" rel="noopener noreferrer" href="%1$s">Manage Headers</a></b>.', 'wr-nitro'), esc_url(admin_url('edit.php?post_type=header_builder'))) . '<a class="link-doc-header" target="_blank" rel="noopener noreferrer" href="http://nitro.woorockets.com/docs/document/footer"><span class="fa fa-question-circle has-tip" title="View Documentation for this section"></span></a>',
                'type' => 'option',
                'priority' => 20,
                'settings' => [
                    'header_layout' => [
                        'default' => 0,
                        'sanitize_callback' => '',
                    ],
                ],
                'controls' => [
                    'header_layout' => [
                        'label' => esc_html__('Select Header', 'wr-nitro'),
                        'section' => 'header',
                        'type' => 'select',
                        'choices' => $header_layout
                    ],
                ],
            ];
        } else {
            $theme_options = [
                'title' => esc_html__('Header', 'wr-nitro'),
                'description' => esc_html__('In this area you can mark a header as default to display on all pages of your site.', 'wr-nitro'),
                'type' => 'option',
                'priority' => 20,
                'settings' => [
                    'no_header_found' => [],
                ],
                'controls' => [
                    'no_header_found' => [
                        'label' => sprintf(__('No header was found on your site. Ready to publish your first header? <a target="_blank" rel="noopener noreferrer" href="%1$s">Get started here</a>.', 'wr-nitro'), esc_url(admin_url('edit.php?post_type=header_builder'))),
                        'section' => 'header',
                        'type' => 'WR_Nitro_Customize_Control_Text',
                    ],
                ],
            ];
        }

        return $theme_options;
    }
}

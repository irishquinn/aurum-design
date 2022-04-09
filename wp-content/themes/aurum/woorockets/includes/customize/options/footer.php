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
class WR_Nitro_Customize_Options_Footer
{
    public static function get()
    {
        return [
            'title' => esc_html__('Footer', 'wr-nitro'),
            'description' => '<a target="_blank" rel="noopener noreferrer" href="http://nitro.woorockets.com/docs/document/footer"><span class="fa fa-question-circle has-tip" title="View Documentation for this section"></span></a>',
            'type' => 'option',
            'priority' => 80,
            'settings' => [
                'footer_fullwidth' => [
                    'default' => 0,
                    'transport' => 'postMessage',
                    'sanitize_callback' => '',
                ],
                'footer_layout' => [
                    'default' => 'layout-7',
                    'sanitize_callback' => '',
                ],
                'footer_sidebar_1' => [
                    'default' => 'footer-1',
                    'sanitize_callback' => '',
                ],
                'footer_sidebar_2' => [
                    'default' => 'footer-2',
                    'sanitize_callback' => '',
                ],
                'footer_sidebar_3' => [
                    'default' => 'footer-3',
                    'sanitize_callback' => '',
                ],
                'footer_sidebar_4' => [
                    'default' => 'footer-4',
                    'sanitize_callback' => '',
                ],
                'footer_sidebar_5' => [
                    'default' => 'footer-5',
                    'sanitize_callback' => '',
                ],
                'footer_bot_text' => [
                    'default' => esc_html__('&copy;2016 Nitro. Made with &hearts; by WooRockets team using WordPress & WooCommerce.', 'wr-nitro'),
                    'transport' => 'postMessage',
                    'sanitize_callback' => '',
                ],
                'footer_custom_color' => [
                    'default' => 1,
                    'sanitize_callback' => '',
                ],
            ],
            'controls' => [
                'footer_fullwidth' => [
                    'label' => esc_html__('Enable Full Width', 'wr-nitro'),
                    'section' => 'footer',
                    'type' => 'WR_Nitro_Customize_Control_Toggle',
                ],
                'footer_layout' => [
                    'label' => esc_html__('Sidebar Layout', 'wr-nitro'),
                    'description' => sprintf(__('Select the layout type for the footer. The content is added via Appearance <a target="_blank" rel="noopener noreferrer" href="%s">Widgets</a>.', 'wr-nitro'), admin_url('widgets.php')),
                    'section' => 'footer',
                    'type' => 'WR_Nitro_Customize_Control_Select_Image',
                    'choices' => [
                        'layout-1' => '',
                        'layout-2' => '',
                        'layout-3' => '',
                        'layout-4' => '',
                        'layout-5' => '',
                        'layout-6' => '',
                        'layout-7' => '',
                        'layout-8' => '',
                        'layout-9' => '',
                        'layout-10' => '',
                        'layout-11' => '',
                        'layout-12' => '',
                    ],
                ],
                'footer_sidebar_1' => [
                    'label' => esc_html__('Sidebar "1" Content', 'wr-nitro'),
                    'section' => 'footer',
                    'type' => 'select',
                    'choices' => WR_Nitro_Helper::get_sidebars(),
                ],
                'footer_sidebar_2' => [
                    'label' => esc_html__('Sidebar "2" Content', 'wr-nitro'),
                    'section' => 'footer',
                    'type' => 'select',
                    'choices' => WR_Nitro_Helper::get_sidebars(),
                    'required' => ['footer_layout != layout-1'],
                ],
                'footer_sidebar_3' => [
                    'label' => esc_html__('Sidebar "3" Content', 'wr-nitro'),
                    'section' => 'footer',
                    'type' => 'select',
                    'choices' => WR_Nitro_Helper::get_sidebars(),
                    'required' => ['footer_layout = "layout-3|layout-5|layout-7|layout-8|layout-10|layout-11|layout-12"'],
                ],
                'footer_sidebar_4' => [
                    'label' => esc_html__('Sidebar "4" Content', 'wr-nitro'),
                    'section' => 'footer',
                    'type' => 'select',
                    'choices' => WR_Nitro_Helper::get_sidebars(),
                    'required' => ['footer_layout = "layout-7|layout-11|layout-12"'],
                ],
                'footer_sidebar_5' => [
                    'label' => esc_html__('Sidebar "5" Content', 'wr-nitro'),
                    'section' => 'footer',
                    'type' => 'select',
                    'choices' => WR_Nitro_Helper::get_sidebars(),
                    'required' => ['footer_layout = "layout-11|layout-12"'],
                ],
                'footer_bot_text' => [
                    'label' => esc_html__('Copyright Text', 'wr-nitro'),
                    'section' => 'footer',
                    'type' => 'WR_Nitro_Customize_Control_Editor',
                    'mode' => 'htmlmixed',
                    'button_text' => esc_html__('Set Content', 'wr-nitro'),
                ],
                'footer_custom_color' => [
                    'section' => 'footer',
                    'type' => 'WR_Nitro_Customize_Control_HTML',
                    'choices' => [
                        '1' => '<h3 class="btn-move-section"><a href="#" class="move-to-section button" data-section="color_footer">' . esc_html__('Customize Color', 'wr-nitro') . '</a></h3>',
                    ],
                ],
            ],
        ];
    }
}

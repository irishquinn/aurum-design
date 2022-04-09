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
class WR_Nitro_Customize_Options_Layout
{
    public static function get()
    {
        return [
            'title' => esc_html__('Layout', 'wr-nitro'),
            'description' => '<a target="_blank" rel="noopener noreferrer" href="http://nitro.woorockets.com/docs/document/layout"><span class="fa fa-question-circle has-tip" title="View Documentation for this section"></span></a>',
            'priority' => 11,
            'sections' => [
                'layout_general' => [
                    'title' => esc_html__('General', 'wr-nitro'),
                    'description' => '',
                    'settings' => [
                        'wr_layout_offset' => [
                            'default' => 0,
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_content_width_unit' => [
                            'default' => 'pixel',
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_content_width' => [
                            'default' => 1170,
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_content_width_percentage' => [
                            'default' => 100,
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_gutter_width' => [
                            'default' => 30,
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_boxed' => [
                            'default' => 0,
                            'sanitize_callback' => '',
                        ],
                        'general_custom_color' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'wr_preview' => [
                            'default' => 'desktop',
                            'transport' => 'postMessage',
                        ],
                    ],
                    'controls' => [
                        'wr_layout_offset' => [
                            'label' => esc_html__('Offset Width', 'wr-nitro'),
                            'description' => esc_html__('Add a border around body', 'wr-nitro'),
                            'section' => 'layout_general',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 0,
                                'max' => 100,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                        ],
                        'wr_layout_content_width_unit' => [
                            'label' => esc_html__('Content Width', 'wr-nitro'),
                            'description' => esc_html__('Set the maximum allowed width for content', 'wr-nitro'),
                            'section' => 'layout_general',
                            'type' => 'radio',
                            'choices' => [
                                'pixel' => esc_html__('px', 'wr-nitro'),
                                'percentage' => esc_html__('%', 'wr-nitro'),
                            ],
                        ],
                        'wr_layout_content_width' => [
                            'section' => 'layout_general',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 760,
                                'max' => 1920,
                                'step' => 10,
                                'unit' => 'px',
                            ],
                            'required' => ['wr_layout_content_width_unit == pixel'],
                        ],
                        'wr_layout_content_width_percentage' => [
                            'section' => 'layout_general',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 20,
                                'max' => 100,
                                'step' => 1,
                                'unit' => '%',
                            ],
                            'required' => ['wr_layout_content_width_unit == percentage'],
                        ],
                        'wr_layout_gutter_width' => [
                            'label' => esc_html__('Gutter Width', 'wr-nitro'),
                            'description' => esc_html__('The width of the space between columns', 'wr-nitro'),
                            'section' => 'layout_general',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 20,
                                'max' => 60,
                                'step' => 10,
                                'unit' => 'px',
                            ],
                        ],
                        'wr_layout_boxed' => [
                            'label' => esc_html__('Enable Boxed Layout', 'wr-nitro'),
                            'section' => 'layout_general',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                        ],
                        'general_custom_color' => [
                            'section' => 'layout_general',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<div class="btn-move-section"><a href="#" class="move-to-section button" data-section="color_general">' . esc_html__('Edit Color', 'wr-nitro') . '</a><a href="#" class="move-to-section button" data-section="typo_general">' . __('Edit Typography', 'wr-nitro') . '</a></div>',
                            ],
                        ],
                        'wr_preview' => [
                            'section' => 'layout_general',
                            'type' => 'hidden',
                        ],
                    ]
                ],
                'page_title' => [
                    'title' => esc_html__('Page Title', 'wr-nitro'),
                    'settings' => [
                        'wr_page_title' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_layout' => [
                            'default' => 'layout-1',
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_fullscreen' => [
                            'default' => 0,
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_breadcrumbs' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_padding_top' => [
                            'default' => 80,
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                        'wr_page_title_padding_bottom' => [
                            'default' => 80,
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                        'wr_page_title_heading_min_height' => [
                            'default' => 214,
                            'sanitize_callback' => '',
                        ],
                        'page_title_custom_color' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                    ],
                    'controls' => [
                        'wr_page_title' => [
                            'label' => esc_html__('Show Page Title', 'wr-nitro'),
                            'section' => 'page_title',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                        ],
                        'wr_page_title_fullscreen' => [
                            'label' => esc_html__('Enable Full Width', 'wr-nitro'),
                            'section' => 'page_title',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['wr_page_title = 1'],
                        ],
                        'wr_page_title_layout' => [
                            'label' => esc_html__('Layout', 'wr-nitro'),
                            'section' => 'page_title',
                            'type' => 'WR_Nitro_Customize_Control_Select_Image',
                            'choices' => [
                                'layout-1' => esc_html__('Layout 1', 'wr-nitro'),
                                'layout-2' => esc_html__('Layout 2', 'wr-nitro'),
                                'layout-3' => esc_html__('Layout 3', 'wr-nitro'),
                                'layout-4' => esc_html__('Layout 4', 'wr-nitro'),
                                'layout-5' => esc_html__('Layout 5', 'wr-nitro'),
                            ],
                            'required' => ['wr_page_title = 1'],
                        ],
                        'wr_page_title_breadcrumbs' => [
                            'label' => esc_html__('Show Breadcrumb', 'wr-nitro'),
                            'section' => 'page_title',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['wr_page_title = 1'],
                        ],
                        'wr_page_title_padding_top' => [
                            'label' => esc_html__('Padding Top', 'wr-nitro'),
                            'section' => 'page_title',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'required' => ['wr_page_title = 1'],
                            'choices' => [
                                'min' => 0,
                                'max' => 500,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                        ],
                        'wr_page_title_padding_bottom' => [
                            'label' => esc_html__('Padding Bottom', 'wr-nitro'),
                            'section' => 'page_title',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'required' => ['wr_page_title = 1'],
                            'choices' => [
                                'min' => 0,
                                'max' => 500,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                        ],
                        'wr_page_title_heading_min_height' => [
                            'label' => esc_html__('Min Height', 'wr-nitro'),
                            'section' => 'page_title',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 0,
                                'max' => 1000,
                                'step' => 5,
                                'unit' => 'px',
                            ],
                            'required' => ['wr_page_title = 1'],
                        ],
                        'page_title_custom_color' => [
                            'section' => 'page_title',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<div class="btn-move-section"><a href="#" class="move-to-section button" data-section="color_pages">' . esc_html__('Edit Color', 'wr-nitro') . '</a><a href="#" class="move-to-section button" data-section="typo_page_title">' . __('Edit Typography', 'wr-nitro') . '</a></div>',
                            ],
                            'required' => ['wr_page_title = 1'],
                        ],
                    ],
                ],
                'layout_button' => [
                    'title' => esc_html__('Button', 'wr-nitro'),
                    'settings' => [
                        'btn_border_width' => [
                            'default' => 2,
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                        'btn_border_radius' => [
                            'default' => 2,
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                        'btn_padding' => [
                            'default' => 20,
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                        'button_custom_color' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                    ],
                    'controls' => [
                        'btn_padding' => [
                            'label' => esc_html__('Padding ( Left + Right )', 'wr-nitro'),
                            'section' => 'layout_button',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 5,
                                'max' => 50,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                        ],
                        'btn_border_radius' => [
                            'label' => esc_html__('Border Radius', 'wr-nitro'),
                            'section' => 'layout_button',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 0,
                                'max' => 50,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                        ],
                        'btn_border_width' => [
                            'label' => esc_html__('Border Width', 'wr-nitro'),
                            'section' => 'layout_button',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 1,
                                'max' => 10,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                        ],
                        'button_custom_color' => [
                            'section' => 'layout_button',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<div class="btn-move-section"><a href="#" class="move-to-section button" data-section="color_button">' . esc_html__('Edit Color', 'wr-nitro') . '</a><a href="#" class="move-to-section button" data-section="typo_button">' . esc_html__('Edit Typography', 'wr-nitro') . '</a></div>',
                            ],
                        ],
                    ],
                ],
            ]
        ];
    }
}

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
class WR_Nitro_Customize_Options_Blog
{
    public static function get()
    {
        return [
            'title' => esc_html__('Blog', 'wr-nitro'),
            'description' => '<a target="_blank" rel="noopener noreferrer" href="http://nitro.woorockets.com/docs/document/blog"><span class="fa fa-question-circle has-tip" title="View Documentation for this section"></span></a>',
            'priority' => 50,
            'sections' => [
                'blog_list' => [
                    'title' => esc_html__('Blog List', 'wr-nitro'),
                    'settings' => [
                        'blog_style' => [
                            'default' => 'classic',
                            'sanitize_callback' => '',
                        ],
                        'blog_full_width' => [
                            'default' => 0,
                            'sanitize_callback' => '',
                        ],
                        'blog_color' => [
                            'default' => 'boxed',
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                        'blog_masonry_column' => [
                            'default' => '3',
                            'sanitize_callback' => '',
                        ],
                        'blog_layout' => [
                            'default' => 'right-sidebar',
                            'sanitize_callback' => '',
                        ],
                        'blog_sidebar_sticky' => [
                            'default' => 0,
                            'sanitize_callback' => '',
                        ],
                        'blog_custom_widget' => [
                            'default' => 1,
                        ],
                        'blog_sidebar' => [
                            'default' => 'primary-sidebar',
                            'sanitize_callback' => '',
                        ],
                        'blog_sidebar_width' => [
                            'default' => 300,
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                    ],
                    'controls' => [
                        'blog_style' => [
                            'label' => esc_html__('Layout', 'wr-nitro'),
                            'description' => esc_html__('Select a layout for your blog list.', 'wr-nitro'),
                            'section' => 'blog_list',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                'classic' => [
                                    'html' => '<div class="icon-cols icon-blog-classic"><span></span></div>',
                                    'title' => esc_html__('Classic', 'wr-nitro'),
                                ],
                                'simple' => [
                                    'html' => '<div class="icon-cols icon-blog-simple"><span></span></div>',
                                    'title' => esc_html__('Simple', 'wr-nitro'),
                                ],
                                'zigzag' => [
                                    'html' => '<div class="icon-cols icon-blog-zigzag"><span></span></div>',
                                    'title' => esc_html__('Zigzag', 'wr-nitro'),
                                ],
                                'masonry' => [
                                    'html' => '<div class="icon-cols icon-masonry"><span></span></div>',
                                    'title' => esc_html__('Masonry', 'wr-nitro'),
                                ],
                            ],
                        ],
                        'blog_masonry_column' => [
                            'label' => esc_html__('Number of Columns', 'wr-nitro'),
                            'description' => esc_html__('Number of columns to show.', 'wr-nitro'),
                            'section' => 'blog_list',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '2' => [
                                    'html' => '<div class="icon-cols icon-2cols"></div>',
                                    'title' => esc_html__('2 Columns', 'wr-nitro'),
                                ],
                                '3' => [
                                    'html' => '<div class="icon-cols icon-3cols"></div>',
                                    'title' => esc_html__('3 Columns', 'wr-nitro'),
                                ],
                                '4' => [
                                    'html' => '<div class="icon-cols icon-4cols"></div>',
                                    'title' => esc_html__('4 Columns', 'wr-nitro'),
                                ],
                            ],
                            'required' => ['blog_style = masonry'],
                        ],
                        'blog_color' => [
                            'label' => esc_html__('Item style', 'wr-nitro'),
                            'section' => 'blog_list',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                'default' => [
                                    'html' => '<div class="icon-cols icon-blog-classic"><span></span></div>',
                                    'title' => esc_html__('Default', 'wr-nitro'),
                                ],
                                'boxed' => [
                                    'html' => '<div class="icon-cols icon-blog-boxed icon-blog-classic"><span><span></span></span></div>',
                                    'title' => esc_html__('Boxed', 'wr-nitro'),
                                ],
                            ],
                            'required' => ['blog_style != zigzag'],
                        ],
                        'blog_full_width' => [
                            'label' => esc_html__('Enable Full Width', 'wr-nitro'),
                            'section' => 'blog_list',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                        ],
                        'blog_layout' => [
                            'label' => esc_html__('Sidebar layout', 'wr-nitro'),
                            'description' => esc_html__('Select a sidebar layout for your blog list.', 'wr-nitro'),
                            'section' => 'blog_list',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                'left-sidebar' => [
                                    'html' => '<div class="icon-cols icon-sidebar icon-left-sidebar"></div>',
                                    'title' => esc_html__('Sidebar on the left content', 'wr-nitro'),
                                ],
                                'no-sidebar' => [
                                    'html' => '<div class="icon-cols icon-sidebar icon-no-sidebar"></div>',
                                    'title' => esc_html__('Without Sidebar', 'wr-nitro'),
                                ],
                                'right-sidebar' => [
                                    'html' => '<div class="icon-cols icon-sidebar icon-right-sidebar"></div>',
                                    'title' => esc_html__('Sidebar on the right content', 'wr-nitro'),
                                ],
                            ],
                        ],
                        'blog_sidebar' => [
                            'label' => esc_html__('Sidebar Content', 'wr-nitro'),
                            'description' => esc_html__('Pick up a default sidebar.', 'wr-nitro'),
                            'section' => 'blog_list',
                            'type' => 'select',
                            'choices' => WR_Nitro_Helper::get_sidebars(),
                            'required' => ['blog_layout != no-sidebar'],
                        ],
                        'blog_sidebar_width' => [
                            'label' => esc_html__('Sidebar Width', 'wr-nitro'),
                            'description' => esc_html__('Custom width for sidebar.', 'wr-nitro'),
                            'section' => 'blog_list',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 250,
                                'max' => 575,
                                'step' => 5,
                                'unit' => 'px',
                            ],
                            'required' => ['blog_layout != no-sidebar'],
                        ],
                        'blog_sidebar_sticky' => [
                            'label' => esc_html__('Enable Sticky Sidebar', 'wr-nitro'),
                            'section' => 'blog_list',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['blog_layout != no-sidebar'],
                        ],
                        'blog_custom_widget' => [
                            'section' => 'blog_list',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<h3 class="btn-move-section"><a href="#" class="move-to-section button" data-section="widget_styles">' . esc_html__('Customize Widget Styles', 'wr-nitro') . '</a></h3>',
                            ],
                            'required' => ['blog_layout != no-sidebar'],
                        ],
                    ],
                ],
                'blog_single' => [
                    'title' => esc_html__('Single Post', 'wr-nitro'),
                    'settings' => [
                        'blog_single_title_heading' => [],
                        'blog_single_layout' => [
                            'default' => 'no-sidebar',
                            'sanitize_callback' => '',
                        ],
                        'blog_single_custom_widget' => [
                            'default' => 1,
                        ],
                        'blog_single_sidebar' => [
                            'default' => 0,
                            'sanitize_callback' => '',
                        ],
                        'blog_single_sidebar_width' => [
                            'default' => 300,
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'blog_single_sidebar_sticky' => [
                            'default' => 0,
                            'sanitize_callback' => '',
                        ],
                        'blog_single_title_style' => [
                            'default' => '1',
                            'sanitize_callback' => '',
                        ],
                        'blog_single_title_font_size' => [
                            'default' => 45,
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'blog_single_title_padding_top' => [
                            'default' => 100,
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'blog_single_title_padding_bottom' => [
                            'default' => 100,
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'blog_single_title_full_screen' => [
                            'default' => 0,
                            'sanitize_callback' => '',
                        ],
                        'blog_single_heading' => [],
                        'blog_single_social_share' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'blog_single_author' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'blog_single_navigation' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'blog_single_comment' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                    ],
                    'controls' => [
                        'blog_single_title_heading' => [
                            'label' => esc_html__('Post Title', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'blog_single',
                        ],
                        'blog_single_title_style' => [
                            'label' => esc_html__('Layout', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => [
                                    'html' => '<div class="icon-item-layout icon-blog-title-1"><span></span></div>',
                                    'title' => esc_html__('Title outside post thumbnail', 'wr-nitro'),
                                ],
                                '2' => [
                                    'html' => '<div class="icon-item-layout icon-blog-title-2"><span></span></div>',
                                    'title' => esc_html__('Title inside post thumbnail', 'wr-nitro'),
                                ],
                            ],
                        ],
                        'blog_single_title_font_size' => [
                            'label' => esc_html__('Font Size', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 12,
                                'max' => 80,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                        ],
                        'blog_single_title_padding_top' => [
                            'label' => esc_html__('Padding Top', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 0,
                                'max' => 500,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                        ],
                        'blog_single_title_padding_bottom' => [
                            'label' => esc_html__('Padding Bottom', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 0,
                                'max' => 500,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                        ],
                        'blog_single_title_full_screen' => [
                            'label' => esc_html__('Enable Full Screen', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['blog_single_title_style = 2'],
                        ],
                        'blog_single_heading' => [
                            'label' => esc_html__('Post Content', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'blog_single',
                        ],
                        'blog_single_layout' => [
                            'label' => esc_html__('Sidebar Layout', 'wr-nitro'),
                            'description' => esc_html__('Choose global layout settings: Left sidebar, No sidebar, Right sidebar.', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                'left-sidebar' => [
                                    'html' => '<div class="icon-cols icon-sidebar icon-left-sidebar"></div>',
                                    'title' => esc_html__('Sidebar on the left content', 'wr-nitro'),
                                ],
                                'no-sidebar' => [
                                    'html' => '<div class="icon-cols icon-sidebar icon-no-sidebar"></div>',
                                    'title' => esc_html__('Without Sidebar', 'wr-nitro'),
                                ],
                                'right-sidebar' => [
                                    'html' => '<div class="icon-cols icon-sidebar icon-right-sidebar"></div>',
                                    'title' => esc_html__('Sidebar on the right content', 'wr-nitro'),
                                ],
                            ],
                        ],
                        'blog_single_sidebar' => [
                            'label' => esc_html__('Sidebar Content', 'wr-nitro'),
                            'description' => esc_html__('Select the sidebar to display on this position.', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'select',
                            'choices' => WR_Nitro_Helper::get_sidebars(),
                            'required' => ['blog_single_layout != no-sidebar'],
                        ],
                        'blog_single_sidebar_width' => [
                            'label' => esc_html__('Sidebar Width', 'wr-nitro'),
                            'description' => esc_html__('Custom width for sidebar.', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 250,
                                'max' => 575,
                                'step' => 5,
                                'unit' => 'px',
                            ],
                            'required' => ['blog_single_layout != no-sidebar'],
                        ],
                        'blog_single_sidebar_sticky' => [
                            'label' => esc_html__('Enable Sticky Sidebar', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['blog_single_layout != no-sidebar'],
                        ],
                        'blog_single_custom_widget' => [
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<h3 class="btn-move-section"><a href="#" class="move-to-section button" data-section="widget_styles">' . esc_html__('Customize Widget Styles', 'wr-nitro') . '</a></h3>',
                            ],
                            'required' => ['blog_single_layout != no-sidebar'],
                        ],
                        'blog_single_social_share' => [
                            'label' => esc_html__('Show Social Sharing', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                        ],
                        'blog_single_author' => [
                            'label' => esc_html__('Show Author Info', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                        ],
                        'blog_single_navigation' => [
                            'label' => esc_html__('Show Post Navigation', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                        ],
                        'blog_single_comment' => [
                            'label' => esc_html__('Show Comment Area', 'wr-nitro'),
                            'section' => 'blog_single',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                        ],
                    ],
                ],
            ],
            'type' => 'WR_Nitro_Customize_Panel',
            'apply_to' => ['blog'],
        ];
    }
}

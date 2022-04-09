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
class WR_Nitro_Customize_Options_General
{
    public static function get()
    {
        return [
            'title' => esc_html__('General', 'wr-nitro'),
            'description' => '<a target="_blank" rel="noopener noreferrer" href="http://nitro.woorockets.com/docs/document/general"><span class="fa fa-question-circle has-tip" title="View Documentation for this section"></span></a>',
            'priority' => 10,
            'sections' => [
                'site_identity' => [
                    'title' => esc_html__('Site Identity', 'wr-nitro'),
                ],
                'social' => [
                    'title' => esc_html__('Social', 'wr-nitro'),
                    'settings' => [
                        'social_network_share_heading' => [],
                        'social_network_share_facebook' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'social_network_share_twitter' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'social_network_share_google' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'social_network_share_pinterest' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'social_network_share_vk' => [
                            'default' => 1,
                            'sanitize_callback' => '',
                        ],
                        'social_network_share_email' => [
                            'default' => 0,
                            'sanitize_callback' => '',
                        ],
                        'social_network_heading' => [],
                        'facebook' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'twitter' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'instagram' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'linkedin' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'pinterest' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'dribbble' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'behance' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'flickr' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'google-plus' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'medium' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'skype' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'slack' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'tumblr' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'vimeo' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'yahoo' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'youtube' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'rss' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'vk' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                    ],
                    'controls' => [
                        'social_network_share_heading' => [
                            'label' => esc_html__('Social Sharing', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'social',
                        ],
                        'social_network_share_facebook' => [
                            'label' => esc_html__('Enable Facebook', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['wc_single_social_share != 0'],
                        ],
                        'social_network_share_twitter' => [
                            'label' => esc_html__('Enable Twitter', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['wc_single_social_share != 0'],
                        ],
                        'social_network_share_google' => [
                            'label' => esc_html__('Enable Google Plus', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['wc_single_social_share != 0'],
                        ],
                        'social_network_share_pinterest' => [
                            'label' => esc_html__('Enable Pinterest', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['wc_single_social_share != 0'],
                        ],
                        'social_network_share_vk' => [
                            'label' => esc_html__('Enable VK', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['wc_single_social_share != 0'],
                        ],
                        'social_network_share_email' => [
                            'label' => esc_html__('Enable Email', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['wc_single_social_share != 0'],
                        ],
                        'social_network_heading' => [
                            'label' => esc_html__('Social Account', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'social',
                        ],
                        'facebook' => [
                            'label' => esc_html__('Facebook', 'wr-nitro'),
                            'description' => esc_html__('Link To Facebook', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'twitter' => [
                            'label' => esc_html__('Twitter', 'wr-nitro'),
                            'description' => esc_html__('Link to Twitter.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'instagram' => [
                            'label' => esc_html__('Instagram', 'wr-nitro'),
                            'description' => esc_html__('Link To Instagram', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'linkedin' => [
                            'label' => esc_html__('Linkedin', 'wr-nitro'),
                            'description' => esc_html__('Link to Linkedin.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'pinterest' => [
                            'label' => esc_html__('Pinterest', 'wr-nitro'),
                            'description' => esc_html__('Link to Pinterest.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'dribbble' => [
                            'label' => esc_html__('Dribbble', 'wr-nitro'),
                            'description' => esc_html__('Link to Dribbble.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'behance' => [
                            'label' => esc_html__('Behance', 'wr-nitro'),
                            'description' => esc_html__('Link to Behance.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'flickr' => [
                            'label' => esc_html__('Flickr', 'wr-nitro'),
                            'description' => esc_html__('Link to Flickr.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'google-plus' => [
                            'label' => esc_html__('Google Plus', 'wr-nitro'),
                            'description' => esc_html__('Link to Google Plus.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'medium' => [
                            'label' => esc_html__('Medium', 'wr-nitro'),
                            'description' => esc_html__('Link to Medium.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'skype' => [
                            'label' => esc_html__('Skype', 'wr-nitro'),
                            'description' => esc_html__('Link to Skype.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'slack' => [
                            'label' => esc_html__('Slack', 'wr-nitro'),
                            'description' => esc_html__('Link to Slack.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'tumblr' => [
                            'label' => esc_html__('Tumblr', 'wr-nitro'),
                            'description' => esc_html__('Link to Tumblr.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'vimeo' => [
                            'label' => esc_html__('Vimeo', 'wr-nitro'),
                            'description' => esc_html__('Link to Vimeo.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'yahoo' => [
                            'label' => esc_html__('Yahoo', 'wr-nitro'),
                            'description' => esc_html__('Link to Yahoo.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'youtube' => [
                            'label' => esc_html__('Youtube', 'wr-nitro'),
                            'description' => esc_html__('Link to Youtube.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'rss' => [
                            'label' => esc_html__('Rss', 'wr-nitro'),
                            'description' => esc_html__('Rss link.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                        'vk' => [
                            'label' => esc_html__('VK', 'wr-nitro'),
                            'description' => esc_html__('VK link.', 'wr-nitro'),
                            'section' => 'social',
                            'type' => 'text',
                        ],
                    ],
                ],
                'page_loader' => [
                    'title' => esc_html__('Page Loading Effect', 'wr-nitro'),
                    'settings' => [
                        'page_loader' => [
                            'sanitize_callback' => '',
                            'default' => 'none',
                        ],
                        'page_loader_css' => [
                            'sanitize_callback' => '',
                            'default' => '1',
                        ],
                        'page_loader_image' => [
                            'sanitize_callback' => '',
                            'default' => '',
                        ],
                        'content_loader_color' => [
                            'default' => [
                                'icon' => '#fff',
                                'bg' => 'rgba(0, 0, 0, 0.7)',
                            ],
                        ],
                    ],
                    'controls' => [
                        'page_loader' => [
                            'label' => esc_html__('Effect Type', 'wr-nitro'),
                            'description' => esc_html__('Use preloading effects to keep user on site while waiting the content.', 'wr-nitro'),
                            'section' => 'page_loader',
                            'type' => 'radio',
                            'choices' => [
                                'none' => esc_html__('None', 'wr-nitro'),
                                'css' => esc_html__('CSS Animation', 'wr-nitro'),
                                'image' => esc_html__('Image', 'wr-nitro'),
                            ],
                        ],
                        'page_loader_css' => [
                            'label' => esc_html__('Animation Type', 'wr-nitro'),
                            'section' => 'page_loader',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<div class="wr-loader-1"><div class="wr-loader"></div></div>',
                                '2' => '<div class="wr-loader-2"><div class="wr-loader"></div></div>',
                                '3' => '<div class="wr-loader-3"><div class="wr-loader"></div></div>',
                                '4' => '<div class="wr-loader-4"><div class="wr-loader"></div></div>',
                                '5' => '<div class="wr-loader-5"><div class="wr-loader"></div></div>',
                                '6' => '<div class="wr-loader-6"><div class="wr-loader"></div></div>',
                                '7' => '<div class="wr-loader-7"><div class="wr-loader"></div></div>',
                                '8' => '<div class="wr-loader-8"><div class="wr-loader"></div></div>',
                                '9' => '<div class="wr-loader-9"><div class="wr-loader"></div><div class="wr-loader wr-loader-inner-2"></div><div class="wr-loader wr-loader-inner-3"></div><div class="wr-loader wr-loader-inner-4"></div></div>',
                                '10' => '<div class="wr-loader-10"><div class="wr-loader"></div><div class="wr-loader wr-loader-inner-2"></div></div>',
                                '11' => '<div class="wr-loader-11"><div class="wr-loader"></div><div class="wr-loader wr-loader-inner-2"></div><div class="wr-loader wr-loader-inner-3"></div><div class="wr-loader wr-loader-inner-4"></div><div class="wr-loader wr-loader-inner-5"></div><div class="wr-loader wr-loader-inner-6"></div><div class="wr-loader wr-loader-inner-7"></div><div class="wr-loader wr-loader-inner-8"></div><div class="wr-loader wr-loader-inner-9"></div></div>',
                                '12' => '<div class="wr-loader-12"><div class="wr-loader"></div><div class="wr-loader wr-loader-inner-2"></div></div>',
                            ],
                            'required' => ['page_loader == css'],
                        ],
                        'page_loader_image' => [
                            'label' => esc_html__('Image', 'wr-nitro'),
                            'section' => 'page_loader',
                            'type' => 'WP_Customize_Image_Control',
                            'required' => ['page_loader == image'],
                        ],
                        'content_loader_color' => [
                            'section' => 'page_loader',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'icon' => esc_html__('Icon', 'wr-nitro'),
                                'bg' => esc_html__('Overlay Background', 'wr-nitro'),
                            ],
                            'required' => [
                                'page_loader == css',
                            ],
                        ],
                    ],
                ],
                'widget_styles' => [
                    'title' => esc_html__('Widget Styles', 'wr-nitro'),
                    'settings' => [
                        'w_style' => [
                            'default' => '1',
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                        'w_style_bg' => [
                            'default' => 1,
                            'transport' => 'postMessage',
                        ],
                        'w_style_border' => [
                            'default' => 1,
                            'transport' => 'postMessage',
                        ],
                        'w_style_divider' => [
                            'default' => 1,
                            'transport' => 'postMessage',
                        ],
                        'move_to_general_color' => [
                            'default' => 1,
                        ],
                    ],
                    'controls' => [
                        'w_style' => [
                            'label' => esc_html__('Choose Style', 'wr-nitro'),
                            'section' => 'widget_styles',
                            'type' => 'select',
                            'choices' => [
                                '1' => esc_html__('Style 1', 'wr-nitro'),
                                '2' => esc_html__('Style 2', 'wr-nitro'),
                                '3' => esc_html__('Style 3', 'wr-nitro'),
                                '4' => esc_html__('Style 4', 'wr-nitro'),
                            ]
                        ],
                        'w_style_bg' => [
                            'label' => esc_html__('Enable Background', 'wr-nitro'),
                            'section' => 'widget_styles',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['w_style != 3'],
                        ],
                        'w_style_border' => [
                            'label' => esc_html__('Enable Border', 'wr-nitro'),
                            'section' => 'widget_styles',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['w_style != 4'],
                        ],
                        'w_style_divider' => [
                            'label' => esc_html__('Enable Divider For Widget Title', 'wr-nitro'),
                            'section' => 'widget_styles',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => ['w_style = "1|2"'],
                        ],
                        'move_to_general_color' => [
                            'section' => 'widget_styles',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<h3 class="btn-move-section"><a href="#" class="move-to-section button" data-section="color_general">' . esc_html__('Customize Color', 'wr-nitro') . '</a></h3>',
                            ],
                        ],
                    ],
                ],
                'pagination' => [
                    'title' => esc_html__('Pagination Style', 'wr-nitro'),
                    'settings' => [
                        'pagination_style' => [
                            'default' => 'style-1',
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                    ],
                    'controls' => [
                        'pagination_style' => [
                            'label' => esc_html__('Pagination Style', 'wr-nitro'),
                            'section' => 'pagination',
                            'type' => 'WR_Nitro_Customize_Control_Select_Image',
                            'choices' => [
                                'style-1' => '',
                                'style-2' => '',
                                'style-3' => '',
                            ],
                        ],
                    ],
                ],
                'back_to_top' => [
                    'title' => esc_html__('Back To Top Button', 'wr-nitro'),
                    'settings' => [
                        'back_top' => [
                            'default' => 1,
                        ],
                        'back_top_type' => [
                            'default' => 'square',
                            'transport' => 'postMessage',
                        ],
                        'back_top_style' => [
                            'default' => 'light',
                            'transport' => 'postMessage',
                        ],
                        'back_top_size' => [
                            'default' => 32,
                            'transport' => 'postMessage',
                        ],
                        'back_top_icon_size' => [
                            'default' => 14,
                            'transport' => 'postMessage',
                        ],
                        'back_top_general_color' => [
                            'default' => 1,
                        ],
                    ],
                    'controls' => [
                        'back_top' => [
                            'label' => esc_html__('Enable', 'wr-nitro'),
                            'section' => 'back_to_top',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                        ],
                        'back_top_type' => [
                            'label' => esc_html__('Shape', 'wr-nitro'),
                            'section' => 'back_to_top',
                            'type' => 'select',
                            'choices' => [
                                'square' => esc_html__('Square', 'wr-nitro'),
                                'circle' => esc_html__('Circle', 'wr-nitro'),
                                'rounded' => esc_html__('Rounded', 'wr-nitro'),
                            ],
                            'required' => ['back_top = 1'],
                        ],
                        'back_top_style' => [
                            'label' => esc_html__('Style', 'wr-nitro'),
                            'section' => 'back_to_top',
                            'type' => 'select',
                            'choices' => [
                                'light' => esc_html__('Light', 'wr-nitro'),
                                'dark' => esc_html__('Dark', 'wr-nitro'),
                            ],
                            'required' => ['back_top = 1'],
                        ],
                        'back_top_size' => [
                            'label' => esc_html__('Button Size', 'wr-nitro'),
                            'section' => 'back_to_top',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 20,
                                'max' => 60,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                            'required' => ['back_top = 1'],
                        ],
                        'back_top_icon_size' => [
                            'label' => esc_html__('Icon Size', 'wr-nitro'),
                            'section' => 'back_to_top',
                            'type' => 'WR_Nitro_Customize_Control_Slider',
                            'choices' => [
                                'min' => 10,
                                'max' => 50,
                                'step' => 1,
                                'unit' => 'px',
                            ],
                            'required' => ['back_top = 1'],
                        ],
                        'back_top_general_color' => [
                            'section' => 'back_to_top',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<h3 class="btn-move-section"><a href="#" class="move-to-section button" data-section="color_general">' . esc_html__('Customize Color', 'wr-nitro') . '</a></h3>',
                            ],
                            'required' => ['back_top = 1'],
                        ],
                    ],
                ],
            ]
        ];
    }
}

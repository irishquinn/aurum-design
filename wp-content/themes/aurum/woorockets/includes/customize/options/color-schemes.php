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
class WR_Nitro_Customize_Options_Color_Schemes
{
    public static function get()
    {
        return [
            'title' => esc_html__('Color', 'wr-nitro'),
            'description' => '<a target="_blank" rel="noopener noreferrer" href="http://nitro.woorockets.com/docs/document/color"><span class="fa fa-question-circle has-tip" title="View Documentation for this section"></span></a>',
            'priority' => 13,
            'sections' => [
                'color_general' => [
                    'title' => esc_html__('General', 'wr-nitro'),
                    'settings' => [
                        'color_profile' => [
                            'default' => 'profile-1',
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                        'custom_color' => [
                            'default' => '#ff4064',
                            'sanitize_callback' => '',
                            'transport' => 'postMessage',
                        ],
                        'content_body_color' => [
                            'default' => [
                                'body_text' => '#646464',
                                'heading_text' => '#323232',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'general_line_color' => [
                            'default' => '#ebebeb',
                            'transport' => 'postMessage',
                        ],
                        'content_meta_color' => [
                            'default' => '#ababab',
                            'transport' => 'postMessage',
                        ],
                        'general_color_heading' => [],
                        'general_bg_heading' => [],
                        'wr_general_container_color' => [
                            'default' => '#ffffff',
                            'transport' => 'postMessage',
                        ],
                        'wr_layout_offset_color' => [
                            'default' => '#ffffff',
                            'transport' => 'postMessage',
                        ],
                        'wr_page_body_bg_color' => [
                            'default' => '#ffffff',
                            'transport' => 'postMessage',
                        ],
                        'wr_layout_boxed_bg_image' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_boxed_size' => [
                            'default' => 'auto',
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_boxed_repeat' => [
                            'default' => 'no-repeat',
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_boxed_position' => [
                            'default' => 'left top',
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_boxed_attachment' => [
                            'default' => 'scroll',
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_boxed_parallax' => [
                            'default' => 0,
                            'sanitize_callback' => '',
                        ],
                        'wr_layout_boxed_bg_mask_color' => [
                            'default' => 'rgba(0, 0, 0, 0)',
                            'transport' => 'postMessage',
                        ],
                        'general_overlay_color' => [
                            'default' => '#f2f2f2',
                            'transport' => 'postMessage',
                        ],
                        'general_fields_bg' => [
                            'default' => '#f9f9f9',
                            'transport' => 'postMessage',
                        ],
                        'move_to_general' => [
                            'default' => 1,
                        ],
                    ],
                    'controls' => [
                        'color_profile' => [
                            'label' => esc_html__('Color Profiles', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Preset',
                            'section' => 'color_general',
                            'preset' => WR_Nitro_Customize::get_color_profiles(),
                        ],
                        'general_bg_heading' => [
                            'label' => esc_html__('Background', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'color_general',
                        ],
                        'wr_page_body_bg_color' => [
                            'section' => 'color_general',
                            'label' => esc_html__('Outer Body BG', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'required' => ['wr_layout_boxed = 1'],
                        ],
                        'wr_general_container_color' => [
                            'section' => 'color_general',
                            'label' => esc_html__('Inner Body BG', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                        ],
                        'general_overlay_color' => [
                            'section' => 'color_general',
                            'label' => esc_html__('Secondary BG', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                        ],
                        'general_fields_bg' => [
                            'section' => 'color_general',
                            'label' => esc_html__('Form Fields BG', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                        ],
                        'wr_layout_offset_color' => [
                            'section' => 'color_general',
                            'label' => esc_html__('Offset BG', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'required' => ['wr_layout_offset != 0'],
                        ],
                        'wr_layout_boxed_bg_image' => [
                            'label' => esc_html__('Outer Body BG Image', 'wr-nitro'),
                            'section' => 'color_general',
                            'type' => 'WP_Customize_Image_Control',
                            'required' => ['wr_layout_boxed = 1'],
                        ],
                        'wr_layout_boxed_size' => [
                            'label' => esc_html__('BG Size', 'wr-nitro'),
                            'section' => 'color_general',
                            'type' => 'select',
                            'choices' => [
                                'auto' => esc_html__('Auto', 'wr-nitro'),
                                'cover' => esc_html__('Cover', 'wr-nitro'),
                                'contain' => esc_html__('Contain', 'wr-nitro'),
                                'initial' => esc_html__('Initial', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_layout_boxed = 1',
                                'wr_layout_boxed_bg_image != ""',
                            ],
                        ],
                        'wr_layout_boxed_repeat' => [
                            'label' => esc_html__('BG Repeat', 'wr-nitro'),
                            'section' => 'color_general',
                            'type' => 'select',
                            'choices' => [
                                'no-repeat' => esc_html__('No Repeat', 'wr-nitro'),
                                'repeat' => esc_html__('Repeat', 'wr-nitro'),
                                'repeat-x' => esc_html__('Repeat X', 'wr-nitro'),
                                'repeat-y' => esc_html__('Repeat Y', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_layout_boxed = 1',
                                'wr_layout_boxed_bg_image != ""',
                            ],
                        ],
                        'wr_layout_boxed_position' => [
                            'label' => esc_html__('BG Position', 'wr-nitro'),
                            'section' => 'color_general',
                            'type' => 'select',
                            'choices' => [
                                'left top' => esc_html__('Left Top', 'wr-nitro'),
                                'left center' => esc_html__('Left Center', 'wr-nitro'),
                                'left bottom' => esc_html__('Left Bottom', 'wr-nitro'),
                                'right top' => esc_html__('Right Top', 'wr-nitro'),
                                'right center' => esc_html__('Right Center', 'wr-nitro'),
                                'right bottom' => esc_html__('Right Bottom', 'wr-nitro'),
                                'center top' => esc_html__('Center Top', 'wr-nitro'),
                                'center center' => esc_html__('Center Center', 'wr-nitro'),
                                'center bottom' => esc_html__('Center Bottom', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_layout_boxed = 1',
                                'wr_layout_boxed_bg_image != ""',
                            ],
                        ],
                        'wr_layout_boxed_attachment' => [
                            'label' => esc_html__('BG Attachment', 'wr-nitro'),
                            'section' => 'color_general',
                            'type' => 'select',
                            'choices' => [
                                'scroll' => esc_html__('Scroll', 'wr-nitro'),
                                'fixed' => esc_html__('Fixed', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_layout_boxed = 1',
                                'wr_layout_boxed_bg_image != ""',
                            ],
                        ],
                        'wr_layout_boxed_parallax' => [
                            'label' => esc_html__('Enable Parallax', 'wr-nitro'),
                            'section' => 'color_general',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => [
                                'wr_layout_boxed = 1',
                                'wr_layout_boxed_bg_image != ""',
                            ],
                        ],
                        'wr_layout_boxed_bg_mask_color' => [
                            'section' => 'color_general',
                            'label' => esc_html__('Mask Overlay Color', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'required' => [
                                'wr_layout_boxed = 1',
                                'wr_layout_boxed_bg_image != ""',
                            ],
                        ],
                        'general_color_heading' => [
                            'label' => esc_html__('Content', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'color_general',
                        ],
                        'custom_color' => [
                            'label' => esc_html__('Main', 'wr-nitro'),
                            'section' => 'color_general',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                        ],
                        'content_body_color' => [
                            'section' => 'color_general',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'body_text' => esc_html__('Text', 'wr-nitro'),
                                'heading_text' => esc_html__('Heading', 'wr-nitro'),
                            ],
                        ],
                        'content_meta_color' => [
                            'label' => esc_html__('Entry Meta', 'wr-nitro'),
                            'section' => 'color_general',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                        ],
                        'general_line_color' => [
                            'section' => 'color_general',
                            'label' => esc_html__('Line', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                        ],
                        'move_to_general' => [
                            'section' => 'color_general',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<div class="btn-move-section"><a href="#" class="move-to-section button" data-section="layout_general">' . esc_html__('Edit Layout', 'wr-nitro') . '</a><a href="#" class="move-to-section button" data-section="typo_general">' . esc_html__('Edit Typography', 'wr-nitro') . '</a></div>',
                            ],
                        ],
                    ],
                ],
                'color_pages' => [
                    'title' => esc_html__('Page Title', 'wr-nitro'),
                    'description' => '',
                    'settings' => [
                        'page_bg_heading' => [],
                        'wr_page_title_custom_color' => [
                            'default' => 1,
                        ],
                        'wr_page_title_bg_color' => [
                            'default' => '#f2f2f2',
                            'transport' => 'postMessage',
                        ],
                        'wr_page_title_bg_image' => [
                            'default' => '',
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_size' => [
                            'default' => 'auto',
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_repeat' => [
                            'default' => 'no-repeat',
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_position' => [
                            'default' => 'left top',
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_attachment' => [
                            'default' => 'scroll',
                            'transport' => 'postMessage',
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_parallax' => [
                            'default' => 0,
                            'sanitize_callback' => '',
                        ],
                        'wr_page_title_mask_color' => [
                            'default' => 'rgba(0, 0, 0, 0)',
                            'transport' => 'postMessage',
                        ],
                        'wr_page_title_link_colors' => [
                            'default' => [
                                'normal' => '#323232',
                                'hover' => '#ff4064',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'page_title_heading' => [],
                        'wr_page_title_color' => [
                            'default' => [
                                'head' => '#323232',
                                'body' => '#646464',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'move_to_page_title' => [
                            'default' => 1,
                        ],
                    ],
                    'controls' => [
                        'wr_page_title_custom_color' => [
                            'label' => esc_html__('Use General Color', 'wr-nitro'),
                            'description' => esc_html__('To save time, you can use colors defined in section "General". If you want to set specific color, turn off this parameter.', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'section' => 'color_pages',
                            'required' => [
                                'wr_page_title = 1'
                            ],
                        ],
                        'page_bg_heading' => [
                            'label' => esc_html__('Background', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'color_pages',
                        ],
                        'wr_page_title_bg_color' => [
                            'label' => esc_html__('Background Color', 'wr-nitro'),
                            'section' => 'color_pages',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'required' => [
                                'wr_page_title_custom_color = 0',
                                'wr_page_title = 1',
                                'dependency_failed_action' => 'disable',
                            ],
                        ],
                        'wr_page_title_bg_image' => [
                            'label' => esc_html__('Background Image', 'wr-nitro'),
                            'section' => 'color_pages',
                            'type' => 'WP_Customize_Image_Control',
                            'required' => [
                                'wr_page_title = 1',
                                'dependency_failed_action' => 'disable'
                            ],
                        ],
                        'wr_page_title_size' => [
                            'label' => esc_html__('Background Size', 'wr-nitro'),
                            'section' => 'color_pages',
                            'type' => 'select',
                            'choices' => [
                                'auto' => esc_html__('Auto', 'wr-nitro'),
                                'cover' => esc_html__('Cover', 'wr-nitro'),
                                'contain' => esc_html__('Contain', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_page_title_bg_image != ""',
                            ],
                        ],
                        'wr_page_title_repeat' => [
                            'label' => esc_html__('Background Repeat', 'wr-nitro'),
                            'section' => 'color_pages',
                            'type' => 'select',
                            'choices' => [
                                'no-repeat' => esc_html__('No Repeat', 'wr-nitro'),
                                'repeat' => esc_html__('Repeat', 'wr-nitro'),
                                'repeat-x' => esc_html__('Repeat X', 'wr-nitro'),
                                'repeat-y' => esc_html__('Repeat Y', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_page_title_bg_image != ""',
                            ],
                        ],
                        'wr_page_title_position' => [
                            'label' => esc_html__('Background Position', 'wr-nitro'),
                            'section' => 'color_pages',
                            'type' => 'select',
                            'choices' => [
                                'left top' => esc_html__('Left Top', 'wr-nitro'),
                                'left center' => esc_html__('Left Center', 'wr-nitro'),
                                'left bottom' => esc_html__('Left Bottom', 'wr-nitro'),
                                'right top' => esc_html__('Right Top', 'wr-nitro'),
                                'right center' => esc_html__('Right Center', 'wr-nitro'),
                                'right bottom' => esc_html__('Right Bottom', 'wr-nitro'),
                                'center top' => esc_html__('Center Top', 'wr-nitro'),
                                'center center' => esc_html__('Center Center', 'wr-nitro'),
                                'center bottom' => esc_html__('Center Bottom', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_page_title_bg_image != ""',
                                'wr_page_title_parallax = 0',
                            ],
                        ],
                        'wr_page_title_attachment' => [
                            'label' => esc_html__('Background Attachment', 'wr-nitro'),
                            'section' => 'color_pages',
                            'type' => 'select',
                            'choices' => [
                                'scroll' => esc_html__('Scroll', 'wr-nitro'),
                                'fixed' => esc_html__('Fixed', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_page_title_bg_image != ""',
                            ],
                        ],
                        'wr_page_title_parallax' => [
                            'label' => esc_html__('Parallax Background', 'wr-nitro'),
                            'section' => 'color_pages',
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'required' => [
                                'wr_page_title_bg_image != ""',
                            ],
                        ],
                        'wr_page_title_mask_color' => [
                            'section' => 'color_pages',
                            'label' => esc_html__('Mask Overlay Color', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'required' => [
                                'wr_page_title_bg_image != ""',
                            ],
                        ],
                        'page_title_heading' => [
                            'label' => esc_html__('Content', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'color_pages',
                        ],
                        'wr_page_title_color' => [
                            'section' => 'color_pages',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'body' => esc_html__('Text', 'wr-nitro'),
                                'head' => esc_html__('Heading', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_page_title_custom_color = 0',
                                'wr_page_title = 1',
                                'dependency_failed_action' => 'disable',
                            ],
                        ],
                        'wr_page_title_link_colors' => [
                            'section' => 'color_pages',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'normal' => esc_html__('Link', 'wr-nitro'),
                                'hover' => esc_html__('Link Hover', 'wr-nitro'),
                            ],
                            'required' => [
                                'wr_page_title_custom_color = 0',
                                'wr_page_title = 1',
                                'dependency_failed_action' => 'disable',
                            ],
                        ],
                        'move_to_page_title' => [
                            'section' => 'color_pages',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<div class="btn-move-section"><a href="#" class="move-to-section button" data-section="page_title">' . esc_html__('Edit Layout', 'wr-nitro') . '</a><a href="#" class="move-to-section button" data-section="typo_page_title">' . esc_html__('Edit Typography', 'wr-nitro') . '</a></div>',
                            ],
                        ],
                    ],
                ],
                'color_button' => [
                    'title' => esc_html__('Button', 'wr-nitro'),
                    'settings' => [
                        'btn_primary_color_heading' => [],
                        'btn_primary_bg_color' => [
                            'default' => [
                                'normal' => '#323232',
                                'hover' => '#222',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'btn_primary_color' => [
                            'default' => [
                                'normal' => '#fff',
                                'hover' => '#fff',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'btn_primary_border_color' => [
                            'default' => [
                                'normal' => '#323232',
                                'hover' => '#323232',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'btn_secondary_color_heading' => [],
                        'btn_secondary_bg_color' => [
                            'default' => [
                                'normal' => 'rgba(255, 255, 255, 0)',
                                'hover' => '#222',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'btn_secondary_color' => [
                            'default' => [
                                'normal' => '#323232',
                                'hover' => '#fff',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'btn_secondary_border_color' => [
                            'default' => [
                                'normal' => '#323232',
                                'hover' => '#323232',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'move_to_button' => [
                            'default' => 1,
                        ],
                    ],
                    'controls' => [
                        'btn_primary_color_heading' => [
                            'label' => esc_html__('Primary', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'color_button',
                        ],
                        'btn_primary_bg_color' => [
                            'section' => 'color_button',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'normal' => esc_html__('Background', 'wr-nitro'),
                                'hover' => esc_html__('Background Hover', 'wr-nitro'),
                            ],
                        ],
                        'btn_primary_color' => [
                            'section' => 'color_button',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'normal' => esc_html__('Text', 'wr-nitro'),
                                'hover' => esc_html__('Text Hover', 'wr-nitro'),
                            ],
                        ],
                        'btn_primary_border_color' => [
                            'section' => 'color_button',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'normal' => esc_html__('Border', 'wr-nitro'),
                                'hover' => esc_html__('Border Hover', 'wr-nitro'),
                            ],
                        ],
                        'btn_secondary_color_heading' => [
                            'label' => esc_html__('Secondary', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'color_button',
                        ],
                        'btn_secondary_bg_color' => [
                            'section' => 'color_button',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'normal' => esc_html__('Background', 'wr-nitro'),
                                'hover' => esc_html__('Background Hover', 'wr-nitro'),
                            ],
                        ],
                        'btn_secondary_color' => [
                            'section' => 'color_button',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'normal' => esc_html__('Text', 'wr-nitro'),
                                'hover' => esc_html__('Text Hover', 'wr-nitro'),
                            ],
                        ],
                        'btn_secondary_border_color' => [
                            'section' => 'color_button',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'normal' => esc_html__('Border', 'wr-nitro'),
                                'hover' => esc_html__('Border Hover', 'wr-nitro'),
                            ],
                        ],
                        'move_to_button' => [
                            'section' => 'color_button',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<div class="btn-move-section"><a href="#" class="move-to-section button" data-section="layout_button">' . esc_html__('Edit Layout', 'wr-nitro') . '</a><a href="#" class="move-to-section button" data-section="typo_button">' . esc_html__('Edit Typography', 'wr-nitro') . '</a></div>',
                            ],
                        ],
                    ],
                ],
                'color_footer' => [
                    'title' => esc_html__('Footer', 'wr-nitro'),
                    'settings' => [
                        'footer_top_heading' => [],
                        'footer_top_bg_color' => [
                            'default' => '#ffffff',
                            'transport' => 'postMessage',
                        ],
                        'footer_customize_color' => [
                            'default' => 1,
                        ],
                        'footer_top_color' => [
                            'default' => [
                                'text' => '#646464',
                                'heading' => '#323232',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'footer_bg_image' => [
                            'default' => '',
                        ],
                        'footer_bg_image_size' => [
                            'default' => 'auto',
                            'transport' => 'postMessage',
                        ],
                        'footer_bg_image_repeat' => [
                            'default' => 'no-repeat',
                            'transport' => 'postMessage',
                        ],
                        'footer_bg_image_position' => [
                            'default' => 'center center',
                            'transport' => 'postMessage',
                        ],
                        'footer_bg_image_attachment' => [
                            'default' => 'scroll',
                            'transport' => 'postMessage',
                        ],
                        'footer_top_link_color' => [
                            'default' => [
                                'normal' => '#646464',
                                'hover' => '#ff4064',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'footer_bot_heading' => [],
                        'footer_bot_color' => [
                            'default' => [
                                'bg' => '#f2f2f2',
                                'text' => '#646464',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'footer_bot_link_color' => [
                            'default' => [
                                'normal' => '#646464',
                                'hover' => '#ff4064',
                            ],
                            'transport' => 'postMessage',
                        ],
                        'move_to_footer' => [
                            'default' => 1,
                        ],
                    ],
                    'controls' => [
                        'footer_customize_color' => [
                            'label' => esc_html__('Use General Color', 'wr-nitro'),
                            'description' => esc_html__('To save time, you can use colors defined in section "General". If you want to set specific color, turn off this parameter.', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Toggle',
                            'section' => 'color_footer',
                        ],
                        'footer_top_heading' => [
                            'label' => esc_html__('Footer', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'color_footer',
                        ],
                        'footer_top_bg_color' => [
                            'label' => esc_html__('Background Color', 'wr-nitro'),
                            'section' => 'color_footer',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'required' => [
                                'footer_customize_color = 0',
                                'dependency_failed_action' => 'disable'
                            ],
                        ],
                        'footer_bg_image' => [
                            'label' => esc_html__('Background Image', 'wr-nitro'),
                            'section' => 'color_footer',
                            'type' => 'WP_Customize_Image_Control',
                            'required' => [
                                'footer_customize_color = 0',
                                'dependency_failed_action' => 'disable',
                            ],
                        ],
                        'footer_bg_image_size' => [
                            'label' => esc_html__('Background Size', 'wr-nitro'),
                            'section' => 'color_footer',
                            'type' => 'select',
                            'choices' => [
                                'auto' => esc_html__('Auto', 'wr-nitro'),
                                'cover' => esc_html__('Cover', 'wr-nitro'),
                                'contain' => esc_html__('Contain', 'wr-nitro'),
                            ],
                            'required' => [
                                'footer_bg_image != ""',
                                'footer_customize_color = 0'
                            ],
                        ],
                        'footer_bg_image_repeat' => [
                            'label' => esc_html__('Background Repeat', 'wr-nitro'),
                            'section' => 'color_footer',
                            'type' => 'select',
                            'choices' => [
                                'no-repeat' => esc_html__('No Repeat', 'wr-nitro'),
                                'repeat' => esc_html__('Repeat', 'wr-nitro'),
                                'repeat-x' => esc_html__('Repeat X', 'wr-nitro'),
                                'repeat-y' => esc_html__('Repeat Y', 'wr-nitro'),
                            ],
                            'required' => [
                                'footer_bg_image != ""',
                                'footer_customize_color = 0'
                            ],
                        ],
                        'footer_bg_image_position' => [
                            'label' => esc_html__('Background Position', 'wr-nitro'),
                            'section' => 'color_footer',
                            'type' => 'select',
                            'choices' => [
                                'left top' => esc_html__('Left Top', 'wr-nitro'),
                                'left center' => esc_html__('Left Center', 'wr-nitro'),
                                'left bottom' => esc_html__('Left Bottom', 'wr-nitro'),
                                'right top' => esc_html__('Right Top', 'wr-nitro'),
                                'right center' => esc_html__('Right Center', 'wr-nitro'),
                                'right bottom' => esc_html__('Right Bottom', 'wr-nitro'),
                                'center top' => esc_html__('Center Top', 'wr-nitro'),
                                'center center' => esc_html__('Center Center', 'wr-nitro'),
                                'center bottom' => esc_html__('Center Bottom', 'wr-nitro'),
                            ],
                            'required' => [
                                'footer_bg_image != ""',
                                'footer_customize_color = 0'
                            ],
                        ],
                        'footer_bg_image_attachment' => [
                            'label' => esc_html__('Background Attachment', 'wr-nitro'),
                            'section' => 'color_footer',
                            'type' => 'select',
                            'choices' => [
                                'scroll' => esc_html__('Scroll', 'wr-nitro'),
                                'fixed' => esc_html__('Fixed', 'wr-nitro'),
                            ],
                            'required' => [
                                'footer_bg_image != ""',
                                'footer_customize_color = 0',
                            ],
                        ],
                        'footer_top_color' => [
                            'section' => 'color_footer',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'text' => esc_html__('Text', 'wr-nitro'),
                                'heading' => esc_html__('Heading', 'wr-nitro'),
                            ],
                            'required' => [
                                'footer_customize_color = 0',
                                'dependency_failed_action' => 'disable',
                            ],
                        ],
                        'footer_top_link_color' => [
                            'section' => 'color_footer',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'normal' => esc_html__('Link', 'wr-nitro'),
                                'hover' => esc_html__('Link Hover', 'wr-nitro'),
                            ],
                            'required' => [
                                'footer_customize_color = 0',
                                'dependency_failed_action' => 'disable',
                            ],
                        ],
                        'footer_bot_heading' => [
                            'label' => esc_html__('Footer Bottom', 'wr-nitro'),
                            'type' => 'WR_Nitro_Customize_Control_Heading',
                            'section' => 'color_footer'
                        ],
                        'footer_bot_color' => [
                            'section' => 'color_footer',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'text' => esc_html__('Text', 'wr-nitro'),
                                'bg' => esc_html__('Background Color', 'wr-nitro'),
                            ],
                            'required' => [
                                'footer_customize_color = 0',
                                'dependency_failed_action' => 'disable',
                            ],
                        ],
                        'footer_bot_link_color' => [
                            'section' => 'color_footer',
                            'type' => 'WR_Nitro_Customize_Control_Colors',
                            'choices' => [
                                'normal' => esc_html__('Link', 'wr-nitro'),
                                'hover' => esc_html__('Link Hover', 'wr-nitro'),
                            ],
                            'required' => [
                                'footer_customize_color = 0',
                                'dependency_failed_action' => 'disable',
                            ],
                        ],
                        'move_to_footer' => [
                            'section' => 'color_footer',
                            'type' => 'WR_Nitro_Customize_Control_HTML',
                            'choices' => [
                                '1' => '<h3 class="btn-move-section"><a href="#" class="move-to-section button" data-section="footer">' . esc_html__('Customize Footer', 'wr-nitro') . '</a></h3>',
                            ],
                        ],
                    ],
                ],
            ]
        ];
    }
}

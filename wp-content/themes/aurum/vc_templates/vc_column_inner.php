<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column_Inner
 */
$el_class = $width = $css = $offset = '';
$output = $bg_position = '';
$atts = vc_map_get_attributes($this->getShortcode(), $atts);
extract($atts);

$width = wpb_translateColumnWidthToSpan($width);
$width = vc_column_offset_class_merge($offset, $width);

$css_classes = [
    $this->getExtraClass($el_class),
    'wpb_column',
    'vc_column_container',
    $width,
];

if (vc_shortcode_custom_css_has_property($css, ['border', 'background'])) {
    $css_classes[] = 'vc_col-has-fill';
}

$wrapper_attributes = [];

$css_class = preg_replace('/\s+/', ' ', apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode(' ', array_filter($css_classes)), $this->settings['base'], $atts));
$wrapper_attributes[] = 'class="' . esc_attr(trim($css_class)) . '"';

if ('left_top' != $background_position) {
    $bg_position = 'style="background-position: ' . esc_attr($background_position) . '!important"';
}

$output .= '<div ' . implode(' ', $wrapper_attributes) . '>';
$output .= '<div class="vc_column-inner ' . esc_attr(trim(vc_shortcode_custom_css_class($css))) . '" ' . $bg_position . '>';
$output .= '<div class="wpb_wrapper">';
$output .= wpb_js_remove_wpautop($content);
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';

echo apply_filters('wr_vc_column_inner', $output);

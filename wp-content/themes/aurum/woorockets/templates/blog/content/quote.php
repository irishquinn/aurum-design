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

$wr_output = '';

// Get content quote
$wr_content = get_post_meta(get_the_ID(), 'format_quote_content', true);
$wr_author = get_post_meta(get_the_ID(), 'format_quote_author', true);

if (!empty($wr_content)) {
    $wr_output .= '<h4 class="entry-title" ' . WR_Nitro_Helper::schema_metadata(['context' => 'entry_title', 'echo' => false]) . '><a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></h4>';
    $wr_output .= '<div class="quote-content mgt10 pr">"' . esc_html($wr_content) . '"</div>';
    $wr_output .= '<div class="quote-author mgt10 fwb" ' . WR_Nitro_Helper::schema_metadata(['context' => 'author', 'echo' => false]) . '><span class="mgr10">-</span>' . esc_html($wr_author) . '</div>';

    echo $wr_output;
} else {
    WR_Nitro_Render::get_template('blog/content/standard');
}

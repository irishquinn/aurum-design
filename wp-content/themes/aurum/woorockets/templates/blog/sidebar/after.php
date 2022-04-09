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

// Get theme options
$wr_nitro_options = WR_Nitro::get_options();

if (!empty($wr_nitro_options['sidebar_after_blog_content']) && is_active_sidebar($wr_nitro_options['sidebar_after_blog_content'])) {
    echo '<div class="mgt30 mgb30 sidebar-after-blog">';
    dynamic_sidebar($wr_nitro_options['sidebar_after_blog_content']);
    echo '</div>';
}

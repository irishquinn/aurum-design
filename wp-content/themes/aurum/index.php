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

get_header(); ?>

	<?php WR_Nitro_Render::get_template('common/page', 'title'); ?>

	<div class="<?php echo ((is_front_page() && is_home() || is_home() || is_archive()) && $wr_nitro_options['blog_full_width'] == true) ? 'archive-full-width' : 'container'; ?>">
		<div class="row">
			<div class="blog fc fcw<?php echo ($wr_nitro_options['blog_layout'] == 'right-sidebar') ? ' right-sidebar menu-on-right' : ''; ?>">

				<?php
                    // Set page config
                    $wr_args = [
                        'path' => 'woorockets/templates',
                        'layout' => $wr_nitro_options['blog_layout'],
                        'content_layout' => $wr_nitro_options['blog_style'],
                        'sidebar' => $wr_nitro_options['blog_sidebar'],
                        'sidebar_class' => 'primary-sidebar',
                        'content_class' => 'main-content',
                    ];

                    WR_Nitro_Render::render_template('blog', $wr_args);
                ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>

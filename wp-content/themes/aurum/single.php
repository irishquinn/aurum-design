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

global $post;

// Get theme options
$wr_nitro_options = WR_Nitro::get_options();

// Get post title style
$wr_title = $wr_nitro_options['blog_single_title_style'];

// Single post layout
$wr_layout = $wr_nitro_options['blog_single_layout'];

get_header(); ?>

	<?php
        if (!('1' == $wr_title && ('left-sidebar' == $wr_layout || 'right-sidebar' == $wr_layout))) :
            WR_Nitro_Render::get_template('blog/title/style', $wr_title);
        endif;
    ?>

	<div class="container">
		<div class="row">
			<div class="blog-single fc fcw <?php echo ($wr_layout == 'right-sidebar') ? 'menu-on-right' : '' ?>">
				<?php
                    // Set page config
                    $wr_args = [
                        'path' => 'woorockets/templates',
                        'layout' => $wr_nitro_options['blog_single_layout'],
                        'content_layout' => 'single',
                        'sidebar' => $wr_nitro_options['blog_single_sidebar'],
                        'sidebar_class' => 'primary-sidebar',
                        'content_class' => 'main-content',
                    ];

                    WR_Nitro_Render::render_template('blog', $wr_args);
                ?>

			</div><!-- .blog-single -->
		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer(); ?>

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

$wr_classes = ['b-classic mgt30 mgb30'];

// Get style settings
$wr_color = $wr_nitro_options['blog_color'];
$wr_style = $wr_nitro_options['blog_style'];

if (!empty($wr_color)) {
    $wr_classes[] = $wr_color;
}
if ('simple' == $wr_style) {
    $wr_classes[] = 'small';
} else {
    $wr_classes[] = 'large';
}
?>

<div class="<?php echo esc_attr(WR_Nitro_Render::$content_class) . (is_customize_preview() ? ' customizable customize-section-blog_list' : ''); ?>">

	<?php WR_Nitro_Render::get_template('blog/sidebar/before'); ?>

	<div class="<?php echo esc_attr(implode(' ', $wr_classes)); ?>">

		<?php while (have_posts()) : the_post(); ?>

			<?php
                // Get post format
                $wr_format = get_post_format();
                if ((false === $wr_format) || 'video' == $wr_format) {
                    $wr_format = 'standard';
                }
            ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('mgb30 oh pr'); ?> <?php WR_Nitro_Helper::schema_metadata(['context' => 'entry']); ?>>

				<?php WR_Nitro_Render::get_template('blog/format/' . $wr_format . ''); ?>

				<div class="entry-content oh <?php if ('boxed' == $wr_color) {
                echo esc_attr('pd20 overlay_bg');
            } ?>">

					<?php echo WR_Nitro_Helper::get_cat(); ?>

					<?php if ($wr_format == 'quote') {
                WR_Nitro_Render::get_template('blog/content/quote');
            } else {
                WR_Nitro_Render::get_template('blog/content/standard');
            } ?>

				</div><!-- entry-content -->

			</article><!-- #post-ID -->

		<?php endwhile; ?>

	</div><!-- .b-classic -->

	<?php WR_Nitro_Helper::pagination(); ?>

	<?php WR_Nitro_Render::get_template('blog/sidebar/after'); ?>

</div>

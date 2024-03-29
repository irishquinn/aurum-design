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

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $post, $product;

$wr_nitro_options = WR_Nitro::get_options();

// Get offset width
$offset = $wr_nitro_options['wr_layout_offset'];

$columns = apply_filters('woocommerce_product_thumbnails_columns', 4);
$post_thumbnail_id = get_post_thumbnail_id($post->ID);
$full_size_image = wp_get_attachment_image_src($post_thumbnail_id, 'full');
$image_title = get_post_field('post_excerpt', $post_thumbnail_id);
$placeholder = has_post_thumbnail() ? 'with-images' : 'without-images';
$wrapper_classes = apply_filters('woocommerce_single_product_image_gallery_classes', [
    'woocommerce-product-gallery',
    'woocommerce-product-gallery--' . $placeholder,
    'woocommerce-product-gallery--columns-' . absint($columns),
    'images',
]);
?>
<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>" data-columns="<?php echo esc_attr($columns); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<div class="woocommerce-product-gallery__wrapper">
		<?php
        $attributes = [
            'title' => $image_title,
            'data-src' => $full_size_image[0],
            'data-large_image' => $full_size_image[0],
            'data-large_image_width' => $full_size_image[1],
            'data-large_image_height' => $full_size_image[2],
        ];

        if (has_post_thumbnail()) {
            $html = '<div data-thumb="' . get_the_post_thumbnail_url($post->ID, 'shop_thumbnail') . '" data-type="image-gallery-highlights" class="woocommerce-product-gallery__image"><a href="' . esc_url($full_size_image[0]) . '">';
            $html .= get_the_post_thumbnail($post->ID, 'shop_single', $attributes);
            $html .= '</a></div>';
        } else {
            $html = '<div class="woocommerce-product-gallery__image--placeholder">';
            $html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src()), esc_html__('Awaiting product image', 'woocommerce'));
            $html .= '</div>';
        }

        echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, get_post_thumbnail_id($post->ID));

        do_action('woocommerce_product_thumbnails');
        ?>
	</div>
</div>
<script>
	(function($) {
		"use strict";

		$( document ).ready( function() {
			var adminbarHeight = $( '#wpadminbar' ).length ? $( '#wpadminbar' ).height() : 0,
			    offset   = <?php echo esc_js($offset); ?>,
			    content  = $( '.p-single-info' ).outerHeight();

			setTimeout( function() {
				var height = ( $( window ).height() - $( '.header-outer' ).height() - adminbarHeight );
				if ( height >= content + 20 ) {
					$( '.p-single-top, .woocommerce-product-gallery__image a' ).css( 'height', ( height - offset * 2 ) );
				} else {
					$( '.p-single-top, .woocommerce-product-gallery__image a' ).css( 'height', ( content + 30 ) );
				}
			}, 100);

			if ( ! $.WR.product_image_style_4_initialized ) {
				$( window ).on( 'resize', function() {
					var height   = ( $( window ).height() - $( '.header-outer' ).height() - adminbarHeight ),
						content  = $( '.p-single-info' ).outerHeight();
					if ( window.innerHeight >= 730 && height >= content + 20 ) {
						$( '.p-single-top, .woocommerce-product-gallery__image a' ).css( 'height', height - offset * 2 );
					} else {
						$( '.p-single-top, .woocommerce-product-gallery__image a' ).css( 'height', ( content + 30 ) );
					}
				});

				$.WR.product_image_style_4_initialized = true;
			}

			$.WR.Lightbox();
			$.WR.Carousel();
		} );
	})(jQuery);
</script>
<?php
    // Embed video to product thumbnail
    $video_source = get_post_meta($post->ID, 'wc_product_video', true);
    $video_link = get_post_meta($post->ID, 'wc_product_video_url', true);
    $video_file = get_post_meta($post->ID, 'wc_product_video_file', true);

    if ($video_source == 'url' && !empty($video_link)) {
        echo '<div class="p-video pa">';
        echo '<a class="p-video-link db" href="' . esc_url($video_link) . '"><i class="fa fa-play"></i></a>';
        echo '</div>';
    } elseif (!empty($video_file)) {
        echo '<div class="p-video pa">';
        echo '<a class="p-video-file db" href="#wr-p-video"><i class="fa fa-play"></i></a>';
        echo '<div id="wr-p-video" class="mfp-hide">' . do_shortcode('[video src="' . wp_get_attachment_url($video_file) . '" width="640" height="320"]') . '</div>';
        echo '</div>';
    }
?>
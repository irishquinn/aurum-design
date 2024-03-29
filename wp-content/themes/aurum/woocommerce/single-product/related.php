<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$wr_nitro_options = WR_Nitro::get_options();

if ($related_products && $wr_nitro_options['wc_single_product_related']) :

    // Get product item layout
    $layout = $wr_nitro_options['wc_archive_item_layout'];

    // Get number of product want to show
    $limit = $wr_nitro_options['wc_single_product_show'];

    // Set product class
    if ('5' == $limit) {
        $class = 'columns-5 fl cs-6 cxs-12';
    } else {
        $class = 'cm-' . 12 / $limit . ' cs-6 cxs-12';
    }
?>

	<div class="p-related mgt60 mgb30">
		<h3 class="wc-heading tc tu"><?php esc_html_e('Related Products', 'wr-nitro'); ?></h3>
		<div class="products grid <?php if (count($related_products) > $limit || wp_is_mobile() && count($related_products) > 1) {
    echo 'wr-nitro-carousel ';
} if (wp_is_mobile()) {
    echo 'mobile-layout mobile-grid mobile-grid-layout';
} ?>" data-owl-options='{"items": "<?php echo ( int ) $limit; ?>", "dots": "true", "tablet":"3","mobile":"2"<?php echo($wr_nitro_options['rtl'] ? ',"rtl": "true"' : ''); ?>}'>
			<?php
                foreach ($related_products as $related_product) :

                    $post_object = get_post($related_product->get_id());
                    setup_postdata($GLOBALS['post'] = &$post_object);

                    if (wp_is_mobile()) :

                        wc_get_template('woorockets/content-product/style-mobile.php');

                    else: ?>

						<div <?php post_class($class); ?>>
							<?php wc_get_template('woorockets/content-product/style-' . esc_attr($layout) . '.php'); ?>
						</div>

					<?php
                    endif;

                endforeach;
            ?>
		</div>
	</div>

<?php endif; ?>

<?php wp_reset_postdata(); ?>
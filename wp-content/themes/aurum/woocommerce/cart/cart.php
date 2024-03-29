<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>

<form class="woocommerce-cart woocommerce-cart-form pd30" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
	<?php do_action('woocommerce_before_cart_table'); ?>

	<div class="row">
		<div class="cart-table cm-8 cs-12">
			<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
				<thead>
					<tr>
						<th class="product-thumbnail heading-color">&nbsp;</th>
						<th class="product-name heading-color"><?php esc_html_e('Product', 'wr-nitro'); ?></th>
						<th class="product-price heading-color"><?php esc_html_e('Price', 'wr-nitro'); ?></th>
						<th class="product-quantity heading-color"><?php esc_html_e('Quantity', 'wr-nitro'); ?></th>
						<th class="product-subtotal heading-color"><?php esc_html_e('Total', 'wr-nitro'); ?></th>
						<th class="product-remove heading-color">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<?php do_action('woocommerce_before_cart_contents'); ?>

					<?php
                    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                        $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                        $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                        if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                            $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key); ?>
							<tr class="<?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

								<td class="product-thumbnail">
									<?php
                                        $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                            if (!$product_permalink) {
                                echo($thumbnail);
                            } else {
                                printf('<a href="%s">%s</a>', $_product->get_permalink($cart_item), $thumbnail);
                            } ?>
								</td>

								<td class="product-name heading-color" data-title="<?php esc_html_e('Product', 'wr-nitro'); ?>">
									<?php
                                        if (!$product_permalink) {
                                            echo apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;';
                                        } else {
                                            echo apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key);
                                        }

                            if (WC()->version < '3.3.0') {
                                // Meta data
                                echo WC()->cart->get_item_data($cart_item);
                            } else {
                                // Meta data.
                                echo wc_get_formatted_cart_item_data($cart_item);
                            }

                            // Backorder notification
                            if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                echo '<p class="backorder_notification">' . esc_html__('Available on backorder', 'wr-nitro') . '</p>';
                            } ?>
								</td>

								<td class="product-price" data-title="<?php esc_html_e('Price', 'wr-nitro'); ?>">
									<?php
                                        echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); ?>
								</td>

								<td class="product-quantity" data-title="<?php esc_html_e('Quantity', 'wr-nitro'); ?>">
									<?php
                                        if ($_product->is_sold_individually()) {
                                            $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                        } else {
                                            $product_quantity = woocommerce_quantity_input([
                                                'input_name' => "cart[{$cart_item_key}][qty]",
                                                'input_value' => $cart_item['quantity'],
                                                'max_value' => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
                                                'min_value' => '0',
                                            ], $_product, false);
                                        }

                            echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); ?>
								</td>

								<td class="product-subtotal" data-title="<?php esc_html_e('Total', 'wr-nitro'); ?>">
									<?php
                                        echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?>
								</td>

								<td class="product-remove" data-title="<?php esc_html_e('Remove', 'wr-nitro'); ?>">
									<?php
                                        if (WC()->version < '3.3.0') {
                                            echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                                                '<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-trash-o"></i></a>',
                                                esc_url(WC()->cart->get_remove_url($cart_item_key)),
                                                esc_attr__('Remove this item', 'wr-nitro'),
                                                esc_attr($product_id),
                                                esc_attr($_product->get_sku())
                                            ), $cart_item_key);
                                        } else {
                                            // @codingStandardsIgnoreLine
                                            echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                                                '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                                esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                __('Remove this item', 'woocommerce'),
                                                esc_attr($product_id),
                                                esc_attr($_product->get_sku())
                                            ), $cart_item_key);
                                        } ?>
								</td>

							</tr>
							<?php
                        }
                    }

                    do_action('woocommerce_cart_contents');
                    ?>
					<tr>
						<td colspan="6" class="actions">

							<a class="wc-backward wr-btn wr-btn-outline" href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"><i class="fa fa-angle-double-left"></i> <?php esc_html_e('Continue Shopping', 'wr-nitro') ?></a>

							<input type="submit" class="button" name="update_cart" value="<?php esc_html_e('Update Cart', 'wr-nitro'); ?>" />

							<?php do_action('woocommerce_cart_actions'); ?>

							<?php wp_nonce_field('woocommerce-cart'); ?>
						</td>
					</tr>

					<?php do_action('woocommerce_after_cart_contents'); ?>

				</tbody>
			</table><!-- .shop_table -->

			<?php woocommerce_cross_sell_display(); ?>

		</div><!-- .cm-8 -->

		<div class="cart-collaterals cm-4 cs-12">

			<h3 class="heading-1"><?php esc_html_e('Cart Totals', 'wr-nitro'); ?></h3>
			<?php woocommerce_cart_totals(); ?>

			<?php if (wc_coupons_enabled()) { ?>
				<h3 class="heading-1"><?php esc_html_e('Coupon', 'wr-nitro'); ?></h3>
				<div class="coupon pd20">

					<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_html_e('Coupon code', 'wr-nitro'); ?>" />
					<input type="submit" class="wr-btn wr-btn-outline" name="apply_coupon" value="<?php esc_html_e('Apply Coupon', 'wr-nitro'); ?>" />

					<?php do_action('woocommerce_cart_coupon'); ?>

				</div>
			<?php } ?>

		</div><!-- .cart-collaterals -->

	</div><!-- .row -->

<?php do_action('woocommerce_after_cart_table'); ?>

</form>

<?php do_action('woocommerce_after_cart'); ?>

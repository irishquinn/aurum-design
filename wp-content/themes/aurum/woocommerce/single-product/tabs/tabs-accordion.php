<?php
/**
 * Single Product tabs
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters('woocommerce_product_tabs', []);

if (!empty($tabs)) : ?>

	<div class="woocommerce-tabs accordion-tabs">
		<?php foreach ($tabs as $key => $tab) : ?>
			<div class="<?php echo esc_attr($key); ?>_tab accordion_item overlay_bg">
				<div class="heading pr">
					<a class="body_color fwb db tu hover-primary tab-heading" href="#tab-<?php echo esc_attr($key); ?>"><?php echo apply_filters('woocommerce_product_' . $key . '_tab_title', esc_html($tab['title']), $key); ?></a>
				</div>
				<div class="panel entry-content" id="tab-<?php echo esc_attr($key); ?>">
					<?php call_user_func($tab['callback'], $key, $tab); ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

<?php endif; ?>

<?php
/**
 * Enqueue script for child theme
 */
function wr_nitro_child_enqueue_scripts() {
	wp_enqueue_style( 'wr-nitro-child-style', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'aurum-custom-style', get_stylesheet_directory_uri() . '/aurum-two.css' );
	wp_enqueue_style( 'wr-fonts', get_stylesheet_directory_uri() . '/fonts.css' );
	wp_enqueue_script( 'wr-nitro-script', get_stylesheet_directory_uri() . '/js/scripts.js' );
	wp_enqueue_script( 'wr-nitro-footer-script', get_stylesheet_directory_uri() . '/js/footer-script.js', '' , '', true );
}
add_action( 'wp_enqueue_scripts', 'wr_nitro_child_enqueue_scripts', 1000000000 );

function is_product_subcategory() {
	$cat = get_query_var( 'product_cat' );
	$category = get_term_by( 'slug', $cat, 'product_cat' );
	return ( $category->parent !== 0 );
}

// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

add_action( 'init', function() {
	if ( function_exists( 'visual_composer' ) ) {
		remove_action( 'wp_head', array( visual_composer(), 'addMetaData' ) );
	}
} );

function aurumReumove_remove_version_scripts_styles($src) {
		if (strpos($src, 'ver=')) {
			$src = remove_query_arg('ver', $src);
		}
		return $src;
	}
add_filter('style_loader_src', 'aurumReumove_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'aurumReumove_remove_version_scripts_styles', 9999);


/** change out of stock message
 *
 *
 */
add_filter( 'woocommerce_get_availability', 'wcs_custom_get_availability', 1, 2);
function wcs_custom_get_availability( $availability, $_product ) {

    // Change In Stock Text
    if ( $_product->is_in_stock() ) {
        $availability['availability'] = __('Available!', 'woocommerce');
    }
    // Change Out of Stock Text
    if ( ! $_product->is_in_stock() ) {
        $availability['availability'] = __('On Back Order', 'woocommerce');
    }
    return $availability;
}
/**  remove woocommerce long description from backend
 *
 */
function remove_product_editor() {
	remove_post_type_support( 'product', 'editor' );
  }
add_action( 'init', 'remove_product_editor' );

/**
 * breadcrumbs above product title on signle product page
 *
 */
//Reposition WooCommerce breadcrumb
function wc_remove_breadcrumbs() {
    if ( is_single() ){
        remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_breadcrumb',
10 );
    }
  }
add_action( 'wp', 'wc_remove_breadcrumbs');

remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

add_action( 'woocommerce_shop_loop_item_title', function() {
	if ( function_exists( 'wpex_get_first_term_link' ) && $link = wpex_get_first_term_link( null, 'product_cat' ) ) {
		echo '<div class="shop-entry-category">' . $link . '</div>';
	}
}, 11 );

/**
 * move price below product summary
 *
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );


/** admin css */

add_action('admin_head', 'my_custom_css');

function my_custom_css() {
  echo '<style>
		  table.wp-list-table td.column-thumb img {
			  height: 100px !important;
			  width: 100px !important;
			  max-height: 100px !important;
			  max-width: 100px !important;
			}
		</style>';
  }
  /* end admin css */



 if ( ! is_admin() ) {
	add_action( 'admin_bar_menu', 'show_template' );
	  function show_template() {
		global $template;
		//	print_r( $template );
	  }
  }


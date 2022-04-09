<?php
/**
 * @version    1.0
 * @package    Nitro
 * @author     WooRockets Team <support@woorockets.com>
 * @copyright  Copyright (C) 2014 WooRockets.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.woorockets.com
 * Render page title.
 */

// Get options

$wr_nitro_options = WR_Nitro::get_options();

$wr_classes = $wr_attr = array();

if ( $wr_nitro_options['wr_page_title_fullscreen'] ) {
	$wr_classes[] = ' full';
}
// Get background color and image
if ( ! $wr_nitro_options['use_global'] && ! is_single() ) {
	$wr_image_id = $wr_nitro_options['wr_page_title_bg_image'];
	$wr_image    = isset( $wr_image_id ) ? wp_get_attachment_url( $wr_image_id ) : '';
} else {
	$wr_image = $wr_nitro_options['wr_page_title_bg_image'];
}
// Footer background image.
if ( ! empty( $wr_image ) ) {
	// Parallax
	if ( $wr_nitro_options['wr_page_title_parallax'] ) {
		$wr_attr[] = 'data-0="background-position:0px 0px" data-5000="background-position: 0px -2000px;"';
	}
}
// Get page description
$wr_page_desc = get_post_meta( get_the_ID(), 'wr_page_title_desc', true  );
// Add class to jump to setting section in theme customize
if ( is_customize_preview() ) {
	if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
		$wr_classes[] = ' customizable customize-section-product_list';
	} else {
		$wr_classes[] = ' customizable customize-section-page_title';
	}
}

$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;

$GLOBALS['wp_embed']->post_ID = $taxonomy . '_' . $term_id;
$term = get_queried_object();
$image = get_field('header_image',  $taxonomy . '_' . $term_id);

if ( ! empty( $image )  ) {

?>
<script>
var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
document.write('<style>.parallax-window { height: '+y+'px; background: transparent; }</style>');
</script>
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('header_image', $taxonomy . '_' . $term_id); ?>"></div>
<div id="scroll01" class="down"><a href="#scroll02"><span></span></a></div>
<script>
jQuery(document).ready(function($) {
	$('a[href*=#]').on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
	});
});
</script>
<?php
     } else {

        if ( ! is_product() ) {

?>
<div class="collection-header"></div>
<?php } ?>

</div>
<?php }

    if ( ! empty( $image )  ) {

?>
<div id="scroll02" class="down"></div>
<?php } ?>
<!--
begin sub header -->
<!--
	product category view

-->
<div class="full-row">
<?php
	if ( is_product_category ( array( 'daren-bradley-jewelry', 'aquataine-daren-bradley', 'protea-daren-bradley', 'architecture-daren-bradley', 'aurum-color-spectrum', 'pendants-spectrum-of-color') ) && ! is_product() && ! is_product_category ('bridal-daren-bradley') )  {

		echo '<!-- category db-type-filter -->';
		echo '<div class="cxs-12 cm-3 cs-3 f-left mt20">';
    	echo do_shortcode('[prdctfltr_sc_get_filter preset="db-type-filter"]');
    	echo '</div>';
    }

    if (  is_product_category( ('bridal-daren-bradley') ) && ! is_product() ) {

        echo '<!-- not default category bridal-collection -->';
        echo '<div class="cxs-12 cm-3 cs-3 f-left mt20">';
        echo do_shortcode('[prdctfltr_sc_get_filter preset="bridal-collection"]');
        echo '</div>';

    }

elseif ( ! is_product_category ( array( 'daren-bradley-jewelry', 'aquataine-daren-bradley', 'protea-daren-bradley', 'architecture-daren-bradley', 'aurum-color-spectrum', 'pendants-spectrum-of-color') ) && ! is_product() && ! is_product_category ('bridal-daren-bradley') )   {
        echo '<!--none-->';
		echo '<div class="cxs-12 cm-3 cs-3 f-left mt20">&nbsp;';
        echo '</div>';
    }

    ?>
    <?php

if ( function_exists( 'is_woocommerce' ) &&  ! is_product() ) { ?>
		<!-- col-2 -->
		<div class="cxs-12 cm-6 cs-6 f-left mt20">
            		<h1 class="p-title-img"><?php WR_Nitro_Helper::page_title(); ?></h1>
		<!-- col-3 -->
		</div>
<?php } ?>
        <div class="cxs-10 cm-2 cs-1 f-left mt20 mgb20">
<?php
		if ( function_exists( 'is_woocommerce' ) && ! is_product() && ! is_cart() && !is_checkout() ) {
            dynamic_sidebar( 'search-sidebar' );
        } else {

			}
?>

		</div><!-- end col 3 -->
		</div><!-- end full-row -->
<!--
	end
	product category view
-->
<div class="clear"></div>
<div class="container-two">
    <div class="row">
<div class="cxs-10 cm-10 cs-10 f-left">
<div class="site-title style-1 pr<?php echo esc_attr( implode( ' ', $wr_classes ) ); ?>" <?php echo implode( '', $wr_attr ) ; ?>>
<!-- end subhaeder -->

	<?php
		if ( function_exists( 'is_woocommerce' ) && is_product_category() && ! is_product() ) {
			woocommerce_breadcrumb();
			}
	?>

	<div class="mask"></div>
</div> <!-- .container -->
</div><!-- .site-title -->
</div>
</div>
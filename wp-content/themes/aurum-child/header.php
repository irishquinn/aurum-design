<?php
/**
 * @version    1.0
 * @package    WR_Theme
 * @author     WooRockets Team <support@woorockets.com>
 * @copyright  Copyright (C) 2014 WooRockets.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.woorockets.com
 */

// Get theme options
$wr_nitro_options = WR_Nitro::get_options();

// Get header template
WR_Nitro_Render::get_template( 'common/header' );
?>
<!doctype html>
<html <?php language_attributes(); echo esc_attr( $wr_nitro_options['rtl'] ? 'dir=rtl' : '' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="google-site-verification" content="kX9vWs62M7JbBN7fudj9Iys16F38uzRsoKI-cQBjNJo" />
	<?php wp_head(); ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-19776452-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-19776452-1');
</script>
</head>

<body <?php body_class(); ?> <?php WR_Nitro_Render::body_animation(); ?> <?php WR_Nitro_Helper::schema_metadata( array( 'context' => 'body' ) ); ?>>
	<?php
		// Render page loader
		echo wp_kses_post( WR_Nitro_Render::page_loader() );
	?>
<div class="wrapper-outer">
	<div class="wrapper">
<?php do_action( 'wr_nitro_before_header' );
	if ( $wr_nitro_options['under_construction'] && ! is_super_admin() ) return;
		echo apply_filters( 'wr_header', WR_Nitro_Header_Builder::prop( 'html' ) );
			do_action( 'wr_nitro_after_header' );
				$queried_object = get_queried_object();
				$taxonomy_prefix = $queried_object->taxonomy;
				$termID= $queried_object->term_id;
				$term_id_prefixed = $taxonomy_prefix .'_'. $termID;
				$lightLogo = get_field( 'white_logo_replacement', $term_id_prefixed );
?>
		<div class="site-identity">
			<a href="<?php echo get_site_url(); ?>" class="custom-logo-link" rel="home" itemprop="url">
<?php
	if (  $lightLogo = (! empty ($lightLogo ))  && ( is_woocommerce() ) )   {
			$aurumLogo = get_field( 'white_logo_replacement', $term_id_prefixed );
?>
		<img src="<?php echo $aurumLogo; ?>" class="custom-logo" alt="Aurum Design Jewelry" itemprop="logo">
<?php
		} else {
?>
		<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/Logo-dark.png" class="custom-logo" alt="Aurum Design Jewelry" itemprop="logo">
<?php
		 }
?>
	</a>
</div>

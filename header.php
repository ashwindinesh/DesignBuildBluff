<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site <?php //echo template_name(); ?>">
	<?php 
		$main = array(
			'menu'            => 'Main Menu',
			'container'       => 'div',
			'menu_class'      => 'menu',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
		);
	?>
	
	<?php include INCLUDES_DIR.'/contact.php'; /* The contact information overlay */ ?>

	<header id="masthead" class="site-header cf" role="banner">
		<div id='header-inner' class='cf'>
			<div id='site-logo'>
				<h1>DesignBuildBluff</h1>
				<a href='<?php echo get_site_url(); ?>'><img id='logo-light' src="<?php echo get_stylesheet_directory_uri(); ?>/css/img/logo.png" /></a>
				<a href='<?php echo get_site_url(); ?>'><img id='logo-dark' src="<?php echo get_stylesheet_directory_uri(); ?>/css/img/logo_dark.png" /></a>
			</div>
			<div id='mobile-toggle'></div>
			<div id='main-menu-wrap'>
				<?php wp_nav_menu( $main ); ?>
			</div>
		</div>

	</header><!-- #masthead -->
	
	<div id="main" class="wrapper">
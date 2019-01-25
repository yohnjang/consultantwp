<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container   = get_theme_mod( 'sparkle_container_type' );

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bricklayer.min.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/bricklayer.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<div id="navbar-wrapper" itemscope itemtype="http://schema.org/WebSite">
	<?php get_template_part( 'top_bar' ); ?>
		<nav id="primary" class="container">

			<div id="logo"><a href="#">
				
			<?php if ( ! has_custom_logo() ) { ?>

<?php if ( is_front_page() && is_home() ) : ?>

	<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

<?php else : ?>

	<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

<?php endif; ?>


<?php } else {
the_custom_logo();
} ?><!-- end custom logo -->
		
		
			</div><!-- logo -->

			<button onClick="showMobileMenu()" id="mobileMenuBurgerButton" class="hamburger hamburger--boring" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>

				<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => '',
							'container_id'    => 'primaryMenuWrapper',
							'menu_class'      => '',
							'fallback_cb'     => '',
							'menu_id'         => 'primary_menu',
							'depth'           => 1,
							'walker'          => new sparkle_WP_Bootstrap_Navwalker(),
						)
					); ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->





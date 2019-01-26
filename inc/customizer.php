<?php
/**
 * sparkle Theme Customizer
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'sparkle_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function sparkle_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'sparkle_customize_register' );

if ( ! function_exists( 'sparkle_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function sparkle_theme_customize_register( $wp_customize ) {
		
		$sparkle_includes = array(
			'/sanitation.php',
			'/site-identity.php',
			'/top-bar.php',
			'/hero.php',
			'/cta.php',
			'/featured.php',
			'/newsletter.php',
			'/testimonials.php',
			'/consultation.php',
			'/news.php',
			'/footer.php',
			'/contact.php',
			'/social-media.php',
			'/theme-color.php',
			'/typography.php',
			'/custom-content-switch.php',
			'/blog.php',
		);
		
		foreach ( $sparkle_includes as $file ) {
			$filepath = locate_template( '/inc/settings' . $file );
			if ( ! $filepath ) {
				trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
			}
			require_once $filepath;
		}
	}
} 
add_action( 'customize_register', 'sparkle_theme_customize_register' );

// js preview
if ( ! function_exists( 'sparkle_customize_preview_js' ) ) {
	function sparkle_customize_preview_js() {
		wp_enqueue_script( 'sparkle_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true
		);
	}}
add_action( 'customize_preview_init', 'sparkle_customize_preview_js' );

function sparkle_customize_register( $wp_customize ) {
	//All our sections, settings, and controls will be added here

	//$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'header_image');
	$wp_customize->remove_section( 'background_image');
	$wp_customize->remove_panel( 'nav_menus');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_panel( 'widgets' );
	$wp_customize->remove_section( 'custom_css'); 
}
add_action( 'customize_register', 'sparkle_customize_register', 50 );

function cta_button_css(){
	$sparkle_css_styles = array(
		'/css-styles.php'
	);

	foreach ( $sparkle_css_styles as $file ) {
		$filepath = locate_template( '/inc/settings' . $file );
		if ( ! $filepath ) {
			trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
		}
		require_once $filepath;
	}}
add_action( 'wp_head', 'cta_button_css');
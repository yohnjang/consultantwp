<?php
/**
 * Check and setup theme's default settings
 *
 * @package sparkle
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists ( 'sparkle_setup_theme_default_settings' ) ) {
	function sparkle_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$sparkle_posts_index_style = get_theme_mod( 'sparkle_posts_index_style' );
		if ( '' == $sparkle_posts_index_style ) {
			set_theme_mod( 'sparkle_posts_index_style', 'default' );
		}

		// Sidebar position.
		$sparkle_sidebar_position = get_theme_mod( 'sparkle_sidebar_position' );
		if ( '' == $sparkle_sidebar_position ) {
			set_theme_mod( 'sparkle_sidebar_position', 'right' );
		}

		// Container width.
		$sparkle_container_type = get_theme_mod( 'sparkle_container_type' );
		if ( '' == $sparkle_container_type ) {
			set_theme_mod( 'sparkle_container_type', 'container' );
		}
	}
}
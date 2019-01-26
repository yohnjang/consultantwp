<?php
/**
 * sparkle enqueue scripts
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'sparkle_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function sparkle_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		//$theme_version = $the_theme->get( 'Version' );
		
		//$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/src/theme.css');
		wp_enqueue_style( 'sparkle-styles', get_stylesheet_directory_uri() . '/src/theme.css', array(), $css_version );
		
		//$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/src/theme-min.js');
		//wp_enqueue_script( 'sparkle-scripts', get_template_directory_uri() . '/src/theme-min.js', array(), $js_version, true );

	
		wp_enqueue_script( 'sparkle-scripts', get_template_directory_uri() . '/src/custom.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'sparkle_scripts' ).

add_action( 'wp_enqueue_scripts', 'sparkle_scripts' );

function sparkle_front_page_scripts() {

	if( is_front_page() & ( get_theme_mod('sparkle_featured_section_switch') == 2 || get_theme_mod('sparkle_testimonials_section_switch') == 2 || get_theme_mod('sparkle_news_section_switch') == 2 || get_theme_mod('sparkle_featured_section_switch') == null || get_theme_mod('sparkle_testimonials_section_switch') == null || get_theme_mod('sparkle_news_section_switch') == null ) )
	{
		wp_enqueue_style( 'sparkle-glide-css', get_template_directory_uri() . '/src/glide/glide.core.css', array(), $css_version );
		wp_enqueue_script( 'sparkle-glide-js', get_template_directory_uri() . '/src/glide/glide.js', array(), $js_version, true );
		
		if(get_theme_mod('sparkle_featured_section_switch') == 2 || get_theme_mod('sparkle_featured_section_switch') == null) {
		wp_enqueue_script( 'sparkle-featured-glide-script', get_template_directory_uri() . '/src/glide/featured-glide.js', array(), $js_version, true );
		}

		if(get_theme_mod('sparkle_testimonials_section_switch') == 2 || get_theme_mod('sparkle_testimonials_section_switch') == null) {
			wp_enqueue_script( 'sparkle-testimonials-glide-script', get_template_directory_uri() . '/src/glide/testimonials-glide.js', array(), $js_version, true );
			}

			if(get_theme_mod('sparkle_news_section_switch') == 2 && get_theme_mod('sparkle_news_section_switch') == null ) {
				wp_enqueue_script( 'sparkle-news-glide-script', get_template_directory_uri() . '/src/glide/news-glide.js', array(), $js_version, true );
				}
	}
}
add_action( 'wp_enqueue_scripts', 'sparkle_front_page_scripts' );
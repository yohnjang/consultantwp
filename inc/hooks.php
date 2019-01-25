<?php
/**
 * Custom hooks.
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'sparkle_site_info' ) ) {
  /**
   * Add site info hook to WP hook library.
   */
  function sparkle_site_info() {
    do_action( 'sparkle_site_info' );
  }
}

if ( ! function_exists( 'sparkle_add_site_info' ) ) {
  add_action( 'sparkle_site_info', 'sparkle_add_site_info' );

  /**
   * Add site info content.
   */
  function sparkle_add_site_info() {
    $the_theme = wp_get_theme();
    
    $site_info = sprintf(
      '<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
      esc_url( __( 'http://wordpress.org/', 'sparkle' ) ),
      sprintf(
        /* translators:*/
        esc_html__( 'Proudly powered by %s', 'sparkle' ), 'WordPress'
      ),
      sprintf( // WPCS: XSS ok.
        /* translators:*/
        esc_html__( 'Theme: %1$s by %2$s.', 'sparkle' ), $the_theme->get( 'Name' ), '<a href="' . esc_url( __( 'http://sparkle.com', 'sparkle' ) ) . '">sparkle.com</a>'
      ),
      sprintf( // WPCS: XSS ok.
        /* translators:*/
        esc_html__( 'Version: %1$s', 'sparkle' ), $the_theme->get( 'Version' )
      )
    );

    echo apply_filters( 'sparkle_site_info_content', $site_info ); // WPCS: XSS ok.
  }
}

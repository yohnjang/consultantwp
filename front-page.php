<?php
/**
 * This is the page template for displaying your custom
 *
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

 get_template_part( 'custom/hero' ); 

 get_template_part( 'custom/cta' ); 

 if( get_theme_mod('sparkle_custom_content_switch') == 1 ){
	get_template_part( 'custom/custom-content' ); 
	}

 get_template_part( 'custom/featured' ); 

 if( get_theme_mod('sparkle_custom_content_switch') == 2 ){
	get_template_part( 'custom/custom-content' ); 
	}

 get_template_part( 'custom/newsletter' ); 

 if( get_theme_mod('sparkle_custom_content_switch') == 3 ){
	get_template_part( 'custom/custom-content' ); 
	}

 get_template_part( 'custom/testimonials'); 

 if( get_theme_mod('sparkle_custom_content_switch') == 4 ){
	get_template_part( 'custom/custom-content' ); 
	}

 get_template_part( 'custom/consultation' ); 

 if( get_theme_mod('sparkle_custom_content_switch') == 5 ){
	get_template_part( 'custom/custom-content' ); 
	}

 get_template_part( 'custom/news' ); 

 if( get_theme_mod('sparkle_custom_content_switch') == 6 ){
	get_template_part( 'custom/custom-content' ); 
	}

 get_footer(); 


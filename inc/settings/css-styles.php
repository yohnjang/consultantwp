<?php 

	echo '<style type="text/css">';

	if( (get_theme_mod('sparkle_black_white_switch') == 1 ) || (get_theme_mod('sparkle_black_white_switch') == null) ){
		echo '#testimonials .testimonials_image, #testimonials_glider .testimonials_image {-webkit-filter: grayscale(100%);
		filter: grayscale(100%);}#featured .featured_image, #news .featured_image, #featured_glider .featured_image, #news_glider .featured_image, #page-wrapper .featured_image,img.wp-post-image, article img, figure, img, #secondary img {-webkit-filter: grayscale(100%);filter: grayscale(100%);}';
	}

	if( (get_theme_mod('sparkle_quote_graphic_switch') == null) || (get_theme_mod('sparkle_quote_graphic_switch') == 1) ){
		echo '#testimonials::before, #testimonials_glider::before { 
		opacity: 0.1;
		}';
	}

	get_template_part('inc/settings/css-styles/logo-styles');
	get_template_part('inc/settings/css-styles/hero-position');
	get_template_part('inc/settings/css-styles/hero-opacity');

	// MONOCHROME : 0
	if( get_theme_mod('sparkle_theme_color') == 0 ) {
		get_template_part('inc/settings/colors/monochrome');
	}

	// BLUE : 1
	if( get_theme_mod('sparkle_theme_color') == 1 ) {
		get_template_part('inc/settings/colors/blue');
	}

	// RED : 2
	if( get_theme_mod('sparkle_theme_color') == 2 ) {
		get_template_part('inc/settings/colors/red');
	}

	// YELLOW : 3
	if( get_theme_mod('sparkle_theme_color') == 3 ) {
		get_template_part('inc/settings/colors/yellow');
	}

	// PURPLE : 4
	if( get_theme_mod('sparkle_theme_color') == 4) {
		get_template_part('inc/settings/colors/purple');
	}

	// GREEN : 5
	if( get_theme_mod('sparkle_theme_color') == 5) {
		get_template_part('inc/settings/colors/green');
	}

	// ORANGE : 6
	if( get_theme_mod('sparkle_theme_color') == 6) {
		get_template_part('inc/settings/colors/orange');
	}

	// NULL
	if( get_theme_mod('sparkle_theme_color') == null ) {
		get_template_part('inc/settings/colors/purple');
	}

	echo '</style>';
?>
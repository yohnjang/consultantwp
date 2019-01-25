<?php 
	if( get_theme_mod('sparkle_main_logo_size') != null){
		echo '#logo a img { width: ';
		echo get_theme_mod('sparkle_main_logo_size');
		echo 'px;';
	}
	else { 
		echo '#logo a img { width: 200px;}';
	}

	if( get_theme_mod('sparkle_consultation_logo_size') != null){
		echo '#consultation_logo a img { width: ';
		echo get_theme_mod('sparkle_consultation_logo_size');
		echo 'px;}';
	}
	else { 
		echo '#consultation_logo a img { width: 200px;}';
	}

	if( get_theme_mod('sparkle_footer_logo_size') != null){
		echo '#footer_logo a img { width: ';
		echo get_theme_mod('sparkle_footer_logo_size');
		echo 'px;}';
	}
	else { 
		echo '#footer_logo a img { width: 200px;}';
	}
?>
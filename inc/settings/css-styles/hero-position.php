<?php 
	if( get_theme_mod('sparkle_hero_x_position') != null){
		echo '@media only screen and (min-width: 1024px){ #static_hero { background-position-x: ';
			echo get_theme_mod('sparkle_hero_x_position');
			echo 'px;}}';
	}

	if( get_theme_mod('sparkle_hero_y_position') != null){
		echo '@media only screen and (min-width: 1024px){ #static_hero { background-position-y: ';
			echo get_theme_mod('sparkle_hero_y_position');
			echo 'px;}}';
	}

	if( get_theme_mod('sparkle_hero_mobile_x_position') != null){
		echo '#static_hero { background-position-x: ';
			echo get_theme_mod('sparkle_hero_mobile_x_position');
			echo 'px;}';
	}

	if( get_theme_mod('sparkle_hero_mobile_y_position') != null){
		echo '#static_hero { background-position-y: ';
			echo get_theme_mod('sparkle_hero_mobile_y_position');
			echo 'px;}';
	}

	if( get_theme_mod('sparkle_hero_tablet_x_position') != null){
		echo '{@media only screen and (min-width: 768px){ #static_hero background-position-x: ';
			echo get_theme_mod('sparkle_hero_tablet_x_position');
			echo 'px;}}';
	}

	if( get_theme_mod('sparkle_hero_tablet_y_position') != null){
		echo '@media only screen and (min-width: 768px){ #static_hero { background-position-y: ';
			echo get_theme_mod('sparkle_hero_tablet_y_position');
			echo 'px;}}';
	}
?>
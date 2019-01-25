	<?php 
  
  if( get_theme_mod('sparkle_hero_mobile_opacity') != null){
		echo ' #static_hero:before { opacity: ';
		echo get_theme_mod('sparkle_hero_mobile_opacity');
		echo ';}';
	}

	if( get_theme_mod('sparkle_hero_tablet_opacity') != null){
		echo '@media only screen and (min-width: 768px){
			#static_hero:before { opacity: ';
			echo get_theme_mod('sparkle_hero_tablet_opacity');
			echo ';}}';
	}

	if( get_theme_mod('sparkle_hero_desktop_opacity') != null){
		echo '@media only screen and (min-width: 1024px){
			#static_hero:before { opacity: ';
		echo get_theme_mod('sparkle_hero_desktop_opacity');
		echo ';}}';
	}

  ?>
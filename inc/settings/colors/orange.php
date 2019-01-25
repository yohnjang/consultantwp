<?php

$light_color = '#FFFBF7';
$medium_color = '#FFB27D';
$dark_color = '#2B1F1A';
$super_dark_color = '#080707';

$light_bg_yellow = $light_color;
$medium_bg_yellow = $medium_color;
$dark_bg_yellow = $dark_color;
$super_dark_bg_yellow = $super_dark_color;
$light_text_yellow = $light_color;
$medium_text_yellow = $medium_color;
$dark_text_yellow = $dark_color;
$super_dark_text_yellow = $super_dark_color;
$light_border_color_yellow = $light_color;
$dark_border_color_yellow = $dark_color;

echo '.light-bg,#consultation, #navbar-wrapper { background-color: ' . $light_bg_yellow . ';}';

echo '.medium-bg,#cta, footer#main #footer_newsletter input[type="submit"],#newsletter_section input[type="submit"]{ background: '. $medium_bg_yellow . '; }';

echo '.dark-bg,.btn-secondary:hover,#consultation input[type="submit"],#consultation_form button,#footer_copyright { background-color: '. $dark_bg_yellow . ';}';

echo '.super-dark-bg,#topbar,#cta a, #newsletter_section,footer#main { background-color: '. $super_dark_bg_yellow . ';}';

echo '.light-text, #newsletter_section, #consultation_form button, footer#main p, #footer_copyright, #footer_copyright a, #topbar a,#topbar, #cta,#cta a, footer#main a,footer#main, #newsletter_section h2, #static_hero #typed, #static_hero h1, #static_hero .display-2,#newsletter_form_text_logo a, #static_hero p.heading, #newsletter_section .display-3, footer#main #footer_contact .display-5, footer#main .display-4 { color: '. $light_text_yellow . ';}';

echo '.medium-text { color: '. $medium_text_yellow . ';}';

echo '.dark-text,#consultation_form label,#footer_newsletter,.display-1,.display-2,.display-3,.display-4,.display-5,.display-6,h1,h2,h3,h4,h5,p, nav#primary li a, .entry-title a, nav#primary .display-3 a,#newsletter_section input[type="submit"], footer#main #footer_newsletter input[type="submit"]{ color: '. $dark_text_yellow . ' }';

echo '.super-dark-text, #consultation .display-4.email, #consultation .display-2.phone, footer#main .display-5 { color: '. $super_dark_text_yellow . '; }';

echo '.light-border-color{ border-color: '. $light_border_color_yellow . ';}';

echo '.dark-border-color,.btn-secondary,#consultation input[type="email"],#consultation input[type="text"],#consultation textarea, footer#main #footer_newsletter input[type="text"], footer#main #footer_newsletter input[type="email"], footer#main #footer_newsletter textarea { border-color: '. $dark_border_color_yellow . ';}';

if( get_theme_mod('sparkle_hero_gradient_percent_mobile') != null){
	echo '#static_hero:before { background: linear-gradient(90deg, '. $super_dark_bg_yellow .' 0%, '. $super_dark_bg_yellow .' ';
		echo get_theme_mod('sparkle_hero_gradient_percent_mobile');
		echo '%, rgba(0, 255,255,0) 100%);}';
}
else { 
	echo '#static_hero:before { background: '. $super_dark_bg_yellow .';background: linear-gradient(90deg, '. $super_dark_bg_yellow .' 0%, #263242 50%, rgba(0, 255,255,0) 100%);}';
}

if( get_theme_mod('sparkle_hero_gradient_percent_tablet') != null){
	echo '@media only screen and (min-width:768px){ #static_hero:before {
	background: linear-gradient(90deg, '. $super_dark_bg_yellow .' 0%, '. $super_dark_bg_yellow .' ';
			echo get_theme_mod('sparkle_hero_gradient_percent_tablet');
			echo '%, rgba(0, 255,255,0) 100%);
		}
	}';
}
else { 
	echo '@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_bg_yellow .';background: linear-gradient(90deg, '. $super_dark_bg_yellow .' 0%, '. $super_dark_bg_yellow .' 50%, rgba(0, 255,255,0) 100%);}}';
}

if( get_theme_mod('sparkle_hero_gradient_percent_desktop') != null){
	echo '@media only screen and (min-width:1024px){ #static_hero:after {
		background: linear-gradient(90deg, '. $super_dark_bg_yellow .' 0%, '. $super_dark_bg_yellow .' ';
			echo get_theme_mod('sparkle_hero_gradient_percent_desktop');
			echo '%, rgba(0, 255,255,0) 100%);
		}
	}';
}
else { 
	echo '@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_bg_yellow .';background: linear-gradient(90deg, '. $super_dark_bg_yellow .' 0%, '. $super_dark_bg_yellow .' 20%, rgba(0, 255,255,0) 100%);}}';
}

if( get_theme_mod('sparkle_typography_mode_switch') == 1 ){
	echo '#featured .featured_image, #news .featured_image, #featured_glider .featured_image, #news_glider .featured_image, #testimonials_glider_wrapper .testimonials_image, #testimonials .testimonials_image { display: none;}

	#static_hero { display:flex; align-content: center; align-items: center; justify-content: center;}
	#static_hero .content .text {position: relative;z-index: 101;bottom: 0;padding: 0;}
	#static_hero .content { height: auto;}
	
	#static_hero:before { background:'. $super_dark_bg_yellow .';background: linear-gradient(90deg, '. $super_dark_bg_yellow .' 0%, '. $super_dark_bg_yellow .' 100%, rgba(0, 255,255,0) 100%);opacity:1;}

	@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_bg_yellow .';background: linear-gradient(90deg, '. $super_dark_bg_yellow .' 0%, '. $super_dark_bg_yellow .' 100%, rgba(0, 255,255,0) 100%);opacity:1;}}

	@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_bg_yellow .';background: linear-gradient(90deg, '. $super_dark_bg_yellow .' 0%, '. $super_dark_bg_yellow .' 100%, rgba(0, 255,255,0) 100%);opacity:1;}}
	
	';
}
?>
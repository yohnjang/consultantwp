<?php

$light_color = '#F7F7F7';
$medium_color = '#D7D7D7';
$dark_color = '#333';
$super_dark_color = '#111';

$light_bg_monochrome = $light_color;
$medium_bg_monochrome = $medium_color;
$dark_bg_monochrome = $dark_color;
$super_dark_bg_monochrome = $super_dark_color;
$light_text_monochrome = $light_color;
$medium_text_monochrome = $medium_color;
$dark_text_monochrome = $dark_color;
$super_dark_text_monochrome = $super_dark_color;
$light_border_color_monochrome = $light_color;
$dark_border_color_monochrome = $dark_color;

echo '#testimonials::before, #testimonials_glider::before{ color: ' . $medium_color .';}';
echo '#static_hero { border-top: 1px solid ' . $light_color .';border-bottom: 1px solid ' . $light_color .';}';

echo '.light-bg,#consultation, body,#primaryMenuWrapper.show,.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after, #cta a.cta.button:hover , #newsletter_section button:hover, #footer_newsletter button:hover{ background-color: ' . $light_bg_monochrome . ';}';

echo '.medium-bg,#cta,.btn-secondary:hover, #newsletter_section button, #footer_newsletter button { background: '. $medium_bg_monochrome . '; }';

echo '.dark-bg,.btn-secondary:hover,#consultation input[type="submit"],#consultation_form button,#footer_copyright,#newsletter_section input[type="submit"], footer#main #footer_newsletter input[type="submit"],#cta a, #navbar-wrapper,#primaryMenuWrapper.show,.btn-secondary, #newsletter_section  { background-color: '. $dark_bg_monochrome . '}';

echo '.super-dark-bg,#topbar,footer#main { background-color: '. $super_dark_bg_monochrome . ';}';

echo '.light-text, #consultation_form button, footer#main p, #footer_copyright, #footer_copyright a, #topbar a,#topbar, #cta,#cta a, footer#main a,footer#main, #newsletter_section h2, #static_hero #typed, #static_hero h1, #static_hero .display-2, #static_hero p.heading,#newsletter_section input[type="submit"], footer#main #footer_newsletter input[type="submit"], nav#primary li a, nav#primary .display-3 a, #newsletter_section .newsletter_code p  #footer_newsletter button, #newsletter_section p.excerpt,.entry-content .btn-secondary,.btn-secondary, #newsletter_form_text_logo a:hover, #newsletter_section , #newsletter_section .display-3   { color: '. $light_text_monochrome . ';}';

echo '.medium-text, footer#main #footer_contact .display-5, footer#main .display-4, nav#primary ul#primary_menu li:hover a, #topbar .social a:hover, #footer_contact .social a:hover,ul#footer_menu li a:hover , nav#primary #logo .display-3 a:hover, #footer_text_logo a:hover, #footer_copyright a:hover,#newsletter_form_text_logo a  { color: '. $medium_text_monochrome . ';}';

echo '.dark-text,#consultation_form label,#footer_newsletter,.display-1,.display-2,.display-3,.display-4,.display-5,.display-6,h1,h2,h3,h4,h5,p, .entry-title a, footer#main #footer_newsletter .display-5, footer#main #footer_newsletter p, #cta a.cta.button:hover , #newsletter_section button:hover, #footer_newsletter button:hover, #newsletter_section button{ color: '. $dark_text_monochrome . ' }';

echo '.super-dark-text, #consultation .display-4.email, #consultation .display-2.phone, footer#main .display-5{ color: '. $super_dark_text_monochrome . '; }';

echo '.light-border-color{ border-color: '. $light_border_color_monochrome . ';}';

echo '.dark-border-color,.btn-secondary,#consultation input[type="email"],#consultation input[type="text"],#consultation textarea, footer#main #footer_newsletter input[type="text"], footer#main #footer_newsletter input[type="email"], footer#main #footer_newsletter textarea , #cta a.cta.button:hover , #newsletter_section button:hover, #footer_newsletter button:hover{ border-color: '. $dark_border_color_monochrome . ';}';

if( get_theme_mod('sparkle_hero_gradient_percent_mobile') != null){
	echo '#static_hero:before { background: linear-gradient(90deg, '. $super_dark_bg_monochrome .' 0%, '. $super_dark_bg_monochrome .' ';
		echo get_theme_mod('sparkle_hero_gradient_percent_mobile');
		echo '%, transparent 100%);}';
}
else { 
	echo '#static_hero:before { background: '. $super_dark_bg_monochrome .';background: linear-gradient(90deg, '. $super_dark_bg_monochrome .' 0%, '. $super_dark_bg_monochrome .' 30%, transparent 100%);}';
}

if( get_theme_mod('sparkle_hero_gradient_percent_tablet') != null){
	echo '@media only screen and (min-width:768px){ #static_hero:before {
	background: linear-gradient(90deg, '. $super_dark_bg_monochrome .' 0%, '. $super_dark_bg_monochrome .' ';
			echo get_theme_mod('sparkle_hero_gradient_percent_tablet');
			echo '%, transparent 100%);
		}
	}';
}
else { 
	echo '@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_bg_monochrome .';background: linear-gradient(90deg, '. $super_dark_bg_monochrome .' 0%, '. $super_dark_bg_monochrome .' 30%, transparent 100%);}}';
}

if( get_theme_mod('sparkle_hero_gradient_percent_desktop') != null){
	echo '@media only screen and (min-width:1024px){ #static_hero:after {
		background: linear-gradient(90deg, '. $super_dark_bg_monochrome .' 0%, '. $super_dark_bg_monochrome .' ';
			echo get_theme_mod('sparkle_hero_gradient_percent_desktop');
			echo '%, transparent 100%);
		}
	}';
}
else { 
	echo '@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_bg_monochrome .';background: linear-gradient(90deg, '. $super_dark_bg_monochrome .' 0%, '. $super_dark_bg_monochrome .' 30%, transparent 100%);}}';
}

if( get_theme_mod('sparkle_typography_mode_switch') == 1 ){
	echo '#featured .featured_image, #news .featured_image, #featured_glider .featured_image, #news_glider .featured_image, #testimonials_glider_wrapper .testimonials_image, #testimonials .testimonials_image { display: none;}

	#static_hero { display:flex; align-content: center; align-items: center; justify-content: center;}
	#static_hero .content .text {position: relative;z-index: 101;bottom: 0;padding: 0;}
	#static_hero .content { height: auto;}
	
	#static_hero:before { background:'. $super_dark_bg_monochrome .';background: linear-gradient(90deg, '. $super_dark_bg_monochrome .' 0%, '. $super_dark_bg_monochrome .' 100%, transparent 100%);opacity:1;}

	@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_bg_monochrome .';background: linear-gradient(90deg, '. $super_dark_bg_monochrome .' 0%, '. $super_dark_bg_monochrome .' 100%, transparent 100%);opacity:1;}}

	@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_bg_monochrome .';background: linear-gradient(90deg, '. $super_dark_bg_monochrome .' 0%, '. $super_dark_bg_monochrome .' 100%, transparent 100%);opacity:1;}}';
}
?>
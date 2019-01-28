  <?php

		$light_color = '#F7FCFF';
		$medium_color = '#00acdf';
		$dark_color = '#263242';
		$super_dark_color = '#1d2837';

		$light_bg_blue = $light_color;
		$medium_bg_blue = $medium_color;
		$dark_bg_blue = $dark_color;
		$super_dark_bg_blue = $super_dark_color;
		$light_text_blue = $light_color;
		$medium_text_blue = $medium_color;
		$dark_text_blue = $dark_color;
		$super_dark_text_blue = $super_dark_color;
		$light_border_color_blue = $light_color;
		$dark_border_color_blue = $dark_color;

		echo '#static_hero { border-top: 1px solid ' . $light_color .';border-bottom: 1px solid ' . $light_color .';}';

		echo '.light-bg,#consultation, body,.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after, #cta a.cta.button:hover { background-color: ' . $light_bg_blue . ';}';

		echo '#testimonials::before, #testimonials_glider::before{ color: ' . $medium_color .';}';
		
		echo '.medium-bg,#cta, footer#main #footer_newsletter input[type="submit"],#newsletter_section input[type="submit"], #newsletter_section .btn-primary, #footer_newsletter .btn-primary,.btn-secondary:hover { background: '. $medium_bg_blue . '; }';

		echo '.dark-bg,#consultation input[type="submit"],#consultation_form button,#footer_copyright, #navbar-wrapper,#primaryMenuWrapper.show ,.btn-secondary { background-color: '. $dark_bg_blue . ';}';

		echo '.super-dark-bg,#topbar,#cta a, #newsletter_section,footer#main { background-color: '. $super_dark_bg_blue . ';}';

		echo '.light-text, #newsletter_section, #consultation_form button, footer#main p, #footer_copyright, #footer_copyright a, #topbar a,#topbar, #cta,#cta a, footer#main a,footer#main,  #newsletter_section h2, #static_hero #typed, #static_hero h1, #static_hero .display-2,#newsletter_form_text_logo a, #static_hero p.heading, #newsletter_section .display-3, nav#primary .display-3 a, nav#primary li a, #newsletter_section .newsletter_code p { color: '. $light_text_blue . ';}';

		echo '.medium-text, nav#primary ul#primary_menu li:hover a, #topbar .social a:hover, #footer_contact .social a:hover,ul#footer_menu li a:hover , nav#primary #logo .display-3 a:hover, #footer_text_logo a:hover , #footer_copyright a:hover{ color: '. $medium_text_blue . ';}';

		echo '.dark-text,#consultation_form label,#footer_newsletter,.display-1,.display-2,.display-3,.display-4,.display-5,.display-6,h1,h2,h3,h4,h5,p, .entry-title a,#newsletter_section input[type="submit"], footer#main #footer_newsletter input[type="submit"], footer#main #footer_newsletter p, #cta a.cta.button:hover{ color: '. $dark_text_blue . ' }';

		echo '.super-dark-text, #consultation .display-4.email, #consultation .display-2.phone, footer#main #footer_newsletter .display-5{ color: '. $super_dark_text_blue . '; }';

		echo '.light-border-color{ border-color: '. $light_border_color_blue . ';}';

		echo '.dark-border-color,.btn-secondary,#consultation input[type="email"],#consultation input[type="text"],#consultation textarea, footer#main #footer_newsletter input[type="text"], footer#main #footer_newsletter input[type="email"], footer#main #footer_newsletter textarea, #cta a.cta.button:hover { border-color: '. $dark_border_color_blue . ';}';

		if( get_theme_mod('sparkle_hero_gradient_percent_mobile') != null){
			echo '#static_hero:before { background: linear-gradient(90deg, '. $super_dark_bg_blue .' 0%, '. $super_dark_bg_blue .' ';
				echo get_theme_mod('sparkle_hero_gradient_percent_mobile');
				echo '%, transparent 100%);}';
		}
		else { 
			echo '#static_hero:before { background: '. $super_dark_bg_blue .';background: linear-gradient(90deg, '. $super_dark_bg_blue .' 0%, '. $super_dark_bg_blue .' 30%, transparent 100%);}';
		}

		if( get_theme_mod('sparkle_hero_gradient_percent_tablet') != null){
			echo '@media only screen and (min-width:768px){ #static_hero:before {
			background: linear-gradient(90deg, '. $super_dark_bg_blue .' 0%, '. $super_dark_bg_blue .' ';
					echo get_theme_mod('sparkle_hero_gradient_percent_tablet');
					echo '%, transparent 100%);
				}
			}';
		}
		else { 
			echo '@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_bg_blue .';background: linear-gradient(90deg, '. $super_dark_bg_blue .' 0%, '. $super_dark_bg_blue .' 30%, transparent 100%);}}';
		}

		if( get_theme_mod('sparkle_hero_gradient_percent_desktop') != null){
			echo '@media only screen and (min-width:1024px){ #static_hero:after {
				background: linear-gradient(90deg, '. $super_dark_bg_blue .' 0%, '. $super_dark_bg_blue .' ';
					echo get_theme_mod('sparkle_hero_gradient_percent_desktop');
					echo '%, transparent 100%);
				}
			}';
		}
		else { 
			echo '@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_bg_blue .';background: linear-gradient(90deg, '. $super_dark_bg_blue .' 0%, '. $super_dark_bg_blue .' 30%, transparent 100%);}}';
		}

		if( get_theme_mod('sparkle_typography_mode_switch') == 1 ){
			echo '#featured .featured_image, #news .featured_image, #featured_glider .featured_image, #news_glider .featured_image, #testimonials_glider_wrapper .testimonials_image, #testimonials .testimonials_image { display: none;}

			#static_hero { display:flex; align-content: center; align-items: center; justify-content: center;}
			#static_hero .content .text {position: relative;z-index: 101;bottom: 0;padding: 0;}
			#static_hero .content { height: auto;}
			
			#static_hero:before { background:'. $super_dark_bg_blue .';background: linear-gradient(90deg, '. $super_dark_bg_blue .' 0%, '. $super_dark_bg_blue .' 100%, transparent 100%);opacity:1;}

			@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_bg_blue .';background: linear-gradient(90deg, '. $super_dark_bg_blue .' 0%, '. $super_dark_bg_blue .' 100%, transparent 100%);opacity:1;}}

			@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_bg_blue .';background: linear-gradient(90deg, '. $super_dark_bg_blue .' 0%, '. $super_dark_bg_blue .' 100%, transparent 100%);opacity:1;}}
			
			';
		}
  ?>

	<?php if(get_theme_mod('sparkle_top_bar_switch') == 1) {
	echo '<div id="topbar"><div class="container"><div class="contact">';
			if(get_theme_mod('sparkle_phone_number') != null){
			echo '<span class="phone_number"><i class="flont-phone"></i>';
			echo get_theme_mod('sparkle_phone_number');
			echo '</span>';
			}
			if(get_theme_mod('sparkle_address') != null){
				echo '<span class="address d-none d-md-inline-block"><i class="flont-location"></i>';
				echo get_theme_mod('sparkle_address');

				if(get_theme_mod('sparkle_city_state') != null){
					echo ',&nbsp;';
					echo get_theme_mod('sparkle_city_state');
				}
	
				if(get_theme_mod('sparkle_zip_code') != null){
					echo '&nbsp;';
					echo get_theme_mod('sparkle_zip_code');
				}
				echo '</span>';
			}

		  echo '</div><div class="social">';
			if(get_theme_mod('sparkle_facebook') != null){
				echo '<a href="';
				echo get_theme_mod('sparkle_facebook');
				echo '"><i class="flont-facebook"></i></a>';
			}
			if(get_theme_mod('sparkle_twitter') != null){
				echo '<a href="';
				echo get_theme_mod('sparkle_twitter');
				echo '"><i class="flont-twitter"></i></a>';
			}
			if(get_theme_mod('sparkle_linkedin') != null){
				echo '<a href="';
				echo get_theme_mod('sparkle_linkedin');
				echo '"><i class="flont-linkedin"></i></a>';
			}
			if(get_theme_mod('sparkle_instagram') != null){
				echo '<a href="';
				echo get_theme_mod('sparkle_instagram');
				echo '"><i class="flont-instagram"></i></a>';
			}
		echo '</div></div></div>';
		}
		?>
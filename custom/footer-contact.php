<?php 
echo '<div id="footer_contact">';

if ( (get_theme_mod('sparkle_light_logo') != null) && get_theme_mod('sparkle_footer_logo_switch') == 1 ) { 
			echo '<div id="footer_logo"><img src="';
				echo get_theme_mod('sparkle_light_logo');
			echo '"></div><!-- #footer_logo -->';
			}
else{
      echo '<div id="footer_text_logo" class="display-3"><a class="heavy navbar-brand" rel="home" href="';
      echo esc_url( home_url( '/' ) );
      echo '" title="';
      echo esc_attr( get_bloginfo( 'name', 'display' ) );
      echo '" itemprop="url">';
      bloginfo( 'name' );
      echo '</a></div><!-- #footer_text_logo -->';

} // end footer logo

      echo '<div class="contact_information">';

				if( get_theme_mod('sparkle_address') != null || get_theme_mod('sparkle_city_state') != null || get_theme_mod('sparkle_zip_code') != null){
          echo '<div class="display-5">
                  <i class="flont-location"></i>
                  <span>Address:</span>
                </div>
                <p class="address">';
                  echo get_theme_mod('sparkle_address');
                echo '</p><!-- address -->';
                echo '<p class="city_state">';
                echo get_theme_mod('sparkle_city_state');
                echo '</p><!-- city_state -->';
                echo '<p class="zip_code">';
                echo get_theme_mod('sparkle_zip_code'); 
                echo '</p><!-- zip_code -->';
        }

			if( get_theme_mod('sparkle_phone_number') != null ){
				echo '<div class="display-5"><i class="flont-phone"></i><span class="ml-1">Call:</span></div>
				<p>';
				echo get_theme_mod('sparkle_phone_number');
				echo '</p>';
			}

      if( get_theme_mod('sparkle_email') != null){
        echo '<div class="display-5"><i class="flont-mail"></i><span class="ml-1">Email:</span></div>
      <p>';
      echo get_theme_mod('sparkle_email');
      echo '</p>';
      }

/*********************************************************************************************************** */

          echo '</div> <!-- .contact-information -->
            <div class="social">';

/************************************************************************************************************** */
    
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

			if(get_theme_mod('sparkle_instagram') != null){
				echo '<a href="';
				echo get_theme_mod('sparkle_instagram');
				echo '"><i class="flont-instagram"></i></a>';
			}

			if(get_theme_mod('sparkle_linkedin') != null){
				echo '<a href="';
				echo get_theme_mod('sparkle_linkedin');
				echo '"><i class="flont-linkedin"></i></a>';
			}

      /***********************************************************************************************/
    echo '	</div><!-- social --> ';
    echo '</div><!-- #footer_contact -->';
    ?>

    
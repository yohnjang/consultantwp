
<div id="newsletter_section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 headline">
    
      <?php 

        if(get_theme_mod('sparkle_newsletter_headline') != null){
          echo '<div class="display-3 heavy">' . get_theme_mod('sparkle_newsletter_headline') . '</div>';
        }
        else {
          echo '<div class="display-3 heavy">Subscribe</div>';
        }
      
        if(get_theme_mod('sparkle_newsletter_excerpt') != null){
          echo '<p class="excerpt">' . get_theme_mod('sparkle_newsletter_excerpt') . '</p>';
        }
        else {
          echo '<p class="excerpt">And get our monthly newsletter, featuring articles designed to optimize the success of your business.</p>';
        }

        echo '<strong>*indicated required</strong>';

      ?>
      <?php 
      if ( get_theme_mod('sparkle_newsletter_logo_switch') == null || get_theme_mod('sparkle_newsletter_logo_sitch') == 1 )
      {
        if ( get_theme_mod('sparkle_light_logo') != null ) { 
        echo '<div id="newsletter_form_logo"><img src="';
          echo get_theme_mod('sparkle_light_logo');
        echo '"></div><!-- #newsletter_form_logo -->';
        }
        else{
          echo '<div id="newsletter_form_text_logo" class="display-3"><a class="heavy navbar-brand" rel="home" href="';
          echo esc_url( home_url( '/' ) );
          echo '" title="';
          echo esc_attr( get_bloginfo( 'name', 'display' ) );
          echo '" itemprop="url">';
          bloginfo( 'name' );
          echo '</a></div><!-- #newsletter_form_text_logo -->';

        } // end #newsletter_form_logo
      }
      else { 
        echo get_theme_mod('sparkle_newsletter_logo_switch');

      } // sparkle light logo turned off
      ?>
      </div><!-- .headline -->
      <div class="col-12 col-md-6 newsletter_code">
        <?php if( get_theme_mod('sparkle_newsletter_code') != null){
          echo do_shortcode(get_theme_mod('sparkle_newsletter_code')); 
        }
        else {
          echo '<div class="highlight">please enter your newsletter code first</div>';
        }
        ?>
      </div><!-- newsletter_code -->
    </div><!-- row -->
  </div><!-- container -->
</div><!-- #newsletter_section -->
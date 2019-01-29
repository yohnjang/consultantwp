<?php 
  echo '<div id="footer_newsletter">';
  if(get_theme_mod('sparkle_newsletter_headline') != null){
    echo '<div class="display-5 heavy">' . get_theme_mod('sparkle_newsletter_headline') . '</div>';
  }
  else {
    echo '<div class="display-5 heavy">Subscribe</div>';
  }

  if(get_theme_mod('sparkle_newsletter_excerpt') != null){
    echo '<p>' . get_theme_mod('sparkle_newsletter_excerpt') . '</p>';
  }
  else {
    echo '<p>And get our monthly newsletter, featuring articles designed to optimize the success of your business.</p>';
  }





  echo '<strong>*indicates required</strong>';
  if( get_theme_mod('sparkle_newsletter_code') != null){
      echo do_shortcode(get_theme_mod('sparkle_newsletter_code')); 
  }
  else {
    echo '<div class="highlight">please enter your newsletter code first</div>';
  }
  echo '</div><!-- #footer_newsletter -->';
?>
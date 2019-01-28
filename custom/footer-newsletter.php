<?php 
  echo '<div id="footer_newsletter">';
  if(get_theme_mod('sparkle_newsletter_headline') != null){
    echo '<div class="display-5">' . get_theme_mod('sparkle_newsletter_headline') . '</div>';
  }
  else {
    echo '<div class="display-5">Never miss a thing. Sign up for our newsletter.</div>';
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
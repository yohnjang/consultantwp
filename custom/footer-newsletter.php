<?php 
  echo '<div id="footer_newsletter">';
  if(get_theme_mod('sparkle_newsletter_headline') != null){
    echo '<div class="display-5 heavy">' . get_theme_mod('sparkle_newsletter_headline') . '</div>';
  }
  else {
    echo '<div class="display-5 heavy">Want to get insider access on <i>primary benefit</i> for your <i>primary audience</i> business?</div>';
  }

  if(get_theme_mod('sparkle_newsletter_excerpt') != null){
    echo '<p>' . get_theme_mod('sparkle_newsletter_excerpt') . '</p>';
  }
  else {
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
<?php 

if ( get_theme_mod('sparkle_footer_nav_headline') == null) {
  echo '<div class="display-4">About Us</div>';
}
else {
  echo '<div class="display-4">';
  echo get_theme_mod('sparkle_footer_nav_headline');
  echo '</div>';
}

        wp_nav_menu(
        array(
          'theme_location'  => 'footer',
          'container_class' => '',
          'container_id'    => 'footerMenuWrapper',
          'menu_class'      => '',
          'fallback_cb'     => '',
          'menu_id'         => 'footer_menu',
          'depth'           => 1,
          'walker'          => new sparkle_WP_Bootstrap_Navwalker(),
        )
        ); 

        ?>
<div id="footer_copyright">
	<div class="container">
    <div class="copyright">
      <?php if(get_theme_mod('footer_copyright_text') != null){
        echo get_theme_mod('footer_copyright');
      }
      else { 
        echo '<span>';
        bloginfo( 'name' );
        echo '</span>';
        echo '&nbsp;&copy;&nbsp;<span class="year"></span>';
      }
      ?> 
    </div><div id="copyright_date"></div>
	</div><!-- container -->
</div><!-- #footer_copyright-->

<?php if(get_theme_mod('sparkle_footer_section_switch') == 1 || get_theme_mod('sparkle_footer_section_switch') == null ){
 echo '
	<footer id="main">
		<div class="container">
			<div class="row">
				<div class="one col-12 col-md-6 order-md-2 col-lg-4 order-lg-3">';
					get_template_part('custom/footer-newsletter');
				echo '</div><!-- ONE -->

		<div class="two col-12 col-md-6 col-lg-4 order-lg-1 order-md-1">';
			get_template_part('custom/footer-contact');
		echo '</div><!-- TWO-->';

    echo '<div class="three col-12 col-lg-4 order-lg-2 d-none d-lg-block">';
    	get_template_part('custom/footer-nav');
		echo '</div><!-- THREE -->
		
			</div><!-- row -->
		</div><!-- container -->
	</footer>';
}
else {
  // else footer columns turned off, display nothing
}
?>
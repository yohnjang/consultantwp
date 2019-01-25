<?php 

echo '<div id="testimonials">
	<div class="container">
		<div class="main_headline">
			<div class="display-2">';
				if( get_theme_mod('sparkle_testimonials_headline_main') != null ){
					echo get_theme_mod('sparkle_testimonials_headline_main');
				}
				else { echo 'Hear What Our Clients Are Saying';} 
			echo '</div><!-- display-2 -->
			<p class="headline">';
				if( get_theme_mod('sparkle_testimonials_excerpt_main') != null ){
					echo get_theme_mod('sparkle_testimonials_excerpt_main');
				}
				else {

				}
		echo '</p>
		</div><!-- main_headline -->


		<div class="row">
			<div class="column#1 col-12">';

				if(get_theme_mod('sparkle_testimonials_image_1') != null){
					echo '<div class="testimonials_image" style="background-image:url(';
					echo get_theme_mod('sparkle_testimonials_image_1');
					echo ');"></div>';
				}
				else{
					echo '<div class="testimonials_image" style="background-image:url(http://placehold.it/400x300);"></div>';
				} 

				if(get_theme_mod('sparkle_testimonials_headline_1') != null){
					echo '<div class="testimonials_headline display-3">';
					echo get_theme_mod('sparkle_testimonials_headline_1');
					echo '</div>';
				}
				else{
					echo '<div class="testimonials_headline display-3">Your testimonials Headline Goes Here</div>';
				}

				if(get_theme_mod('sparkle_testimonials_excerpt_1') != null){
					echo '<p class="testimonials_excerpt">';
					echo get_theme_mod('sparkle_testimonials_excerpt_1');
					echo '</p>';
				}
				else{
					echo '<p class="testimonials_excerpt">Your testimonials Excerpt Goes Here</p>';
				}
				
				if(get_theme_mod('sparkle_testimonials_url_1') != null) { 
					echo '<div class="testimonials_anchor_button"><a href="';
					echo get_theme_mod('sparkle_testimonials_url_1');
					echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a></div>';
				}
			
		
		echo '</div><!-- testimonial #1 -->


		</div><!-- row -->
	</div><!-- container -->
</div><!-- #testimonials -->';


?>
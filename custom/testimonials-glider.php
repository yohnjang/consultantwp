<?php 
echo '<div id="testimonials_glider_wrapper">
		<div class="main_headline">
			<div class="display-2">';
				if( get_theme_mod('sparkle_testimonials_headline_main') != null ){
					echo get_theme_mod('sparkle_testimonials_headline_main');
				}
				else { echo 'Our Testimonials';} 
			echo '</div><!-- display-2 -->
			<p class="headline">';
				if( get_theme_mod('sparkle_testimonials_excerpt_main') != null ){
					echo get_theme_mod('sparkle_testimonials_excerpt_main');
				}
				else {
					
				}
		echo '</p>
		</div><!-- main_headline -->';

		?>

<?php 
		echo '<div id="testimonials_glider">';
		
		echo '<div class="glide-container" style="overflow:hidden;">
				<div class="testimonial-glide">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides">';

	/****************************************************************************************************/
				
	echo '<li class="glide__slide grabbable">';

				if(get_theme_mod('sparkle_testimonials_image_1') != null){
					echo '<div class="testimonials_image" style="background-image:url(';
					echo get_theme_mod('sparkle_testimonials_image_1');
					echo ');"></div>';
				}
				else{
					echo '<div class="testimonials_image" style="background-image:url(';
					echo get_template_directory_uri() . '/src/stock/placeholder-person.jpg';
					echo ');"></div>';
				} 

				if(get_theme_mod('sparkle_testimonials_headline_1') != null){
					echo '<div class="testimonials_headline display-3">';
					echo get_theme_mod('sparkle_testimonials_headline_1');
					echo '</div>';
				}
				else{
					echo '<div class="testimonials_headline display-3">Your Client</div>';
				}

				if(get_theme_mod('sparkle_testimonials_excerpt_1') != null){
					echo '<p class="testimonials_excerpt">"';
					echo get_theme_mod('sparkle_testimonials_excerpt_1');
					echo '"</p>';
				}
				else{
					echo '<p class="testimonials_excerpt">"Fantastic customer service, will definitely recommend to friends and family!"</p>';
				}
			
		echo '</li><!-- testimonials #1 -->';

	/******************************************************************************************************************* */


	if( get_theme_mod('sparkle_testimonials_headline_2') != null && get_theme_mod('sparkle_testimonials_excerpt_2') != null){

		echo '<li class="glide__slide grabbable">';

		if(get_theme_mod('sparkle_testimonials_image_2') != null){
			echo '<div class="testimonials_image" style="background-image:url(';
			echo get_theme_mod('sparkle_testimonials_image_2');
			echo ');"></div>';
		}
		else{
			
		} 
	
		echo '<div class="testimonials_headline display-3">';
		echo get_theme_mod('sparkle_testimonials_headline_2');
		echo '</div>';
	
		echo '<p class="testimonials_excerpt">"';
		echo get_theme_mod('sparkle_testimonials_excerpt_2');
		echo '"</p>';
		
		echo '</li><!-- testimonials #2 -->';
	}

/************************************************************************************************************ */



	if( get_theme_mod('sparkle_testimonials_headline_3') != null && get_theme_mod('sparkle_testimonials_excerpt_3') != null){

		echo '<li class="glide__slide grabbable">';

		if(get_theme_mod('sparkle_testimonials_image_3') != null){
			echo '<div class="testimonials_image" style="background-image:url(';
			echo get_theme_mod('sparkle_testimonials_image_3');
			echo ');"></div>';
		}
		else{
			
		} 
	
		echo '<div class="testimonials_headline display-3">';
		echo get_theme_mod('sparkle_testimonials_headline_3');
		echo '</div>';
	
		echo '<p class="testimonials_excerpt">"';
		echo get_theme_mod('sparkle_testimonials_excerpt_3');
		echo '"</p>';
		
		echo '</li><!-- testimonials #3 -->';
	}
	
/************************************************************************************************************ */


if( get_theme_mod('sparkle_testimonials_headline_4') != null && get_theme_mod('sparkle_testimonials_excerpt_4') != null){

	echo '<li class="glide__slide grabbable">';

	if(get_theme_mod('sparkle_testimonials_image_4') != null){
		echo '<div class="testimonials_image" style="background-image:url(';
		echo get_theme_mod('sparkle_testimonials_image_4');
		echo ');"></div>';
	}
	else{
		
	} 

	echo '<div class="testimonials_headline display-3">';
	echo get_theme_mod('sparkle_testimonials_headline_4');
	echo '</div>';

	echo '<p class="testimonials_excerpt">"';
	echo get_theme_mod('sparkle_testimonials_excerpt_4');
	echo '"</p>';
	
	echo '</li><!-- testimonials #4 -->';
}

/************************************************************************************************************ */



if( get_theme_mod('sparkle_testimonials_headline_5') != null && get_theme_mod('sparkle_testimonials_excerpt_5') != null){

	echo '<li class="glide__slide grabbable">';

	if(get_theme_mod('sparkle_testimonials_image_5') != null){
		echo '<div class="testimonials_image" style="background-image:url(';
		echo get_theme_mod('sparkle_testimonials_image_5');
		echo ');"></div>';
	}
	else{
		
	} 

	echo '<div class="testimonials_headline display-3">';
	echo get_theme_mod('sparkle_testimonials_headline_5');
	echo '</div>';

	echo '<p class="testimonials_excerpt">"';
	echo get_theme_mod('sparkle_testimonials_excerpt_5');
	echo '"</p>';
	
	echo '</li><!-- testimonials #5 -->';
}

/************************************************************************************************************ */



if( get_theme_mod('sparkle_testimonials_headline_6') != null && get_theme_mod('sparkle_testimonials_excerpt_6') != null){

	echo '<li class="glide__slide grabbable">';

	if(get_theme_mod('sparkle_testimonials_image_6') != null){
		echo '<div class="testimonials_image" style="background-image:url(';
		echo get_theme_mod('sparkle_testimonials_image_6');
		echo ');"></div>';
	}
	else{
		
	} 

	echo '<div class="testimonials_headline display-3">';
	echo get_theme_mod('sparkle_testimonials_headline_6');
	echo '</div>';

	echo '<p class="testimonials_excerpt">"';
	echo get_theme_mod('sparkle_testimonials_excerpt_6');
	echo '"</p>';
	
	echo '</li><!-- testimonials #6 -->';
}

/************************************************************************************************************ */

	else { 
		// don't show testimonials #2
	}

echo '
</ul>
</div><!-- glide__track -->
</div><!-- glide -->
</div><!-- glide-container -->
</div><!-- #testimonials_glider-->
</div><!-- #testimonials_glider_wrapper -->';

?>

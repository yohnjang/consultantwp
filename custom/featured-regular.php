<?php 

echo '<div id="featured">
	<div class="container">
		<div class="main_headline">
			<div class="display-2">';
				if( get_theme_mod('sparkle_featured_headline_main') != null ){
					echo get_theme_mod('sparkle_featured_headline_main');
				}
				else { echo 'Do Any Of These Sound Familiar?';} 
			echo '</div><!-- display-2 -->
			<p class="headline">';
				if( get_theme_mod('sparkle_featured_excerpt_main') != null ){
					echo get_theme_mod('sparkle_featured_excerpt_main');
				}
				else echo 'What are the frustrations of your target audience and potential clients? How can your product or service help to fix those frustrations?'; 
		echo '</p>
		</div><!-- main_headline -->


		<div class="row">
			<div class="column#1 col-12 col-lg-4">';

				if(get_theme_mod('sparkle_featured_image_1') != null){
					echo '<div class="featured_image" style="background-image:url(';
					echo get_theme_mod('sparkle_featured_image_1');
					echo ');"></div>';
				}
				else{
					echo '<div class="featured_image" style="background-image:url(http://placehold.it/400x300);"></div>';
				} 

				if(get_theme_mod('sparkle_featured_headline_1') != null){
					echo '<div class="featured_headline display-3">';
					echo get_theme_mod('sparkle_featured_headline_1');
					echo '</div>';
				}
				else{
					echo '<div class="featured_headline display-3">Your Featured Headline Goes Here</div>';
				}

				if(get_theme_mod('sparkle_featured_excerpt_1') != null){
					echo '<p class="featured_excerpt">';
					echo get_theme_mod('sparkle_featured_excerpt_1');
					echo '</p>';
				}
				else{
					echo '<p class="featured_excerpt">Your Featured Excerpt Goes Here</p>';
				}
				
				if(get_theme_mod('sparkle_featured_url_1') != null) { 
					echo '<div class="featured_anchor_button"><a href="';
					echo get_theme_mod('sparkle_featured_url_1');
					echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a></div>';
				}
			
		
		echo '</div><!-- column#1 -->

		<div class="column#2 col-12 col-lg-4">';

				if(get_theme_mod('sparkle_featured_image_2') != null){
					echo '<div class="featured_image" style="background-image:url(';
					echo get_theme_mod('sparkle_featured_image_2');
					echo ');"></div>';
				}
				else{
					echo '<div class="featured_image" style="background-image:url(http://placehold.it/400x300);"></div>';
				} 

				if(get_theme_mod('sparkle_featured_headline_2') != null){
					echo '<div class="featured_headline display-3">';
					echo get_theme_mod('sparkle_featured_headline_2');
					echo '</div>';
				}
				else{
					echo '<div class="featured_headline display-3">Your Featured Headline Goes Here</div>';
				}

				if(get_theme_mod('sparkle_featured_excerpt_2') != null){
					echo '<p class="featured_excerpt">';
					echo get_theme_mod('sparkle_featured_excerpt_2');
					echo '</p>';
				}
				else{
					echo '<p class="featured_excerpt">Your Featured Excerpt Goes Here</p>';
				}
				
				if(get_theme_mod('sparkle_featured_url_2') != null) { 
					echo '<div class="featured_anchor_button"><a href="';
					echo get_theme_mod('sparkle_featured_url_2');
					echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a></div>';
				}
		echo '</div><!-- column#2 -->

	<div class="column#3 col-12 col-lg-4">';

if(get_theme_mod('sparkle_featured_image_3') != null){
	echo '<div class="featured_image" style="background-image:url(';
	echo get_theme_mod('sparkle_featured_image_3');
	echo ');"></div>';
}
else{
	echo '<div class="featured_image" style="background-image:url(http://placehold.it/400x300);"></div>';
} 

if(get_theme_mod('sparkle_featured_headline_3') != null){
	echo '<div class="featured_headline display-3">';
	echo get_theme_mod('sparkle_featured_headline_3');
	echo '</div>';
}
else{
	echo '<div class="featured_headline display-3">Your Featured Headline Goes Here</div>';
}

if(get_theme_mod('sparkle_featured_excerpt_3') != null){
	echo '<p class="featured_excerpt">';
	echo get_theme_mod('sparkle_featured_excerpt_3');
	echo '</p>';
}
else{
	echo '<p class="featured_excerpt">Your Featured Excerpt Goes Here</p>';
}

if(get_theme_mod('sparkle_featured_url_3') != null) { 
	echo '<div class="featured_anchor_button">
					<a href="';
					echo get_theme_mod('sparkle_featured_url_3');
					echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a>
				</div><!-- featured_anchor_button -->';
}
echo '</div><!-- column #3 -->

		</div><!-- row -->
	</div><!-- container -->
</div><!-- #featured -->';


?>
<?php 

echo '<div id="featured">
	<div class="container">
		<div class="main_headline">
			<div class="display-2">';
				if( get_theme_mod('sparkle_featured_headline_main') != null ){
					echo get_theme_mod('sparkle_featured_headline_main');
				}
				else { echo '<i>Primary Audience</i> Insights: Learn to achieve <i>Primary Benefit</i>';} 
			echo '</div><!-- display-2 -->
			<p class="headline">';
				if( get_theme_mod('sparkle_featured_excerpt_main') != null ){
					echo get_theme_mod('sparkle_featured_excerpt_main');
				}
				else echo 'Use this text to give a brief introduction to your thought leadership below. You want to make your prospect curious enough to click one of your articles so that they can get a deeper understanding of your expertise.'; 
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
					echo '<div class="featured_image" style="background-image:url(';
					echo get_template_directory_uri() . '/src/stock/stock1.jpg';
					echo ');"></div>';
				} 

				if(get_theme_mod('sparkle_featured_headline_1') != null){
					echo '<div class="featured_headline display-3">';
					echo get_theme_mod('sparkle_featured_headline_1');
					echo '</div>';
				}
				else{
					echo '<div class="featured_headline display-3">How To Achieve <i>Primary Benefit</i> Without <i>Pain Point</i></div>';
				}

				if(get_theme_mod('sparkle_featured_excerpt_1') != null){
					echo '<p class="featured_excerpt">';
					echo get_theme_mod('sparkle_featured_excerpt_1');
					echo '</p>';
				}
				else{
					echo '<p class="featured_excerpt">Before your prospective client spends 10-15 minutes of their time reading through your article, explain to them how you intend to help them through this article.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultancyaccelerator.com/consultancy-templates/benefit-page">Learn More</a>';
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
					echo '<div class="featured_image" style="background-image:url(';
					echo get_template_directory_uri() . '/src/stock/stock2.jpg';
					echo ');"></div>';
				} 

				if(get_theme_mod('sparkle_featured_headline_2') != null){
					echo '<div class="featured_headline display-3">';
					echo get_theme_mod('sparkle_featured_headline_2');
					echo '</div>';
				}
				else{
					echo '<div class="featured_headline display-3">5 Reasons Your <i>Primary Audience</i> Business May Not Be <i>Primary Benefit</i></div>';
				}

				if(get_theme_mod('sparkle_featured_excerpt_2') != null){
					echo '<p class="featured_excerpt">';
					echo get_theme_mod('sparkle_featured_excerpt_2');
					echo '</p>';
				}
				else{
					echo '<p class="featured_excerpt">Before your prospective client spends 10-15 minutes of their time reading through your article, explain to them how you intend to help them through this article.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultancyaccelerator.com/consultancy-templates/benefit-page">Learn More</a>';
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
	echo '<div class="featured_image" style="background-image:url(';
	echo get_template_directory_uri() . '/src/stock/stock3.jpg';
	echo ');"></div>';
} 

if(get_theme_mod('sparkle_featured_headline_3') != null){
	echo '<div class="featured_headline display-3">';
	echo get_theme_mod('sparkle_featured_headline_3');
	echo '</div>';
}
else{
	echo '<div class="featured_headline display-3">Is Your <i>Primary Audience</i> Business Making This Critical Mistake?</div>';
}

if(get_theme_mod('sparkle_featured_excerpt_3') != null){
	echo '<p class="featured_excerpt">';
	echo get_theme_mod('sparkle_featured_excerpt_3');
	echo '</p>';
}
else{
	echo '<p class="featured_excerpt">Before your prospective client spends 10-15 minutes of their time reading through your article, explain to them how you intend to help them through this article.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultancyaccelerator.com/consultancy-templates/benefit-page">Learn More</a>';
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
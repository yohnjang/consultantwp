<?php
/**
 * Template Name: Services Page
 *
 * Template for displaying a page with your services
 *
 * @package sparkle
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>


<?php 

echo '<div id="featured">
	<div class="container">
		<div class="main_headline">
			<div class="display-2">';
				if( get_theme_mod('sparkle_featured_headline_main') != null ){
					echo get_theme_mod('sparkle_featured_headline_main');
				}
				else { echo 'Services to help <i>primary audience</i> achieve <i>primary benefit</i>';} 
			echo '</div><!-- display-2 -->
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
					echo '<div class="featured_headline display-3"><i>Service 1</i></div>';
				}

				if(get_theme_mod('sparkle_featured_excerpt_1') != null){
					echo '<p class="featured_excerpt">';
					echo get_theme_mod('sparkle_featured_excerpt_1');
					echo '</p>';
				}
				else{
					echo '<p class="featured_excerpt">Are you <i>qualifying question that makes them a good fit for this service</i>? <i>Service 1</i> will help you <i>achieve benefit your client will achieve as a result of Service 1</i>.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultantwp.com/consultancy-templates/services-template">Learn More</a>';
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
					echo '<div class="featured_headline display-3"><i>Service 2</i></div>';
				}

				if(get_theme_mod('sparkle_featured_excerpt_2') != null){
					echo '<p class="featured_excerpt">';
					echo get_theme_mod('sparkle_featured_excerpt_2');
					echo '</p>';
				}
				else{
					echo '<p class="featured_excerpt">Are you <i>qualifying question that makes them a good fit for this service</i>? <i>Service 1</i> will help you <i>achieve benefit your client will achieve as a result of Service 1</i>.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultantwp.com/consultancy-templates/services-template">Learn More</a>';
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
	echo '<div class="featured_headline display-3"><i>Service 3</i></div>';
}

if(get_theme_mod('sparkle_featured_excerpt_3') != null){
	echo '<p class="featured_excerpt">';
	echo get_theme_mod('sparkle_featured_excerpt_3');
	echo '</p>';
}
else{
	echo '<p class="featured_excerpt">Are you <i>qualifying question that makes them a good fit for this service</i>? <i>Service 1</i> will help you <i>achieve benefit your client will achieve as a result of Service 1</i>.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultantwp.com/consultancy-templates/services-template">Learn More</a>';
}

if(get_theme_mod('sparkle_featured_url_3') != null) { 
	echo '<div class="featured_anchor_button">
					<a href="';
					echo get_theme_mod('sparkle_featured_url_3');
					echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a>
				</div><!-- featured_anchor_button -->';
}
echo '</div><!-- column #3 -->';


/****************************************************************
 *  ROW 2 
 * **************************************************************/

echo '<div class="column#4 col-12 col-lg-4">';

if(get_theme_mod('sparkle_featured_image_4') != null){
  echo '<div class="featured_image" style="background-image:url(';
  echo get_theme_mod('sparkle_featured_image_4');
  echo ');"></div>';
}
else{
  echo '<div class="featured_image" style="background-image:url(';
  echo get_template_directory_uri() . '/src/stock/stock4.jpg';
  echo ');"></div>';
} 

if(get_theme_mod('sparkle_featured_headline_4') != null){
  echo '<div class="featured_headline display-3">';
  echo get_theme_mod('sparkle_featured_headline_4');
  echo '</div>';
}
else{
  echo '<div class="featured_headline display-3"><i>Service 4</i></div>';
}

if(get_theme_mod('sparkle_featured_excerpt_4') != null){
  echo '<p class="featured_excerpt">';
  echo get_theme_mod('sparkle_featured_excerpt_1');
  echo '</p>';
}
else{
  echo '<p class="featured_excerpt">Are you <i>qualifying question that makes them a good fit for this service</i>? <i>Service 1</i> will help you <i>achieve benefit your client will achieve as a result of Service 1</i>.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultantwp.com/consultancy-templates/services-template">Learn More</a>';
}

if(get_theme_mod('sparkle_featured_url_4') != null) { 
  echo '<div class="featured_anchor_button"><a href="';
  echo get_theme_mod('sparkle_featured_url_4');
  echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a></div>';
}

echo '</div><!-- column#4 -->

<div class="column#5 col-12 col-lg-4">';

if(get_theme_mod('sparkle_featured_image_5') != null){
  echo '<div class="featured_image" style="background-image:url(';
  echo get_theme_mod('sparkle_featured_image_5');
  echo ');"></div>';
}
else{
  echo '<div class="featured_image" style="background-image:url(';
  echo get_template_directory_uri() . '/src/stock/stock5.jpg';
  echo ');"></div>';
} 

if(get_theme_mod('sparkle_featured_headline_5') != null){
  echo '<div class="featured_headline display-3">';
  echo get_theme_mod('sparkle_featured_headline_5');
  echo '</div>';
}
else{
  echo '<div class="featured_headline display-3"><i>Service 5</i></div>';
}

if(get_theme_mod('sparkle_featured_excerpt_5') != null){
  echo '<p class="featured_excerpt">';
  echo get_theme_mod('sparkle_featured_excerpt_5');
  echo '</p>';
}
else{
  echo '<p class="featured_excerpt">Are you <i>qualifying question that makes them a good fit for this service</i>? <i>Service 1</i> will help you <i>achieve benefit your client will achieve as a result of Service 1</i>.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultantwp.com/consultancy-templates/services-template">Learn More</a>';
}

if(get_theme_mod('sparkle_featured_url_5') != null) { 
  echo '<div class="featured_anchor_button"><a href="';
  echo get_theme_mod('sparkle_featured_url_5');
  echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a></div>';
}
echo '</div><!-- column#5 -->

<div class="column#6 col-12 col-lg-4">';

if(get_theme_mod('sparkle_featured_image_6') != null){
echo '<div class="featured_image" style="background-image:url(';
echo get_theme_mod('sparkle_featured_image_6');
echo ');"></div>';
}
else{
echo '<div class="featured_image" style="background-image:url(';
echo get_template_directory_uri() . '/src/stock/hero-default.jpg';
echo ');"></div>';
} 

if(get_theme_mod('sparkle_featured_headline_6') != null){
echo '<div class="featured_headline display-6">';
echo get_theme_mod('sparkle_featured_headline_6');
echo '</div>';
}
else{
echo '<div class="featured_headline display-3"><i>Service 6</i></div>';
}

if(get_theme_mod('sparkle_featured_excerpt_6') != null){
echo '<p class="featured_excerpt">';
echo get_theme_mod('sparkle_featured_excerpt_6');
echo '</p>';
}
else{
echo '<p class="featured_excerpt">Are you <i>qualifying question that makes them a good fit for this service</i>? <i>Service 1</i> will help you <i>achieve benefit your client will achieve as a result of Service 1</i>.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultantwp.com/consultancy-templates/services-template">Learn More</a>';
}

if(get_theme_mod('sparkle_featured_url_6') != null) { 
echo '<div class="featured_anchor_button">
  <a href="';
  echo get_theme_mod('sparkle_featured_url_6');
  echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a>
</div><!-- featured_anchor_button -->';
}
echo '</div><!-- column #6 -->';













echo '</div><!-- row -->
	</div><!-- container -->
</div><!-- #featured -->';
?>

<?php get_footer(); ?>
<?php
/**
 * Template Name: Consultation Page
 *
 * Template for displaying a page with your consultation form
 *
 * @package sparkle
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<?php if( get_theme_mod('sparkle_consultation_form_section_switch') == 1 || get_theme_mod('sparkle_consultation_form_section_switch') == null ){
	echo '<div id="consultation">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 headline">';

			if ( has_custom_logo() && get_theme_mod('sparkle_consultation_logo_switch') == 1 ) { 
				echo '<div class="logo top d-md-none">';
					the_custom_logo();
				echo '</div><!-- .consultation logo top -->';
				} 
			else {
				echo '<div class="display-3 logo top d-md-none"><a class="navbar-brand heavy" rel="home" href="';
				echo esc_url( home_url( '/' ) );
				echo '" title="';
				echo esc_attr( get_bloginfo( 'name', 'display' ) );
				echo '" itemprop="url">';
				bloginfo( 'name' );
				echo '</a></div>';
			}

			if(get_theme_mod('sparkle_consultation_headline') != null){
				echo '<div class="display-2">';
				echo get_theme_mod('sparkle_consultation_headline');
				echo '</div><!-- headline -->';
			}
			else{ echo '<div class="display-2 heavy dark-text">Are you in the <i>primary audience</i> industry and looking to achieve <i>primary benefit</i>?</div>';}


			if(get_theme_mod('sparkle_consultation_excerpt') != null){
				echo '<div class="display-2 phone d-none d-md-block"><i class="flaticon-phone"></i>';
				echo get_theme_mod('sparkle_consultation_excerpt');
				echo '</div>';
			}
			else{
echo '<p>
				After your free consultation, you will…
				<ul>
    <li><i>Benefit of what they will learn from a consultation from you #1</i></li>
    <li><i>Benefit of what they will learn from a consultation from you #2</i></li>
		<li><i>Benefit of what they will learn from a consultation from you #3</i></li>
		</ul></p>';


			}
/*
			if(get_theme_mod('sparkle_email') != null){
				echo '<div class="display-4 email d-none d-md-block"><i class="flaticon-at"></i>';
				echo get_theme_mod('sparkle_email');
				echo '</div>';
			}
			else{
			}
*/
			if ( has_custom_logo() && get_theme_mod('sparkle_consultation_logo_switch') == 1 ) { 
				echo '<div class="logo bottom d-none d-md-block">';
					the_custom_logo();
				echo '</div><!-- .consultation logo bottom -->';
				} 
			else {
						echo '<div class="display-3 logo bottom d-none d-md-block"><a class="heavy navbar-brand" rel="home" href="';
						echo esc_url( home_url( '/' ) );
						echo '" title="';
						echo esc_attr( get_bloginfo( 'name', 'display' ) );
						echo '" itemprop="url">';
						bloginfo( 'name' );
						echo '</a></div>';
			}

			echo '</div>
			<div id="consultation_form" class="col-12 col-lg-6">';
			 if(get_theme_mod('sparkle_consultation_form_code') != null){
				 echo do_shortcode(get_theme_mod('sparkle_consultation_form_code')); 
			 }
			 else {
				 echo '<div class="highlight">You need to create a consultation form first</div>';
			 }
			echo '</div>
		</div>
	</div>
</div>';

			}
else { }

?>

<?php get_footer(); ?>

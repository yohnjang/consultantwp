<?php 
if( get_theme_mod('sparkle_cta_switch') == 1 || get_theme_mod('sparkle_cta_switch') == null ){

echo '<div id="cta">
	<div class="container">
		<div class="headline display-4">';			
		if(get_theme_mod('sparkle_cta_headline') != null){ 
			echo get_theme_mod('sparkle_cta_headline');
		 }else { 
			 echo 'Learn more about <i>primary benefit</i> for your business with a free 30-minute confidential consultation.';
		 } 
		echo '</div><!-- headline -->
		<a href="';
		if(get_theme_mod('sparkle_cta_url') != null){
			echo get_theme_mod('sparkle_cta_url');
		}
		else { 
			echo '#';
		}
		echo '" class="cta button">';
		if(get_theme_mod('sparkle_cta_button_text') != null){
			echo get_theme_mod('sparkle_cta_button_text');
		}
		else{
			echo 'Reserve Your Free Consultation';
		}
		echo '</a>
	</div>
</div>';

	}
	else 
	{
	}
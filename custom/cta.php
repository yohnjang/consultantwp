<?php 
if( get_theme_mod('sparkle_cta_switch') == 1 ){

echo '<div id="cta">
	<div class="container">
		<div class="headline display-3">';			
		if(get_theme_mod('sparkle_cta_headline') != null){ 
			echo get_theme_mod('sparkle_cta_headline');
		 }else { 
			 echo 'Act now and get your free consultation today.';
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
			echo 'Get Your Free Consultation';
		}
		echo '</a>
	</div>
</div>';

	}
	else 
	{
	}
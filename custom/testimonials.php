<?php if( get_theme_mod('sparkle_testimonials_section_switch') == 1 ){
	get_template_part( 'custom/testimonials-regular' );
}

elseif( get_theme_mod('sparkle_testimonials_section_switch') == 2 ){
	get_template_part( 'custom/testimonials-glider' );
}

else { 
	// show nothing
}
?>
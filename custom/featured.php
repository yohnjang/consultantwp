<?php if( get_theme_mod('sparkle_featured_section_switch') == null  ||  get_theme_mod('sparkle_featured_section_switch') == 2)  {
	get_template_part( 'custom/featured-glider' );
}

elseif( get_theme_mod('sparkle_featured_section_switch') == 1 ){
	get_template_part( 'custom/featured-regular' );
}

else { 
	// show nothing
}
?>
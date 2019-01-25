
<?php 
	if(get_theme_mod('sparkle_news_section_switch') == 2) {get_template_part('custom/news-glider');}
	elseif(get_theme_mod('sparkle_news_section_switch') == 1 ) { get_template_part('custom/news-regular');}
	else {}
?>


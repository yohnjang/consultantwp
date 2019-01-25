<?php
/**
 * The template for displaying all single posts.
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="wrapper" id="single-wrapper">
<?php if(has_post_thumbnail($post->ID)) : ?>
<div class="featured_image" style="background-image:url('<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>');"></div>
<?php else : ?><?php endif; ?>

<div class="container" id="content" tabindex="-1">

<?php 
	if( get_theme_mod('sparkle_blog_sidebar_switch') == null || get_theme_mod('sparkle_blog_sidebar_switch') == 1 ) {
		get_template_part('custom/single-sidebar');
	} 
	else { 
		get_template_part('custom/single-no-sidebar');
	}
?>
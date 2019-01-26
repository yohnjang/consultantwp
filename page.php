<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="wrapper" id="page-wrapper">
	<?php if(has_post_thumbnail($post->ID)) : ?>
<div class="featured_image" style="background-image:url('<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>');"></div>
<?php else : ?><?php endif; ?>


	<div class="container" id="content" tabindex="-1">
		<div class="row">
			<main class="site-main col" id="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
	</div><!-- .row -->
</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

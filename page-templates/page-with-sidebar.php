<?php
/**
 * Template Name: Page with Sidebar
 *
 * Template for displaying a page with your main sidebar.
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

			<!-- Do the left sidebar check -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main col-md-8" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

<div id="sidebar" class="col-md-3 offset-md-1 widget-area" id="secondary" role="complementary">

		<?php get_template_part( 'sidebar' ); ?>

				</div><!-- col-md-3 -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

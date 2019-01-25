<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('bricklayer');
?>

<?php
$container   = get_theme_mod( 'sparkle_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php sparkle_pagination(); ?>

		<!-- Do the right sidebar check -->
		<?php // get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->


<style>
	.bricklayer { max-width: 1440px;}

	@media (min-width: 600px) {
		.bricklayer-column-sizer {
			width:100%;
		}
	}

		@media screen and (min-width: 1024px) {
		.bricklayer-column-sizer {
			width:50%;
		}
	}

</style>

<script>

// You have to create a `Bricklayer` instance for every Bricklayer container you have.
var bricklayer = new Bricklayer(document.getElementById('main'))

</script>

<?php get_footer(); ?>

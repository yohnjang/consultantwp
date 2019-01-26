<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="wrapper" id="index-wrapper">

	<div class="container" id="content" tabindex="-1">

			<main class="site-main row bricklayer" id="main">

				<?php if ( have_posts() ) : ?>

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
			<?php sparkle_pagination(); ?>

			<!-- The pagination component -->

</div><!-- Container end -->

</div><!-- Wrapper end -->


<?php get_footer(); ?>


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
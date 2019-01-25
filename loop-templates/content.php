<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php sparkle_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="post-thumbnail-wrapper">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</div>

	<div class="entry-content">

		<?php
		the_excerpt();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'sparkle' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php sparkle_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->




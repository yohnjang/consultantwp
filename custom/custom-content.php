<main class="site-main container" id="custom_content">
	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'loop-templates/content', 'page' ); ?>
		<?php endwhile;?>
	</div>
</main><!-- #custom_content -->
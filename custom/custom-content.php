<main class="site-main col" id="custom_content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'page' ); ?>
				<?php endwhile;?>
</main><!-- #custom_content -->
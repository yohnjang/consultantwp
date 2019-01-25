		<?php 
		echo ' <div class="row">

			<div class="col-md-12 content-area" id="primary">

			<main class="site-main" id="main">';

				while ( have_posts() ) : the_post(); 

					get_template_part( 'loop-templates/content', 'single' ); 

						sparkle_post_nav(); 


					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;


 endwhile; // end of the loop. 

		echo '</main><!-- #main -->';

echo '	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->';

get_footer(); ?>


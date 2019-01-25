<?php 
		echo ' <div class="row">

			<main class="col-md-8 content-area site-main" id="main">';

				while ( have_posts() ) : the_post(); 

					get_template_part( 'loop-templates/content', 'single' ); 

						sparkle_post_nav(); 

					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;


 endwhile; // end of the loop. 

		echo '</main><!-- #main -->';
		echo '<div id="sidebar" class="col-md-3 offset-md-1 widget-area" id="secondary" role="complementary">';
	get_template_part( 'sidebar' ); 

	echo '</div><!-- col-md-3 -->';
echo '	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->';

get_footer(); ?>


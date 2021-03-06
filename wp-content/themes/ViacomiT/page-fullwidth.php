<?php
/**
 Template Name: Full-Width Page
 *
 * The Template for Full-Width Pages
 *
 * @package blackandwhite
 */

get_header(); ?>

	<div class="grid grid-pad">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->

<?php get_footer(); ?> 

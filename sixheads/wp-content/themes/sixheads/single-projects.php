<?php
/**
 * The template for displaying all single project posts.
 *
 * @package sixheads
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single-project' ); ?>

			<div class="single-post-nav"><?php sixheads_post_nav(); ?></div>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

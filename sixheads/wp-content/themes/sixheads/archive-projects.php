<?php
/**
 * The template for displaying Projects archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sixheads
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="section-title">Work</h2>
			</header><!-- .page-header -->

			<div class="projects grid">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article class="project-item grid-col span-1 span-2__sm span-3__md">
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'project-thumb' ); ?>
				    </a>
				</article>

			<?php endwhile; ?>

			</div><!-- end projects -->

			<?php sixheads_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

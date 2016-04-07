<?php
/**
 * Template Name: Home
 *
 * This is the template that displays the home page.
 *
 * @package sixheads
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="intro">
				<div class="intro-hero-image">
					<?php
						$imageWide = get_field('home_hero_img_wide');
						$imageNarrow = get_field('home_hero_img_narrow');
					?>

					<picture>
				        <!--[if IE 9]><video style="display: none;"><![endif]-->
				        <source srcset="<?php echo $imageWide['sizes']['large']; ?>, <?php echo $imageWide['sizes']['xxx-large']; ?> 2x" media="(min-width: 850px)">
				        <source srcset="<?php echo $imageWide['sizes']['medium']; ?>, <?php echo $imageWide['sizes']['xx-large']; ?> 2x" media="(min-width: 550px)">
				        <source srcset="<?php echo $imageNarrow['sizes']['small']; ?>, <?php echo $imageNarrow['sizes']['x-large']; ?> x2" media="(min-width: 450px)">
				        <source srcset="<?php echo $imageNarrow['sizes']['tiny']; ?>, <?php echo $imageNarrow['sizes']['medium']; ?> x2" media="(min-width: 300px)">
				        <!--[if IE 9]></video><![endif]-->
				        <img srcset="<?php echo $imageWide['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
				    </picture>
				</div>
				<h1 class="intro-text"><?php the_field('home_introduction'); ?></h1>
			</section>

			<div class="arrow arrow-down">
				<a href="#work">
					<img src="<?php bloginfo('template_directory'); ?>/img/icon-arrow-down.svg" alt="down">
				</a>
			</div>

			<section id="work" class="grid">
				<h2 class="section-title">Work</h2>
				<article class="section-introduction">
					<?php the_field('home_work_intro'); ?>
				</article>

				<div class="projects">
				<?php
				    // WP_Query arguments
				    $args = array (
				        'post_type'              => 'projects',
				        'posts_per_page'         => '12',
				        'meta_value' 			 => 'Yes',
				    );

				    // The Query
				    $projects = new WP_Query( $args );

				    // The Loop
				    while ( $projects->have_posts() ) : $projects->the_post();
				 ?>
					<article class="project-item grid-col span-2 span-2__sm span-3__md span-4__lg">
						<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'project-thumb' ); ?>
					    </a>
					</article>
				<?php endwhile; ?>

				<?php
				    // Restore original Post Data
				    wp_reset_postdata();
				?>
				</div><!-- end of .projects -->
			</section> <!-- end of #work -->

			<div class="arrow arrow-down">
				<a href="#services">
					<img src="<?php bloginfo('template_directory'); ?>/img/icon-arrow-down.svg" alt="down">
				</a>
			</div>

			<section id="services" class="services-wrapper">
				<div class="grid services-wrapper__inner">
					<h2 class="section-title">Services</h2>

					<div class="services-hero-image">
						<picture>
					        <!--[if IE 9]><video style="display: none;"><![endif]-->
					        <source srcset="<?php bloginfo('template_directory'); ?>/img/services-icons.svg" media="(min-width: 650px)">
					        <source srcset="<?php bloginfo('template_directory'); ?>/img/services-icons-mobile.svg" media="(min-width: 300px)">
					        <!--[if IE 9]></video><![endif]-->
					        <img srcset="<?php bloginfo('template_directory'); ?>/img/services-icons-mobile.svg" alt="Services">
					    </picture>
					</div>

					<?php

					// check if the repeater field has rows of data
					if( have_rows('home_service') ): ?>

						<div class="service-grid">

					    <?php while ( have_rows('home_service') ) : the_row(); ?>

							<article class="service grid-col span-1 span-2__sm">
						        <h3 class="service-header">
							        <?php the_sub_field('home_service_heading'); ?>
							    </h3>
						        <?php the_sub_field('service_content'); ?>
							</article>

					    <?php endwhile; ?>

					    </div>

					<?php else :

					    // no rows found

					endif;

					?>
				</div>

				<div class="arrow arrow-down">
					<a href="#about">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon-arrow-down.svg" alt="down">
					</a>
				</div>
			</section> <!-- end of #services -->

			<section id="about" class="grid">
				<div class="about-wrapper">
					<h2 class="section-title">About Us</h2>
					<article class="section-introduction">
						<?php the_field('home_about_intro'); ?>
					</article>

					<?php if( have_rows('home_about_profiles') ): ?>

						<div class="profile-wrapper">

							<?php while( have_rows('home_about_profiles') ): the_row();

								// vars
								$image = get_sub_field('home_profile_image');
								$title = get_sub_field('home_profile_name');
								$content = get_sub_field('home_profile_content');

								?>

								<article class="profile-item grid-col span-1 span-2__sm">
									<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>">
									<h3 class="about-header"><?php echo $title; ?></h3>
								    <?php echo $content; ?>

								</article>

							<?php endwhile; ?>
						</div> <!-- .profile-wrapper -->
					<?php endif; ?>
				</div> <!-- .about-wrapper -->
			</section> <!-- end of #about -->

			<div class="arrow arrow-down">
				<a href="#contact">
					<img src="<?php bloginfo('template_directory'); ?>/img/icon-arrow-down.svg" alt="down">
				</a>
			</div>

			<section id="contact" class="contact-wrapper">
				<div class="grid contact-wrapper__inner">
					<h2 class="section-title">Contact Us</h2>
					<article class="section-introduction"><?php the_field('home_contact_intro'); ?></article>

					<!-- removed form - having issues
					<?php
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
					 ?>
					 -->

				</div> <!-- .contact-wrapper__inner -->

			</section> <!-- end of #contact -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

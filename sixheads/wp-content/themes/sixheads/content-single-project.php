<?php
/**
 * @package sixheads
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content single-project__wrapper">
		<?php

		$image = get_field('hero_image');

		if( !empty($image) ): ?>

			<picture>
		        <!--[if IE 9]><video style="display: none;"><![endif]-->
				<source srcset="<?php echo $image['sizes']['large']; ?>, <?php echo $image['sizes']['xx-large']; ?> 2x" media="(min-width: 801px)">
				<source srcset="<?php echo $image['sizes']['medium']; ?>, <?php echo $image['sizes']['xx-large']; ?> 2x" media="(min-width: 601px)">
				<source srcset="<?php echo $image['sizes']['small']; ?>, <?php echo $image['sizes']['x-large']; ?> 2x" media="(min-width: 471px)">
				<source srcset="<?php echo $image['sizes']['tiny']; ?>, <?php echo $image['sizes']['large']; ?> 2x" media="(min-width: 280px)">
		        <!--[if IE 9]></video><![endif]-->
		        <img srcset="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
		    </picture>

		<?php endif; ?>

		<div class="grid-row project-info">
			<div class="project-header grid-col__text span-1 span-2__md span-3__lg">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="meta-project-categories">
					<?php
					$terms = get_the_terms( $post->ID, 'project_categories' );

					if ( $terms && ! is_wp_error( $terms ) ) :

						$project_links = array();

						foreach ( $terms as $term ) {
							$project_links[] = $term->name;
						}

						$project_categories = join( ", ", $project_links );
					?>

					<p><?php echo $project_categories; ?></p>

					<?php endif; ?>
				</div>
			</div>


			<article class="grid-col__text span-1 span-2__md span-2-3__lg">
				<?php the_content(); ?>
			</article>
		</div>

		<?php

		// check if the flexible content field has rows of data
		if( have_rows('gallery_combinations') ):

		     // loop through the rows of data
		    while ( have_rows('gallery_combinations') ) : the_row();

		        if( get_row_layout() == 'one_up' ): ?>

		        	<?php $one_up_image = get_sub_field('one_up_image'); ?>
                	<div class="grid-col span-1">
                		<picture>
					        <!--[if IE 9]><video style="display: none;"><![endif]-->
							<source srcset="<?php echo $one_up_image['sizes']['large']; ?>, <?php echo $one_up_image['sizes']['xx-large']; ?> 2x" media="(min-width: 801px)">
							<source srcset="<?php echo $one_up_image['sizes']['medium']; ?>, <?php echo $one_up_image['sizes']['xx-large']; ?> 2x" media="(min-width: 601px)">
							<source srcset="<?php echo $one_up_image['sizes']['small']; ?>, <?php echo $one_up_image['sizes']['x-large']; ?> 2x" media="(min-width: 471px)">
							<source srcset="<?php echo $one_up_image['sizes']['tiny']; ?>, <?php echo $one_up_image['sizes']['large']; ?> 2x" media="(min-width: 280px)">
					        <!--[if IE 9]></video><![endif]-->
					        <img srcset="<?php echo $one_up_image['sizes']['large']; ?>" alt="<?php echo $one_up_image['alt']; ?>">
					    </picture>

	                </div>

		        <?php elseif( get_row_layout() == 'two_up' ): ?>

		        	<?php
		        		$two_up_left = get_sub_field('two_up_left');
		        		$two_up_right = get_sub_field('two_up_right');
		        	?>
                	<div class="grid-col span-1 span-2__sm">
						<picture>
					        <!--[if IE 9]><video style="display: none;"><![endif]-->
							<source srcset="<?php echo $two_up_left['sizes']['small']; ?>, <?php echo $two_up_left['sizes']['x-large']; ?> 2x" media="(min-width: 300px)">
					        <!--[if IE 9]></video><![endif]-->
					        <img srcset="<?php echo $two_up_left['sizes']['small']; ?>" alt="<?php echo $two_up_left['alt']; ?>">
					    </picture>
                	</div>

                	<div class="grid-col span-1 span-2__sm">
                		<picture>
					        <!--[if IE 9]><video style="display: none;"><![endif]-->
							<source srcset="<?php echo $two_up_right['sizes']['small']; ?>, <?php echo $two_up_right['sizes']['x-large']; ?> 2x" media="(min-width: 300px)">
					        <!--[if IE 9]></video><![endif]-->
					        <img srcset="<?php echo $two_up_right['sizes']['small']; ?>" alt="<?php echo $two_up_right['alt']; ?>">
					    </picture>
                	</div>

		        <?php elseif( get_row_layout() == 'three_up' ): ?>

		        	<?php
		        		$three_up_left = get_sub_field('three_up_left');
		        		$three_up_middle = get_sub_field('three_up_middle');
		        		$three_up_right = get_sub_field('three_up_right');
		        	?>
		        	<div class="grid-col span-1 span-3__sm">
		        		<picture>
					        <!--[if IE 9]><video style="display: none;"><![endif]-->
							<source srcset="<?php echo $three_up_left['sizes']['small']; ?>, <?php echo $three_up_left['sizes']['x-large']; ?> 2x" media="(min-width: 300px)">
					        <!--[if IE 9]></video><![endif]-->
					        <img srcset="<?php echo $three_up_left['sizes']['small']; ?>" alt="<?php echo $three_up_left['alt']; ?>">
					    </picture>
                	</div>
                	<div class="grid-col span-1 span-3__sm">
                		<picture>
					        <!--[if IE 9]><video style="display: none;"><![endif]-->
							<source srcset="<?php echo $three_up_middle['sizes']['small']; ?>, <?php echo $three_up_middle['sizes']['x-large']; ?> 2x" media="(min-width: 300px)">
					        <!--[if IE 9]></video><![endif]-->
					        <img srcset="<?php echo $three_up_middle['sizes']['small']; ?>" alt="<?php echo $three_up_middle['alt']; ?>">
					    </picture>
                	</div>
                	<div class="grid-col span-1 span-3__sm">
                		<picture>
					        <!--[if IE 9]><video style="display: none;"><![endif]-->
							<source srcset="<?php echo $three_up_right['sizes']['small']; ?>, <?php echo $three_up_right['sizes']['x-large']; ?> 2x" media="(min-width: 300px)">
					        <!--[if IE 9]></video><![endif]-->
					        <img srcset="<?php echo $three_up_right['sizes']['small']; ?>" alt="<?php echo $three_up_right['alt']; ?>">
					    </picture>
                	</div>

		        <?php endif;

		    endwhile;

		else :

		    // no layouts found

		endif;

		?>

		<div class="grid grid-col">
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'sixheads' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

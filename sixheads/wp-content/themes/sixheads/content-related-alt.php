<?php
/**
 * Used in single project posts to show related projects.
 *
 * @package sixheads
 */
?>
<?php if( get_field('add_related_projects') == "Show") : ?>
  <section class="related-projects">
    <article class="related-projects__intro">
      <h3 class="related-projects__title">Related Projects</h3>
    </article>



    <?php if( have_rows('related_project') ): ?>
        <ul class="related-projects__listing">
        <?php while ( have_rows('related_project') ) : the_row(); ?>
            <li class="related-projects__item grid-col span-2">
              <a href="<?php the_sub_field('related_project_link'); ?>">
                <?php
                $image = get_sub_field('related_project_thumbnail');
                $size = 'project-thumb'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
                }
                ?>


              </a>
              <h2 class="related-projects__item--title"><?php the_sub_field('related_project_title'); ?></h2>

            </li>
        <?php endwhile; ?>
        </ul>
    <?php else : ?>

        <p>Add content</p>

    <?php endif; ?>
  </section><!-- .related-projects -->
<?php endif; ?>
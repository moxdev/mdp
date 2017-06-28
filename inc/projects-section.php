<?php
/**
 * Creates the Featured Projects Section for projects page
 *
 *
 * @package MD_Partitions
 */

function md_partitions_projects_section() {

  if ( function_exists( 'get_field' ) ) {
    $feature_header = get_field( 'featured_header' );
    $other_header   = get_field( 'other_projects_header' );
    $other_content  = get_field( 'other_projects_content' );

    if ( $feature_header ): ?>

      <section class="featured-projects-section">
        <h2 class="section-header"><?php echo esc_html( $feature_header ); ?></h2>

        <?php if( have_rows('featured_projects') ): ?>

            <div class="featured-projects-wrapper">

            <?php while( have_rows('featured_projects') ): the_row();

                $img       = get_sub_field('image');
                $link_text = get_sub_field('link_text');

                ?>

                <div class="project-wrapper">

                    <?php if( !empty($img) ) : ?>

                      <img src="<?php echo esc_url( $img['sizes']['product-image'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">

                    <?php endif; ?>

                    <?php if( !empty($link_text) ) : ?>

                      <a href="#"><?php echo esc_html( $link_text ); ?></a>

                    <?php endif; ?>

                </div><!-- project-wrapper -->

            <?php endwhile; ?>

            </div><!-- featured-projects-wrapper -->

        <?php endif; ?>

      </section>

    <?php endif;

    if ( $other_header ): ?>

      <section class="other-projects-section">
        <h2 class="section-header"><?php echo esc_html( $other_header ); ?></h2>

        <?php if ( $other_content): ?>

          <div class="other-projects-wrapper">

            <?php echo $other_content; ?>

          </div><!-- other-projects-wrapper -->

        <?php endif ?>

      </section><!-- other-projects-section -->

    <?php endif;
  }
}
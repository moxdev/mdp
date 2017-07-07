<?php
/**
 * Creates the Certifications Section for about page
 *
 *
 * @package MD_Partitions
 */

function md_partitions_certifications_section() {
  if ( function_exists( 'get_field' ) ) {
    $header = get_field( 'certification_header' );
    $content = get_field( 'certification_content' );

    if ( $header ): ?>

      <section class="certification-section">
        <h2 class="section-header"><?php echo esc_html( $header ); ?></h2>

        <div class="certification-wrapper">

          <?php if( have_rows('certification_image') ): ?>

              <div class="cert-image-wrapper">

              <?php while( have_rows('certification_image') ): the_row();

                   $img = get_sub_field('image');

                  ?>

                  <div class="image-wrapper">

                      <?php if( $img ) : ?>

                        <img src="<?php echo esc_url( $img['sizes']['certification-image'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">

                      <?php endif; ?>

                  </div>

              <?php endwhile; ?>

              </div>

          <?php endif; ?>

          <div class="cert-content-wrapper">

            <?php if ( $content ):

              echo $content;

            endif ?>

          </div><!-- certification-content-wrapper -->
        </div><!-- certification-wrapper -->
      </section>

    <?php endif;
  }
}
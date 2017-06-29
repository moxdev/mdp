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

          <?php if ( $content ):

            echo $content;

          endif ?>

        </div>

      </section>

    <?php endif;
  }
}
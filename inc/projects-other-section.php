<?php
/**
 * Creates the Other Projects Section for projects page
 *
 *
 * @package MD_Partitions
 */

function md_partitions_projects_other_section() {

  if ( function_exists( 'get_field' ) ) {
    $other_header   = get_field( 'other_projects_header' );
    $other_content  = get_field( 'other_projects_content' );

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
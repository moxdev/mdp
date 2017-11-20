<?php
/**
 * Creates the Other Projects Section for projects page
 *
 *
 * @package MD_Partitions
 */

function md_partitions_community_map() {
  if( function_exists( 'get_field' ) ) {
    $lat = get_field('latitude', option);
    $lng = get_field('longitude', option);

    if($lat && $lng) { ?>
      <section class="community-map">
        <?php echo $lat; echo $lng ?>
        <div id="map-canvas">
        </div>
      </section>

      <?php wp_enqueue_script( 'md_partitions-directions', get_template_directory_uri() . '/js/min/directions-map-min.js', array(), null, true );
    }
  }
}
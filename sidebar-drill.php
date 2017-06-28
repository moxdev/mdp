<?php
/**
 * The sidebar containing the Drill Page widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MD_Partitions
 */

?>

<aside id="secondary" class="widget-area drill-page-sidebar" role="complementary">
	<div class="wrapper">

  <?php if ( function_exists( 'get_field' ) ) {

    $top_img    = get_field( 'top_image' );
    $bottom_img = get_field( 'bottom_image' );

    if ($top_img): ?>

      <div class="container-top" style="background-image:url(<?php echo esc_url( $top_img ); ?>)">

        <?php

        $title = get_field( 'top_title' );
        $link  = get_field( 'top_link' ); ?>

        <?php if ( $title ): ?>

          <a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a>

        <?php endif ?>

      </div><!-- container-top -->

    <?php endif;

    if ($bottom_img): ?>

      <div class="container-bottom" style="background-image:url(<?php echo esc_url( $bottom_img ); ?>)">

        <?php

        $title = get_field( 'bottom_title' );
        $link  = get_field( 'bottom_link' ); ?>

        <?php if ( $title ): ?>

          <a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a>

        <?php endif ?>

      </div><!-- container-bottom -->

    <?php endif;

  }  ?>

  </div><!-- wrapper -->
</aside><!-- #secondary -->

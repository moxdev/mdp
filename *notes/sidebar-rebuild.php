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

    if ($top_img):

      $link_text_top = get_sub_field('top_title');
      $page_link_top = get_sub_field('top_link');

      ?>

      <div class="sidebar-highlight">

        <?php if( $page_link_top ): ?>

          <a href="<?php echo esc_url( $page_link_top ); ?>">

        <?php endif;

        if($top_img): ?>

          <img src="<?php echo esc_url( $top_img['sizes']['home-highlight'] ); ?>" alt="<?php echo esc_attr( $top_img['alt'] ); ?>" description="<?php echo esc_attr( $top_img['description'] ); ?>">

        <?php endif;

        if( $link_text_top ): ?>

          <span class="span-wrapper"><span class="span-text"><?php echo esc_html( $link_text_top ); ?></span></span>

        <?php endif;

        if( $page_link_top ): ?>

          </a>

        <?php endif; ?>

      </div><!-- highlight-box -->

    <?php endif;

    if ($bottom_img):

      $link_text_bottom = get_sub_field('bottom_title');
      $page_link_bottom = get_sub_field('bottom_link');

      ?>

      <div class="sidebar-highlight">

        <?php if( $page_link_bottom ): ?>

          <a href="<?php echo esc_url( $page_link_bottom ); ?>">

        <?php endif;

        if($bottom_img): ?>

          <img src="<?php echo esc_url( $bottom_img['sizes']['home-highlight'] ); ?>" alt="<?php echo esc_attr( $bottom_img['alt'] ); ?>" description="<?php echo esc_attr( $bottom_img['description'] ); ?>">

        <?php endif;

        if( $link_text_bottom ): ?>

          <span class="span-wrapper"><span class="span-text"><?php echo esc_html( $link_text_bottom ); ?></span></span>

        <?php endif;

        if( $page_link_bottom ): ?>

          </a>

        <?php endif; ?>

      </div><!-- highlight-box -->

    <?php endif;

  }  ?>

  </div><!-- wrapper -->
</aside><!-- #secondary -->

<?php
/**
 * Custom function that adds acf highlight boxes to front-page.php
 *
 *
 * @package MD_Partitions
 */

function md_partitions_frontpage_highlights() {

	if ( function_exists( 'get_field' ) ) {

	  $add_highlights  = get_field( 'add_frontpage_highlight_boxes' );

	  if ( $add_highlights ): ?>

	    <section class="frontpage-highlight-section">

	      <?php if( have_rows('highlight_boxes') ): ?>

	      	<div class="frontpage-highlight-wrapper">

	        	<?php while( have_rows('highlight_boxes') ): the_row();

	          	$img       = get_sub_field('background_image');
	          	$link_text = get_sub_field('link_text');
	          	$page_link = get_sub_field('page_link');

	            if ( $img ): ?>

	            <div class="highlight-box">

	              <?php if( $page_link ): ?>

	                <a href="<?php echo esc_url( $page_link ); ?>">

	              <?php endif;

	              if($img): ?>

	                <img src="<?php echo esc_url( $img['sizes']['home-highlight'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">

	              <?php endif;

	              if( $link_text ): ?>

	                <span class="span-wrapper"><span class="span-text"><?php echo esc_html( $link_text ); ?></span></span>

	              <?php endif;

	              if( $page_link ): ?>

	                </a>

	              <?php endif; ?>

	            </div><!-- highlight-box -->

            <?php endif;

	          endwhile; ?>

	        </div><!-- frontpage-highlight-wrapper -->

	      <?php endif; ?>

	    </section><!-- frontpage-highlight-section -->

	  <?php endif;
	}
}

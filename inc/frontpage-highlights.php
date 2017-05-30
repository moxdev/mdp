<?php
/**
 * Custom function that adds acf highlight boxes to front-page.php
 *
 *
 * @package MD_Partitions
 */

function md_partitions_frontpage_highlights() {

	if ( function_exists( 'get_field' ) ) {

		$add_highlights  = get_field( 'add__frontpage_highlight_boxes' );

		if ( $add_highlights ): ?>

			<section class="frontpage-highlight-section">
				<div class="frontpage-highlight-wrapper">

					<?php if( have_rows('highlight_boxes') ): ?>

					    <div class="">

					    <?php while( have_rows('highlight_boxes') ): the_row();

									$img       = get_sub_field('background_image');
									$link_text = get_sub_field('link_text');
									$page_link = get_sub_field('page_link');

					        ?>

					        <div class="highlight-box">
					        	<div class="highlight-inner-wrapper">

					        		<?php if( $img ) : ?>

					        			<img src="<?php echo $img['sizes']['frontpage-highlight']; ?>" alt="<?php echo $img['alt']; ?>" description="<?php echo $img['description']; ?>">

					        		<?php endif; ?>

					        		<?php if( $link_text ) : ?>

					        			<span><a href="<?php echo $page_link; ?>"><?php echo esc_html( $link_text ); ?></a></span>

					        		<?php endif; ?>

					        	</div>
					        </div>

					    <?php endwhile; ?>

					    </div>

					<?php endif; ?>

				</div><!-- frontpage-highlight-wrapper -->
			</section>

		<?php endif;
	}
}

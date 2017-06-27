<?php
/**
 * Custom function that adds acf sidebar content for front-page.php
 *
 *
 * @package MD_Partitions
 */

function md_partitions_frontpage_sidebar() {

	if ( function_exists( 'get_field' ) ) {

		$img  = get_field( 'sidebar_image' );
		$text = get_field( 'link_text' );
		$link = get_field( 'page_link' ); ?>

		<aside id="frontpage-secondary" class="widget-area" role="complementary">

			<div class="image-wrapper">
				<img src="<?php echo $img['url']; ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">
			</div>

			<a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $text ); ?></a>

		</aside><!-- #frontpage-secondary -->

		<?php
	}
}


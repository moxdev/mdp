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

		<div class="frontpage-sidebar-wrapper">

			<div class="image-wrapper">
				<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" description="<?php echo $img['description']; ?>">
			</div>

			<div class="link-wrapper">
				<a href="<?php echo esc_html( $link ); ?>"><?php echo esc_html( $text ); ?></a>
			</div>

		</div>

		<?php
	}
}

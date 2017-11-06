<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MD_Partitions
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php if ( function_exists( 'get_field' ) ) {

		   $on_page_title = get_field( 'on_page_title' );

		     if ( $on_page_title ) { ?>

		       <h1 class="entry-title">

		         <?php echo wp_kses(
		           $on_page_title,
		           array(
		             'span' => array(),
		             'em' => array(),
		             'strong' => array()
		           )
		         ); ?>

		       </h1>

		     <?php }else {

		       the_title( '<h1 class="entry-title">', '</h1>' );

		     }
		} ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'md_partitions' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'md_partitions' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->

<?php
/**
 * Template Name: Contact Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MD_Partitions
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php if ( function_exists( 'md_partitions_community_map' ) ) {
			md_partitions_community_map();
		} ?>
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(drill);
get_footer();

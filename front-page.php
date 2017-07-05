<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays the home page..
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MD_Partitions
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'frontpage' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if ( is_page_template('front-page.php') && function_exists( 'md_partitions_frontpage_sidebar' ) ) {
	  md_partitions_frontpage_sidebar();
	} ?>

<?php

get_footer();

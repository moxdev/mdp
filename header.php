<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MD_Partitions
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'md_partitions' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="masthead-wrapper">

			<div class="site-branding">
				<a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo file_get_contents('http://localhost:8888/mdp/wp-content/themes/md_partitions/img/logo.svg'); ?></a>

				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<div class="mobile-menu-wrapper">

				<?php if ( function_exists( 'get_field' ) ) {
						$phone = get_field( 'phone', 'options' );

						if ( $phone ): ?>

							<div class="phone-link">
								<span><a href="tel:<?php echo esc_html( $phone ) ?>">Click-To-Call</a></span>
							</div>

						<?php endif;

				} ?>

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'md_partitions' ); ?></button>
			</div>

			<?php if ( is_page_template( 'front-page.php' ) ) {  ?>

				<nav class="home-desktop-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'home-nav', 'menu_id' => 'home-desktop-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			<?php }else {  ?>

				<nav class="page-desktop-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'page-nav', 'menu_id' => 'page-desktop-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			<?php } ?>

		</div>

		<nav class="mobile-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile-nav', 'menu_id' => 'mobile-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<img src="http://unsplash.it/1500/800/?random">

	<div id="content" class="site-content">

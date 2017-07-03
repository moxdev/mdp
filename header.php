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
				<a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 247.65 98.29"><title>MDP Logo</title><path fill="#99999a" d="M43.12 82.73h1.82l4.75 10.93 4.74-10.93h1.73v13H55V84.27l-5 11.48h-.53l-5-11.48v11.48h-1.35zM61 82.73h4c6.77 0 7 5.55 7 6.5s-.28 6.52-7 6.52h-4zm1.2 11.92h2.5c3.47 0 6.16-1.67 6.16-5.4s-2.7-5.42-6.15-5.42h-2.5zM81.33 82.73h3.75c1.84 0 4.2.72 4.2 3.44 0 2.35-1.88 3.4-3.92 3.4h-2.82v6.18h-1.2zm1.2 5.74h2.77c1.38 0 2.76-.6 2.76-2.3s-1.43-2.34-2.83-2.34h-2.7zM96.08 82.73h1.25l5.48 13h-1.35L100 92.3h-6.9l-1.47 3.45H90.4zm.57 1.32l-3 7.14h6zM106.25 82.73h3.42c1 0 4.64 0 4.64 3.42 0 2.48-1.9 3.16-3.32 3.35l3.8 6.25h-1.4l-3.65-6.18h-2.26v6.18h-1.2zm1.2 5.74H110c2.56 0 3.05-1.42 3.05-2.32s-.5-2.32-3.05-2.32h-2.58zM121.7 83.83h-4.44v-1.1h10.12v1.1h-4.45v11.92h-1.2zM130.95 82.73h1.2v13h-1.2zM140.18 83.83h-4.45v-1.1h10.12v1.1h-4.45v11.92h-1.2zM149.4 82.73h1.22v13h-1.2zM161.65 82.4a6.84 6.84 0 1 1-6.73 6.84 6.52 6.52 0 0 1 6.73-6.84zm0 12.58c3.4 0 5.52-2.5 5.52-5.74s-2.17-5.74-5.52-5.74-5.52 2.5-5.52 5.74 2.1 5.76 5.52 5.76zM172.66 82.73h1.56l7.93 11.4v-11.4h1.2v13h-1.55l-7.93-11.4v11.4h-1.2zM188.9 93.34a3.3 3.3 0 0 0 3 1.64 2.65 2.65 0 0 0 2.92-2.56c0-3.64-6.72-1.5-6.72-6.46 0-2.32 2-3.57 4.18-3.57a4.23 4.23 0 0 1 3.52 1.6l-1 .75a2.92 2.92 0 0 0-2.54-1.3c-1.56 0-2.93.82-2.93 2.48 0 3.92 6.7 1.56 6.7 6.46 0 2.34-1.92 3.65-4 3.65a4.9 4.9 0 0 1-4.22-2zM198.84 94.1h1.3l-1.43 4.18h-1.08zM208.42 82.73h1.2v13h-1.2zM214.76 82.73h1.56l7.93 11.4v-11.4h1.2v13h-1.55L216 84.35v11.4h-1.2zM241.36 93.7a5.66 5.66 0 0 1-4.84 2.38 6.84 6.84 0 0 1 0-13.68 5.42 5.42 0 0 1 4.5 2l-1 .83a4.16 4.16 0 0 0-3.5-1.77c-3.4 0-5.53 2.5-5.53 5.74s2.12 5.8 5.52 5.8a4.7 4.7 0 0 0 3.85-2zM245.76 94.1a.88.88 0 1 1-.88.87.87.87 0 0 1 .88-.88z"/><path fill="none" d="M117.16 52.17l5.05 3.24 2.15-8.57-5.05-3.23-2.14 8.57zM68.3 32.8l-.94 3.74 1.2.77-.26-4.5zM227.78 16.7c-2.2-1.46-6.48-2.18-13.1-2.18h-1.12l-4.83 18.6h1.87c5.92 0 10-.44 12.48-1.38a10.45 10.45 0 0 0 6.6-7.64c1.12-4.34-.42-6.42-1.9-7.4zM150.66 16.84L142.14 51c7.78-.18 13.64-1.53 17.46-4 4-2.63 6.83-7 8.34-13.08s1.35-10.2-.45-12.47c-2.34-2.95-8-4.45-16.84-4.6z"/><path fill="#99999a" d="M91.18 25.6L87.1 32.9l12.33 7.92 4.12-7.28-12.37-7.9zM68.3 32.8l.27 4.5 24.08 15.47 3.98-7.03L53.9 18.32l-2.05 8.26 15.5 9.96.95-3.74zM84.06 21.05l-26.6-17-2.1 8.47 29.32 18.8-.62-10.27zM103.6 33.56l-2.12 8.55 15.68 10.07 2.14-8.57-15.7-10.04zM82.8.03H61.72l21.92 14.02L82.8.03zM97.97 56.2l15.68 10.05 2.06-8.27-15.66-10.06-2.07 8.27zM96.53 62l-1.27 5.07-.3 1.14H106.2L96.53 62zM49.26 36.98l-7.8 31.23h18l5.27-21.1 1.2-4.75L50.4 32.4l-1.14 4.58zM69 44.33l.35 5.8 1.1 18.08h13.47l3.53-6.24 2.4-4.24L69 44.32zM130.16.03h-24.6l-11.6 20.63 26.78 17.13L130.16.02zM184.42 10c-4.52-6.63-12.95-10-25-10H136l-10.2 41 37.1 23.74a38.4 38.4 0 0 0 5.1-2.66 39.6 39.6 0 0 0 13-13.43 51.84 51.84 0 0 0 5.7-14.08c2.56-10.32 1.8-18.57-2.28-24.57zm-16.48 23.92c-1.5 6-4.32 10.45-8.34 13.08-3.8 2.5-9.68 3.84-17.46 4l8.52-34.18c8.85.12 14.5 1.66 16.82 4.6 1.8 2.3 1.96 6.48.46 12.5zM122.2 55.4l19.96 12.8h3A47.78 47.78 0 0 0 155.9 67l-31.55-20.17zM119.02 68.2h12.64l-10.9-6.98-1.74 7z"/><path fill="#82bc00" d="M244.8 7.12C241.28 2.4 234.44 0 224.5 0h-23.7L183 68.24h19.6l5.44-21c10.63-.1 19-1.74 24.82-4.86 6.86-3.68 11.5-10 13.78-18.78 1.8-6.88 1.18-12.44-1.83-16.48zm-15.13 17a10.45 10.45 0 0 1-6.6 7.65c-2.47.93-6.55 1.4-12.47 1.4h-1.87l4.83-18.62h1.12c6.62 0 10.9.72 13.1 2.2 1.48.93 3.02 3 1.9 7.35z"/><path fill="#8dc63f" d="M103.7 33.27l-.15.25.06.04.1-.3z"/><path fill="#82bc00" d="M57.47 4.04l1-4H51.2l6.27 4zM53.9 18.32l1.46-5.8L35.9.02H25.4l28.5 18.3zM50.4 32.4l1.45-5.82L10.5.03H0L50.4 32.4zM41.47 75.3h206.18v1H41.47z"/></svg>
				</a>

				<!-- <a class="logo-link" href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //echo file_get_contents('http://www.mdp.dev/wp-content/themes/md_partitions/img/logo.svg'); ?></a> -->

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
							<a class="call-btn slant-btn" href="tel:<?php echo esc_html( $phone ); ?>"><span class="unslant">Click-To-Call</span></a>

							<!-- <div class="phone-link">

							</div> -->

						<?php endif;

				} ?>

				<button id="mobile-toggle" class="slant-btn" aria-controls="site-navigation" aria-expanded="false" aria-label="Menu"><span class="unslant"><?php esc_html_e( 'Menu', 'md_partitions' ); ?></span></button>

			</div>

			<?php if ( is_page_template( 'front-page.php' ) ) {  ?>

				<nav id="site-navigation" class="main-navigation home-desktop-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'home-nav', 'menu_id' => 'home-desktop-menu', 'container' => '' ) ); ?>
				</nav><!-- home-desktop-navigation -->

			<?php }else {  ?>

				<nav id="site-navigation" class="main-navigation page-desktop-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'page-nav', 'menu_id' => 'page-desktop-menu', 'container' => '' ) ); ?>
				</nav><!-- page-desktop-navigation -->

			<?php } ?>

		</div>

	</header><!-- #masthead -->

	<?php if ( is_page_template( 'front-page.php' ) && function_exists( 'md_partitions_home_carousel' ) ) {
		md_partitions_home_carousel();
	} ?>

	<div id="content" class="site-content">

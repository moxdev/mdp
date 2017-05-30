<?php
/**
 * MD Partitions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MD_Partitions
 */

if ( ! function_exists( 'md_partitions_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function md_partitions_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on MD Partitions, use a find and replace
	 * to change 'md_partitions' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'md_partitions', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'home-nav'   => esc_html__( 'Home Page Desktop Menu', 'md_partitions' ),
			'page-nav'   => esc_html__( 'Page Desktop Menu', 'md_partitions' ),
			'mobile-nav' => esc_html__( 'Mobile Menu', 'md_partitions' )
		) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'md_partitions_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function md_partitions_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'md_partitions_content_width', 640 );
}
add_action( 'after_setup_theme', 'md_partitions_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function md_partitions_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'md_partitions' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'md_partitions' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'md_partitions_widgets_init' );

/**
 * Register scripts for later use.
 */
function md_partitions_register_scripts()  {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        // Load the copy of jQuery that comes with WordPress
        // The last parameter set to TRUE states that it should be loaded in the footer.
        wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', FALSE, FALSE, TRUE);
    }
}
add_action('init', 'md_partitions_register_scripts');

/**
 * Enqueue scripts and styles.
 */
function md_partitions_scripts() {
	wp_enqueue_style( 'md_partitions-style', get_stylesheet_uri() );

	wp_enqueue_script( 'md_partitions-navigation', get_template_directory_uri() . '/js/min/navigation-min.js', array(), '20151215', true );

	wp_enqueue_script( 'md_partitions-skip-link-focus-fix', get_template_directory_uri() . '/js/min/skip-link-focus-fix-min.js', array(), '20151215', true );

	if ( is_page_template( 'front-page.php' ) ) {
		wp_enqueue_script( 'md_partitions-wallop-library', get_template_directory_uri() . '/js/min/Wallop.min.js', false, false, true );
		wp_enqueue_script( 'md_partitions-home-carousel', get_template_directory_uri() . '/js/min/home-carousel-min.js', array('md_partitions-wallop-library'), false, true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'md_partitions_scripts' );

/**
 * Custom ACF Options
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
	    'page_title'    => 'Company Information',
	    'menu_title'    => 'Company Information',
	    'menu_slug'     => 'company-information',
	    'capability'    => 'edit_posts',
	    'redirect'      => false
	));
	acf_add_options_sub_page(array(
	    'page_title'    => 'Footer Settings',
	    'menu_title'    => 'Footer Information',
	    'parent_slug'   => 'company-information',
	));
}

/**
 * ADD STYLES TO WYSIWYG
 */
// Insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Use 'mce_buttons' for button row #1, mce_buttons_3' for button row #3
add_filter('mce_buttons_2', 'my_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {
  $style_formats = array(
		array(
			'title'   => 'Bold Font', // Title to show in dropdown
			'inline'  => 'span', // Element to add class to
			'classes' => 'wysiwyg-bold-font' // CSS class to add
    )
  );

  $init_array['style_formats'] = json_encode( $style_formats );
  return $init_array;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// EDITOR STYLES

function md_partitions_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' ); // add css to root
}
add_action( 'admin_init', 'md_partitions_add_editor_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

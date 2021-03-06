<?php
/**
 * MD Partitions Theme Customizer
 *
 * @package MD_Partitions
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function md_partitions_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

  $wp_customize->remove_section( 'colors' );
  $wp_customize->remove_section( 'header_image' );
  $wp_customize->remove_section( 'background_image' );
  $wp_customize->remove_section( 'custom_css' );
}
add_action( 'customize_register', 'md_partitions_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function md_partitions_customize_preview_js() {
	wp_enqueue_script( 'md_partitions_customizer', get_template_directory_uri() . '/js/min/customizer-min.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'md_partitions_customize_preview_js' );

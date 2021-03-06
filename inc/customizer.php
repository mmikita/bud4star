<?php
/**
 * bud4star Theme Customizer
 *
 * @package bud4star
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bud4star_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'bud4star_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'bud4star_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'bud4star_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bud4star_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bud4star_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bud4star_customize_preview_js() {
	wp_enqueue_script( 'bud4star-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}



add_action( 'customize_preview_init', 'bud4star_customize_preview_js' );



// 1. customizer-preview.js
function tuts_customize_preview_js() {
    wp_enqueue_script( 'tuts_customizer_preview', get_template_directory_uri() . '/js/customizer-preview.js', array( 'customize-preview' ), null, true );
}
add_action( 'customize_preview_init', 'tuts_customize_preview_js' );
 
// 2. customizer-control.js
function tuts_customize_control_js() {
    wp_enqueue_script( 'tuts_customizer_control', get_template_directory_uri() . '/js/customizer-control.js', array( 'customize-controls', 'jquery' ), null, true );
}
add_action( 'customize_controls_enqueue_scripts', 'tuts_customize_control_js' );

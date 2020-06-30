<?php
/**
 * buddhist Theme Customizer
 *
 * @package buddhist
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function buddhist_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'buddhist_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'buddhist_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'buddhist_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function buddhist_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function buddhist_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function buddhist_customize_preview_js() {
	wp_enqueue_script( 'buddhist-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'buddhist_customize_preview_js' );





//========================================================
//=========  custom control for phone no  Start  =========
//========================================================
function register_customize_phone_no( $wp_customize ) {
 
    $wp_customize->add_section( 'phone_number_label', array(
 
       'title'=> __( 'Phone Number', 'dhcbca' ),
       'priority' =>1
    ) );
 
    $wp_customize->add_setting( 'phone_number_setting' );
    $wp_customize->add_control( 'phone_number_setting', array(
        'id'=> 'id',
        'label' => __( 'Enter Phone Number:', 'dhcbca' ),
        'section' => 'phone_number_label'
    ) );
}
add_action('customize_register','register_customize_phone_no');
//========================================================
//=========  custom control for phone no  End  ===========
//========================================================

//========================================================
//=========  custom control for Email  Start  ============
//========================================================
function register_customize_email( $wp_customize ) {
 
    $wp_customize->add_section( 'Email_label', array(
 
       'title'=> __( 'Email', 'dhcbca' ),
       'priority' =>1
    ) );
 
    $wp_customize->add_setting( 'Email_setting' );
    $wp_customize->add_control( 'Email_setting', array(
        'id'=> 'id',
        'label' => __( 'Enter Email:', 'dhcbca' ),
        'section' => 'Email_label'
    ) );
}
add_action('customize_register','register_customize_email');
//========================================================
//=========  custom control for Email  End  ==============
//========================================================










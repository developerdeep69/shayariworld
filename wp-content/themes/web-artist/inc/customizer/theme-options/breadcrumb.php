<?php
/**
 * Breadcrumb options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

$wp_customize->add_section( 'web_artist_breadcrumb', array(
	'title'             => esc_html__( 'Breadcrumb','web-artist' ),
	'description'       => esc_html__( 'Breadcrumb section options.', 'web-artist' ),
	'panel'             => 'web_artist_theme_options_panel',
) );

// Breadcrumb enable setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[breadcrumb_enable]', array(
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
	'default'          	=> $options['breadcrumb_enable'],
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[breadcrumb_enable]', array(
	'label'            	=> esc_html__( 'Enable Breadcrumb', 'web-artist' ),
	'section'          	=> 'web_artist_breadcrumb',
	'on_off_label' 		=> web_artist_switch_options(),
) ) );

// Breadcrumb separator setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[breadcrumb_separator]', array(
	'sanitize_callback'	=> 'sanitize_text_field',
	'default'          	=> $options['breadcrumb_separator'],
) );

$wp_customize->add_control( 'web_artist_theme_options[breadcrumb_separator]', array(
	'label'            	=> esc_html__( 'Separator', 'web-artist' ),
	'active_callback' 	=> 'web_artist_is_breadcrumb_enable',
	'section'          	=> 'web_artist_breadcrumb',
) );

<?php
/**
 * pagination options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'web_artist_pagination', array(
	'title'               => esc_html__('Pagination','web-artist'),
	'description'         => esc_html__( 'Pagination section options.', 'web-artist' ),
	'panel'               => 'web_artist_theme_options_panel',
) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[pagination_enable]', array(
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
	'default'             => $options['pagination_enable'],
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[pagination_enable]', array(
	'label'               => esc_html__( 'Pagination Enable', 'web-artist' ),
	'section'             => 'web_artist_pagination',
	'on_off_label' 		=> web_artist_switch_options(),
) ) );

// Site layout setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[pagination_type]', array(
	'sanitize_callback'   => 'web_artist_sanitize_select',
	'default'             => $options['pagination_type'],
) );

$wp_customize->add_control( 'web_artist_theme_options[pagination_type]', array(
	'label'               => esc_html__( 'Pagination Type', 'web-artist' ),
	'section'             => 'web_artist_pagination',
	'type'                => 'select',
	'choices'			  => web_artist_pagination_options(),
	'active_callback'	  => 'web_artist_is_pagination_enable',
) );

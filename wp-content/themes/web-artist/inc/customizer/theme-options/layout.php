<?php
/**
 * Layout options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'web_artist_layout', array(
	'title'               => esc_html__('Layout','web-artist'),
	'description'         => esc_html__( 'Layout section options.', 'web-artist' ),
	'panel'               => 'web_artist_theme_options_panel',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[site_layout]', array(
	'sanitize_callback'   => 'web_artist_sanitize_select',
	'default'             => $options['site_layout'],
) );

$wp_customize->add_control(  new Web_Artist_Custom_Radio_Image_Control ( $wp_customize, 'web_artist_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'web-artist' ),
	'section'             => 'web_artist_layout',
	'choices'			  => web_artist_site_layout(),
) ) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[sidebar_position]', array(
	'sanitize_callback'   => 'web_artist_sanitize_select',
	'default'             => $options['sidebar_position'],
) );

$wp_customize->add_control(  new Web_Artist_Custom_Radio_Image_Control ( $wp_customize, 'web_artist_theme_options[sidebar_position]', array(
	'label'               => esc_html__( 'Global Sidebar Position', 'web-artist' ),
	'section'             => 'web_artist_layout',
	'choices'			  => web_artist_global_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[post_sidebar_position]', array(
	'sanitize_callback'   => 'web_artist_sanitize_select',
	'default'             => $options['post_sidebar_position'],
) );

$wp_customize->add_control(  new Web_Artist_Custom_Radio_Image_Control ( $wp_customize, 'web_artist_theme_options[post_sidebar_position]', array(
	'label'               => esc_html__( 'Posts Sidebar Position', 'web-artist' ),
	'section'             => 'web_artist_layout',
	'choices'			  => web_artist_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[page_sidebar_position]', array(
	'sanitize_callback'   => 'web_artist_sanitize_select',
	'default'             => $options['page_sidebar_position'],
) );

$wp_customize->add_control( new Web_Artist_Custom_Radio_Image_Control( $wp_customize, 'web_artist_theme_options[page_sidebar_position]', array(
	'label'               => esc_html__( 'Pages Sidebar Position', 'web-artist' ),
	'section'             => 'web_artist_layout',
	'choices'			  => web_artist_sidebar_position(),
) ) );
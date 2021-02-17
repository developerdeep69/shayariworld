<?php
/**
 * Excerpt options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add excerpt section
$wp_customize->add_section( 'web_artist_single_post_section', array(
	'title'             => esc_html__( 'Single Post','web-artist' ),
	'description'       => esc_html__( 'Options to change the single posts globally.', 'web-artist' ),
	'panel'             => 'web_artist_theme_options_panel',
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[single_post_hide_date]', array(
	'default'           => $options['single_post_hide_date'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[single_post_hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'web-artist' ),
	'section'           => 'web_artist_single_post_section',
	'on_off_label' 		=> web_artist_hide_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[single_post_hide_author]', array(
	'default'           => $options['single_post_hide_author'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[single_post_hide_author]', array(
	'label'             => esc_html__( 'Hide Author', 'web-artist' ),
	'section'           => 'web_artist_single_post_section',
	'on_off_label' 		=> web_artist_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[single_post_hide_category]', array(
	'default'           => $options['single_post_hide_category'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[single_post_hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'web-artist' ),
	'section'           => 'web_artist_single_post_section',
	'on_off_label' 		=> web_artist_hide_options(),
) ) );

// Archive tag category setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[single_post_hide_tags]', array(
	'default'           => $options['single_post_hide_tags'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[single_post_hide_tags]', array(
	'label'             => esc_html__( 'Hide Tag', 'web-artist' ),
	'section'           => 'web_artist_single_post_section',
	'on_off_label' 		=> web_artist_hide_options(),
) ) );

<?php
/**
 * Archive options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add archive section
$wp_customize->add_section( 'web_artist_archive_section', array(
	'title'             => esc_html__( 'Blog/Archive','web-artist' ),
	'description'       => esc_html__( 'Archive section options.', 'web-artist' ),
	'panel'             => 'web_artist_theme_options_panel',
) );

// Your latest posts title setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[your_latest_posts_title]', array(
	'default'           => $options['your_latest_posts_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'web_artist_theme_options[your_latest_posts_title]', array(
	'label'             => esc_html__( 'Your Latest Posts Title', 'web-artist' ),
	'description'       => esc_html__( 'This option only works if Static Front Page is set to "Your latest posts."', 'web-artist' ),
	'section'           => 'web_artist_archive_section',
	'type'				=> 'text',
	'active_callback'   => 'web_artist_is_latest_posts'
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[hide_date]', array(
	'default'           => $options['hide_date'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'web-artist' ),
	'section'           => 'web_artist_archive_section',
	'on_off_label' 		=> web_artist_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[hide_category]', array(
	'default'           => $options['hide_category'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'web-artist' ),
	'section'           => 'web_artist_archive_section',
	'on_off_label' 		=> web_artist_hide_options(),
) ) );
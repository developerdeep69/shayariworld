<?php
/**
 * Search Section options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add Search section
$wp_customize->add_section( 'web_artist_search_section', array(
	'title'             => esc_html__( 'Search','web-artist' ),
	'panel'             => 'web_artist_front_page_panel',
) );

// Search content enable control and setting
$wp_customize->add_setting( 'web_artist_theme_options[search_section_enable]', array(
	'default'			=> 	$options['search_section_enable'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[search_section_enable]', array(
	'label'             => esc_html__( 'Search Section Enable', 'web-artist' ),
	'section'           => 'web_artist_search_section',
	'on_off_label' 		=> web_artist_switch_options(),
) ) );

// search title setting and control
$wp_customize->add_setting( 'web_artist_theme_options[search_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['search_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'web_artist_theme_options[search_title]', array(
	'label'           	=> esc_html__( 'Title', 'web-artist' ),
	'section'        	=> 'web_artist_search_section',
	'active_callback' 	=> 'web_artist_is_search_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'web_artist_theme_options[search_title]', array(
		'selector'            => '#product-search div.entry-container h2.section-title',
		'settings'            => 'web_artist_theme_options[search_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'web_artist_search_title_partial',
    ) );
}

// search subtitle setting and control
$wp_customize->add_setting( 'web_artist_theme_options[search_subtitle]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['search_subtitle'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'web_artist_theme_options[search_subtitle]', array(
	'label'           	=> esc_html__( 'Sub Title', 'web-artist' ),
	'section'        	=> 'web_artist_search_section',
	'active_callback' 	=> 'web_artist_is_search_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'web_artist_theme_options[search_subtitle]', array(
		'selector'            => '#product-search .entry-container span',
		'settings'            => 'web_artist_theme_options[search_subtitle]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'web_artist_search_subtitle_partial',
    ) );
}

// search  background image setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[search_bg_image]', array(
	'sanitize_callback' => 'web_artist_sanitize_image'
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'web_artist_theme_options[search_bg_image]',
		array(
		'label'       		=> esc_html__( 'Search Background Image', 'web-artist'),
		'description' 		=> sprintf( esc_html__( 'Recommended size: %1$dpx x %2$dpx ', 'web-artist' ), 1410, 380 ),
		'section'     		=> 'web_artist_search_section',
		'active_callback'	=> 'web_artist_is_search_section_enable',
) ) );


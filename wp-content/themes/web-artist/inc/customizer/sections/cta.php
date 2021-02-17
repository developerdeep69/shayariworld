<?php
/**
 * Call to Action Section options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add Call to Action section
$wp_customize->add_section( 'web_artist_cta_section', array(
	'title'             => esc_html__( 'Call to Action','web-artist' ),
	'description'       => esc_html__( 'Call to Action Section options.', 'web-artist' ),
	'panel'             => 'web_artist_front_page_panel',
) );

// Call to Action content enable control and setting
$wp_customize->add_setting( 'web_artist_theme_options[cta_section_enable]', array(
	'default'			=> 	$options['cta_section_enable'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[cta_section_enable]', array(
	'label'             => esc_html__( 'Call to Action Section Enable', 'web-artist' ),
	'section'           => 'web_artist_cta_section',
	'on_off_label' 		=> web_artist_switch_options(),
) ) );


// cta pages drop down chooser control and setting
$wp_customize->add_setting( 'web_artist_theme_options[cta_content_page]', array(
	'sanitize_callback' => 'web_artist_sanitize_page',
) );

$wp_customize->add_control( new Web_Artist_Dropdown_Chooser( $wp_customize, 'web_artist_theme_options[cta_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'web-artist' ),
	'section'           => 'web_artist_cta_section',
	'choices'			=> web_artist_page_choices(),
	'active_callback'	=> 'web_artist_is_cta_section_enable',
) ) );

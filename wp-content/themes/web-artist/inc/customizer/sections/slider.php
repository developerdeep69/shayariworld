<?php
/**
* Slider Section options
*
* @package Theme Palace
* @subpackage Web Artist
* @since Web Artist 1.0.0
*/

// Add Slider section
$wp_customize->add_section( 'web_artist_slider_section', array(
	'title'             => esc_html__( 'Main Slider','web-artist' ),
	'description'       => esc_html__( 'Slider Section options.', 'web-artist' ),
	'panel'             => 'web_artist_front_page_panel',
	) );

// Slider content enable control and setting
$wp_customize->add_setting( 'web_artist_theme_options[slider_section_enable]', array(
	'default'			=> 	$options['slider_section_enable'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
	) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[slider_section_enable]', array(
	'label'             => esc_html__( 'Slider Section Enable', 'web-artist' ),
	'section'           => 'web_artist_slider_section',
	'on_off_label' 		=> web_artist_switch_options(),
	) ) );

for ( $i = 1; $i <= 3; $i++ ) :

// slider pages drop down chooser control and setting
$wp_customize->add_setting( 'web_artist_theme_options[slider_content_page_' . $i . ']', array(
	'sanitize_callback' => 'web_artist_sanitize_page',
	) );

$wp_customize->add_control( new Web_Artist_Dropdown_Chooser( $wp_customize, 'web_artist_theme_options[slider_content_page_' . $i . ']', array(
	'label'             => sprintf( esc_html__( 'Select Page %d', 'web-artist' ), $i ),
	'section'           => 'web_artist_slider_section',
	'choices'			=> web_artist_page_choices(),
	'active_callback'	=> 'web_artist_is_slider_section_enable',
	) ) );

endfor;

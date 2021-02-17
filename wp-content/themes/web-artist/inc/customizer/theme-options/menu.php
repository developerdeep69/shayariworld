<?php
/**
 * Menu options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'web_artist_menu', array(
	'title'             => esc_html__('Header Menu','web-artist'),
	'description'       => esc_html__( 'Header Menu options.', 'web-artist' ),
	'panel'             => 'nav_menus',
) );

// Menu sticky setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[menu_sticky]', array(
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
	'default'           => $options['menu_sticky'],
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[menu_sticky]', array(
	'label'             => esc_html__( 'Make Menu Sticky', 'web-artist' ),
	'section'           => 'web_artist_menu',
	'on_off_label' 		=> web_artist_switch_options(),
) ) );

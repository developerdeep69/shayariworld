<?php
/**
* Homepage (Static ) options
*
* @package Theme Palace
* @subpackage Web Artist
* @since Web Artist 1.0.0
*/

// Homepage (Static ) setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[enable_frontpage_content]', array(
	'sanitize_callback'   => 'web_artist_sanitize_checkbox',
	'default'             => $options['enable_frontpage_content'],
) );

$wp_customize->add_control( 'web_artist_theme_options[enable_frontpage_content]', array(
	'label'       	=> esc_html__( 'Enable Content', 'web-artist' ),
	'description' 	=> esc_html__( 'Check to enable content on static front page only.', 'web-artist' ),
	'section'     	=> 'static_front_page',
	'type'        	=> 'checkbox',
) );
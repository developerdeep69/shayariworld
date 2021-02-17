<?php
/**
 * Excerpt options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add excerpt section
$wp_customize->add_section( 'web_artist_excerpt_section', array(
	'title'             => esc_html__( 'Excerpt','web-artist' ),
	'description'       => esc_html__( 'Excerpt section options.', 'web-artist' ),
	'panel'             => 'web_artist_theme_options_panel',
) );


// long Excerpt length setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[long_excerpt_length]', array(
	'sanitize_callback' => 'web_artist_sanitize_number_range',
	'validate_callback' => 'web_artist_validate_long_excerpt',
	'default'			=> $options['long_excerpt_length'],
) );

$wp_customize->add_control( 'web_artist_theme_options[long_excerpt_length]', array(
	'label'       		=> esc_html__( 'Blog Page Excerpt Length', 'web-artist' ),
	'description' 		=> esc_html__( 'Total words to be displayed in archive page/search page.', 'web-artist' ),
	'section'     		=> 'web_artist_excerpt_section',
	'type'        		=> 'number',
	'input_attrs' 		=> array(
		'style'       => 'width: 80px;',
		'max'         => 100,
		'min'         => 5,
	),
) );


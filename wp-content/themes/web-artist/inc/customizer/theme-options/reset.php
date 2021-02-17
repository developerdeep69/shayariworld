<?php
/**
 * Reset options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

/**
* Reset section
*/
// Add reset enable section
$wp_customize->add_section( 'web_artist_reset_section', array(
	'title'             => esc_html__('Reset all settings','web-artist'),
	'description'       => esc_html__( 'Caution: All settings will be reset to default. Refresh the page after clicking Save & Publish.', 'web-artist' ),
) );

// Add reset enable setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[reset_options]', array(
	'default'           => $options['reset_options'],
	'sanitize_callback' => 'web_artist_sanitize_checkbox',
	'transport'			  => 'postMessage',
) );

$wp_customize->add_control( 'web_artist_theme_options[reset_options]', array(
	'label'             => esc_html__( 'Check to reset all settings', 'web-artist' ),
	'section'           => 'web_artist_reset_section',
	'type'              => 'checkbox',
) );

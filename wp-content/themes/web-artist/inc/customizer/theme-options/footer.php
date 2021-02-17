<?php
/**
 * Footer options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Footer Section
$wp_customize->add_section( 'web_artist_section_footer',
	array(
		'title'      			=> esc_html__( 'Footer Options', 'web-artist' ),
		'priority'   			=> 900,
		'panel'      			=> 'web_artist_theme_options_panel',
	)
);

// footer text
$wp_customize->add_setting( 'web_artist_theme_options[copyright_text]',
	array(
		'default'       		=> $options['copyright_text'],
		'sanitize_callback'		=> 'web_artist_santize_allow_tag',
		'transport'				=> 'postMessage',
	)
);
$wp_customize->add_control( 'web_artist_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'web-artist' ),
		'section'    			=> 'web_artist_section_footer',
		'type'		 			=> 'textarea',
    )
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'web_artist_theme_options[copyright_text]', array(
		'selector'            => '.site-info .copyright p',
		'settings'            => 'web_artist_theme_options[copyright_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'corporate_press_pro_copyright_text_partial',
    ) );
}

// footer  background image setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[footer_bg_image]', array(
	'default'           =>$options['footer_bg_image'],
	'sanitize_callback' => 'web_artist_sanitize_image'
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'web_artist_theme_options[footer_bg_image]',
		array(
		'label'       		=> esc_html__( 'Footer Background Image', 'web-artist'),
		'description' 		=> sprintf( esc_html__( 'Recommended size: %1$dpx x %2$dpx ', 'web-artist' ), 2304, 384 ),
		'section'     		=> 'web_artist_section_footer',
) ) );

// scroll top visible
$wp_customize->add_setting( 'web_artist_theme_options[scroll_top_visible]',
	array(
		'default'       		=> $options['scroll_top_visible'],
		'sanitize_callback' => 'web_artist_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[scroll_top_visible]',
    array(
		'label'      			=> esc_html__( 'Display Scroll Top Button', 'web-artist' ),
		'section'    			=> 'web_artist_section_footer',
		'on_off_label' 		=> web_artist_switch_options(),
    )
) );
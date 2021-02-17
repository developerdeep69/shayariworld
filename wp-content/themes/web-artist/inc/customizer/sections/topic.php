<?php
/**
* Topic Section options
*
* @package Theme Palace
* @subpackage Web Artist
* @since Web Artist 1.0.0
*/

// Add topic section
$wp_customize->add_section( 'web_artist_topic_section', array(
'title'             => esc_html__( 'Topic','web-artist' ),
'description'       => esc_html__( 'Topic Section options.', 'web-artist' ),
'panel'             => 'web_artist_front_page_panel',
) );

// topic content enable control and setting
$wp_customize->add_setting( 'web_artist_theme_options[topic_section_enable]', array(
'default'			=> 	$options['topic_section_enable'],
'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[topic_section_enable]', array(
'label'             => esc_html__( 'Topic Section Enable', 'web-artist' ),
'section'           => 'web_artist_topic_section',
'on_off_label' 		=> web_artist_switch_options(),
) ) );

// topic title setting and control
$wp_customize->add_setting( 'web_artist_theme_options[topic_title]', array(
'sanitize_callback' => 'sanitize_text_field',
'default'			=> $options['topic_title'],
'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'web_artist_theme_options[topic_title]', array(
'label'           	=> esc_html__( 'Title', 'web-artist' ),
'section'        	=> 'web_artist_topic_section',
'active_callback' 	=> 'web_artist_is_topic_section_enable',
'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
$wp_customize->selective_refresh->add_partial( 'web_artist_theme_options[topic_title]', array(
'selector'            => '#topics div.wrapper .section-header h2.section-title',
'settings'            => 'web_artist_theme_options[topic_title]',
'container_inclusive' => false,
'fallback_refresh'    => true,
'render_callback'     => 'web_artist_topic_title_partial',
) );
}



for ( $i = 1; $i <= 4; $i++ ) :

// topic note control and setting
$wp_customize->add_setting( 'web_artist_theme_options[topic_content_icon_' . $i . ']', array(
'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Web_Artist_Icon_Picker( $wp_customize, 'web_artist_theme_options[topic_content_icon_' . $i . ']', array(
'label'             => sprintf( esc_html__( 'Select Icon %d', 'web-artist' ), $i ),
'section'           => 'web_artist_topic_section',
'active_callback'	=> 'web_artist_is_topic_section_enable',
) ) );

// topic pages drop down chooser control and setting
$wp_customize->add_setting( 'web_artist_theme_options[topic_content_page_' . $i . ']', array(
'sanitize_callback' => 'web_artist_sanitize_page',
) );

$wp_customize->add_control( new Web_Artist_Dropdown_Chooser( $wp_customize, 'web_artist_theme_options[topic_content_page_' . $i . ']', array(
'label'             => sprintf( esc_html__( 'Select Page %d', 'web-artist' ), $i ),
'section'           => 'web_artist_topic_section',
'choices'			=> web_artist_page_choices(),
'active_callback'	=> 'web_artist_is_topic_section_enable',
) ) );


// topic hr setting and control
$wp_customize->add_setting( 'web_artist_theme_options[topic_hr_'. $i .']', array(
'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( new Web_Artist_Customize_Horizontal_Line( $wp_customize, 'web_artist_theme_options[topic_hr_'. $i .']',
array(
'section'         => 'web_artist_topic_section',
'active_callback' => 'web_artist_is_topic_section_enable',
'type'			  => 'hr'
) ) );
endfor;
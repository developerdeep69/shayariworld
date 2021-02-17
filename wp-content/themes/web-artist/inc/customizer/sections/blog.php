<?php
/**
 * Blog Section options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add Blog section
$wp_customize->add_section( 'web_artist_blog_section', array(
	'title'             => esc_html__( 'Blog','web-artist' ),
	'description'       => esc_html__( 'Blog Section options.', 'web-artist' ),
	'panel'             => 'web_artist_front_page_panel',
) );

// Blog content enable control and setting
$wp_customize->add_setting( 'web_artist_theme_options[blog_section_enable]', array(
	'default'			=> 	$options['blog_section_enable'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[blog_section_enable]', array(
	'label'             => esc_html__( 'Blog Section Enable', 'web-artist' ),
	'section'           => 'web_artist_blog_section',
	'on_off_label' 		=> web_artist_switch_options(),
) ) );

// blog title setting and control
$wp_customize->add_setting( 'web_artist_theme_options[blog_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['blog_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'web_artist_theme_options[blog_title]', array(
	'label'           	=> esc_html__( 'Title', 'web-artist' ),
	'section'        	=> 'web_artist_blog_section',
	'active_callback' 	=> 'web_artist_is_blog_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'web_artist_theme_options[blog_title]', array(
		'selector'            => '#recent .wrapper h2.section-title',
		'settings'            => 'web_artist_theme_options[blog_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'web_artist_blog_title_partial',
    ) );
}

// Blog content type control and setting
$wp_customize->add_setting( 'web_artist_theme_options[blog_content_type]', array(
	'default'          	=> $options['blog_content_type'],
	'sanitize_callback' => 'web_artist_sanitize_select',
) );

$wp_customize->add_control( 'web_artist_theme_options[blog_content_type]', array(
	'label'             => esc_html__( 'Content Type', 'web-artist' ),
	'section'           => 'web_artist_blog_section',
	'type'				=> 'select',
	'active_callback' 	=> 'web_artist_is_blog_section_enable',
	'choices'			=> array( 
		'post' 		=> esc_html__( 'Post', 'web-artist' ),
		'recent' 	=> esc_html__( 'Recent', 'web-artist' ),
	),
) );


for ( $i = 1; $i <= 6; $i++ ) :
	// blog posts drop down chooser control and setting
	$wp_customize->add_setting( 'web_artist_theme_options[blog_content_post_' . $i . ']', array(
		'sanitize_callback' => 'web_artist_sanitize_page',
	) );

	$wp_customize->add_control( new Web_Artist_Dropdown_Chooser( $wp_customize, 'web_artist_theme_options[blog_content_post_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Post %d', 'web-artist' ), $i ),
		'section'           => 'web_artist_blog_section',
		'choices'			=> web_artist_post_choices(),
		'active_callback'	=> 'web_artist_is_blog_section_content_post_enable',
	) ) );
endfor;

// Add dropdown categories setting and control.
$wp_customize->add_setting( 'web_artist_theme_options[blog_category_exclude]', array(
	'sanitize_callback' => 'web_artist_sanitize_category_list',
) ) ;

$wp_customize->add_control( new Web_Artist_Dropdown_Category_Control( $wp_customize,'web_artist_theme_options[blog_category_exclude]', array(
	'label'             => esc_html__( 'Select Excluding Categories', 'web-artist' ),
	'description'      	=> esc_html__( 'Note: Select categories to exclude. Press Shift key select multilple categories.', 'web-artist' ),
	'section'           => 'web_artist_blog_section',
	'type'              => 'dropdown-categories',
	'active_callback'	=> 'web_artist_is_blog_section_content_recent_enable'
) ) );
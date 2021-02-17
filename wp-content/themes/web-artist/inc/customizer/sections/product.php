<?php
/**
 * Product Section options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// Add Product section
$wp_customize->add_section( 'web_artistduct_section', array(
	'title'             => esc_html__( 'Product','web-artist' ),
	'description'       => esc_html__( 'Note: To activate this section you need to install WooCommerce Plugin.', 'web-artist' ),
	'panel'             => 'web_artist_front_page_panel',
) );

// Product content enable control and setting
$wp_customize->add_setting( 'web_artist_theme_options[product_section_enable]', array(
	'default'			=> 	$options['product_section_enable'],
	'sanitize_callback' => 'web_artist_sanitize_switch_control',
) );

$wp_customize->add_control( new Web_Artist_Switch_Control( $wp_customize, 'web_artist_theme_options[product_section_enable]', array(
	'label'             => esc_html__( 'Product Section Enable', 'web-artist' ),
	'section'           => 'web_artistduct_section',
	'on_off_label' 		=> web_artist_switch_options(),
) ) );

// product title setting and control
$wp_customize->add_setting( 'web_artist_theme_options[product_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['product_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'web_artist_theme_options[product_title]', array(
	'label'           	=> esc_html__( 'Title', 'web-artist' ),
	'section'        	=> 'web_artistduct_section',
	'active_callback' 	=> 'web_artist_is_product_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'web_artist_theme_options[product_title]', array(
		'selector'            => '#product-section .section-header h2.section-title',
		'settings'            => 'web_artist_theme_options[product_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'web_artistduct_title_partial',
    ) );
}


for ( $i = 1; $i <= 8; $i++ ) :

	// product posts drop down chooser control and setting
	$wp_customize->add_setting( 'web_artist_theme_options[product_content_product_' . $i . ']', array(
		'sanitize_callback' => 'web_artist_sanitize_page',
	) );

	$wp_customize->add_control( new Web_Artist_Dropdown_Chooser( $wp_customize, 'web_artist_theme_options[product_content_product_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Product %d', 'web-artist' ), $i ),
		'section'           => 'web_artistduct_section',
		'choices'			=> web_artist_product_choices(),
		'active_callback'	=> 'web_artist_is_product_section_enable',
	) ) );

endfor;

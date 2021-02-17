<?php
/**
 * Customizer active callbacks
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

if ( ! function_exists( 'web_artist_is_loader_enable' ) ) :
	/**
	 * Check if loader is enabled.
	 *
	 * @since Web Artist 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function web_artist_is_loader_enable( $control ) {
		return $control->manager->get_setting( 'web_artist_theme_options[loader_enable]' )->value();
	}
endif;

if ( ! function_exists( 'web_artist_is_breadcrumb_enable' ) ) :
	/**
	 * Check if breadcrumb is enabled.
	 *
	 * @since Web Artist 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function web_artist_is_breadcrumb_enable( $control ) {
		return $control->manager->get_setting( 'web_artist_theme_options[breadcrumb_enable]' )->value();
	}
endif;

if ( ! function_exists( 'web_artist_is_pagination_enable' ) ) :
	/**
	 * Check if pagination is enabled.
	 *
	 * @since Web Artist 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function web_artist_is_pagination_enable( $control ) {
		return $control->manager->get_setting( 'web_artist_theme_options[pagination_enable]' )->value();
	}
endif;

/**
 * Front Page Active Callbacks
 */

/**
 * Check if slider section is enabled.
 *
 * @since Web Artist 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function web_artist_is_slider_section_enable( $control ) {
	return ( $control->manager->get_setting( 'web_artist_theme_options[slider_section_enable]' )->value() );
}


/**
 * Check if topic section is enabled.
 *
 * @since Web Artist 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function web_artist_is_topic_section_enable( $control ) {
	return ( $control->manager->get_setting( 'web_artist_theme_options[topic_section_enable]' )->value() );
}



/**
 * Check if cta section is enabled.
 *
 * @since Web Artist 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function web_artist_is_cta_section_enable( $control ) {
	return ( $control->manager->get_setting( 'web_artist_theme_options[cta_section_enable]' )->value() );
}


/**
 * Check if blog section is enabled.
 *
 * @since Web Artist 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function web_artist_is_blog_section_enable( $control ) {
	return ( $control->manager->get_setting( 'web_artist_theme_options[blog_section_enable]' )->value() );
}

/**
 * Check if blog section content type is post.
 *
 * @since Web Artist 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function web_artist_is_blog_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'web_artist_theme_options[blog_content_type]' )->value();
	return web_artist_is_blog_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if blog section content type is recent.
 *
 * @since Web Artist 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function web_artist_is_blog_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'web_artist_theme_options[blog_content_type]' )->value();
	return web_artist_is_blog_section_enable( $control ) && ( 'recent' == $content_type );
}

/**
 * Check if search section is enabled.
 *
 * @since Web Artist 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function web_artist_is_search_section_enable( $control ) {
	return ( $control->manager->get_setting( 'web_artist_theme_options[search_section_enable]' )->value() );
}

/**
 * Check if product section is enabled.
 *
 * @since Web Artist 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function web_artist_is_product_section_enable( $control ) {
	return ( $control->manager->get_setting( 'web_artist_theme_options[product_section_enable]' )->value() ) && class_exists( 'WooCommerce' );
}

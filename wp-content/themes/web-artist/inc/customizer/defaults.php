<?php
/**
 * Customizer default options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 * @return array An array of default values
 */

function web_artist_get_default_theme_options() {
	$theme_data = wp_get_theme();
	$web_artist_default_options = array(
		// Color Options
		'header_title_color'			=> '#fff',
		'header_tagline_color'			=> '#fff',
		'header_txt_logo_extra'			=> 'show-all',


		// breadcrumb
		'breadcrumb_enable'				=> true,
		'breadcrumb_separator'			=> '/',
		
		// layout 
		'site_layout'         			=> 'wide',
		'sidebar_position'         		=> 'right-sidebar',
		'post_sidebar_position' 		=> 'right-sidebar',
		'page_sidebar_position' 		=> 'right-sidebar',
		'menu_sticky'					=> true,

		// excerpt options
		'long_excerpt_length'           => 25,
		
		// pagination options
		'pagination_enable'         	=> true,
		'pagination_type'         		=> 'default',

		// footer options
		'copyright_text'           		=> sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'web-artist' ), '[the-year]', '[site-link]' ) . esc_html__( ' All Rights Reserved | ', 'web-artist' ) . esc_html( $theme_data->get( 'Name') ) . '&nbsp;' . esc_html__( 'by', 'web-artist' ). '&nbsp;<a target="_blank" href="'. esc_url( $theme_data->get( 'AuthorURI' ) ) .'">'. esc_html( ucwords( $theme_data->get( 'Author' ) ) ) .'</a>',
		'footer_bg_image'				=> esc_url(get_template_directory_uri().'/assets/uploads/services-bg-03.png'),
		'scroll_top_visible'        	=> true,

		// reset options
		'reset_options'      			=> false,
		
		// homepage options
		'enable_frontpage_content' 		=> false,


		// blog/archive options
		'your_latest_posts_title' 		=> esc_html__( 'Blogs', 'web-artist' ),
		'read_more_text' 				=> esc_html__( 'Read Full Article', 'web-artist' ),
		'hide_date' 					=> false,
		'hide_category'					=> false,

		// single post theme options
		'single_post_hide_date' 		=> false,
		'single_post_hide_author'		=> false,
		'single_post_hide_category'		=> false,
		'single_post_hide_tags'			=> false,

		/* Front Page */

		// Slider
		'slider_section_enable'			=> false,

		// topic
		'topic_section_enable'			=> false,
		'topic_title'					=> esc_html__('All Topics', 'web-artist'),

		// Product
		'product_section_enable'		=> false,
		'product_title'					=> esc_html__( 'Featured Products', 'web-artist' ),

		
		// Call to action
		'cta_section_enable'			=> false,
		'cta_btn_title'					=> esc_html__( 'Learn More', 'web-artist' ),

		// popular
		'popular_section_enable'	=> false,
		'popular_title'			=> esc_html__( 'Popular Categories', 'web-artist' ),


		// blog
		'blog_section_enable'			=> false,
		'blog_content_type'				=> 'recent',
		'blog_title'					=> esc_html__( 'Our Recent Articles', 'web-artist' ),


		// Search
		'search_section_enable'			=> false,
		'search_title'					=> esc_html__( 'The Best Products in Every Category', 'web-artist' ),
		'search_subtitle'				=> esc_html__( 'All Original', 'web-artist' ),	

	);

	$output = apply_filters( 'web_artist_default_theme_options', $web_artist_default_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}
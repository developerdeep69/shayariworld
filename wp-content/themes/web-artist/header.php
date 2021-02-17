<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Theme Palace
	 * @subpackage Web Artist
	 * @since Web Artist 1.0.0
	 */

	/**
	 * web_artist_doctype hook
	 *
	 * @hooked web_artist_doctype -  10
	 *
	 */
	do_action( 'web_artist_doctype' );

?>
<head>
<?php
	/**
	 * web_artist_before_wp_head hook
	 *
	 * @hooked web_artist_head -  10
	 *
	 */
	do_action( 'web_artist_before_wp_head' );

	wp_head(); 
?>
</head>

<body <?php body_class(); ?>>

<?php do_action('wp_body_open'); ?>

<?php
	/**
	 * web_artist_page_start_action hook
	 *
	 * @hooked web_artist_page_start -  10
	 *
	 */
	do_action( 'web_artist_page_start_action' ); 

	/**
	 * web_artist_loader_action hook
	 *
	 * @hooked web_artist_loader -  10
	 *
	 */
	do_action( 'web_artist_before_header' );

	/**
	 * web_artist_header_action hook
	 *
	 * @hooked web_artist_header_start -  10
	 * @hooked web_artist_site_branding -  20
	 * @hooked web_artist_site_navigation -  30
	 * @hooked web_artist_header_end -  50
	 *
	 */
	do_action( 'web_artist_header_action' );

	/**
	 * web_artist_content_start_action hook
	 *
	 * @hooked web_artist_content_start -  10
	 *
	 */
	do_action( 'web_artist_content_start_action' );

	/**
	 * web_artist_header_image_action hook
	 *
	 * @hooked web_artist_header_image -  10
	 *
	 */
	do_action( 'web_artist_header_image_action' );

    if ( web_artist_is_frontpage() ) {

    	$sections = array( 'slider', 'topic', 'product', 'cta', 'blog' );
		foreach ( $sections as $section ) {
			add_action( 'web_artist_primary_content', 'web_artist_add_'. $section .'_section');
		}
		do_action( 'web_artist_primary_content' );
	}
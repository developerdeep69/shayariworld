<?php
/**
 * Web Artist Pro Pro WooCoommerce compatibility hooks.
 *
 * This is the template that includes all WooCoommerce hooks to make the theme compatible with WooCommerce.
 *
 * @package Theme Palace
 * @subpackage Web Artist Pro
 * @since Web Artist Pro 1.0.0
 */

remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description' ,10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description' ,10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb' ,20 );

function web_artist_before_main_content() {
	echo '<div id="inner-content-wrapper" class="wrapper page-section">';
}
add_action( 'woocommerce_before_main_content', 'web_artist_before_main_content', 5 );

function web_artist_after_main_content() {
	echo '</div>';
}
add_action( 'woocommerce_sidebar', 'web_artist_after_main_content', 20 );

// Change number or products per row to 3
add_filter('loop_shop_columns', 'web_artist_loop_columns');
if ( ! function_exists('web_artist_loop_columns')) {
	/**
	 * Shop Page no. of column
	 *
	 * @since Web Artist Pro 1.0
	 *
	 */
	function web_artist_loop_columns() {
		return 3; // 3 products per row
	}
}

// remove title
add_filter('woocommerce_show_page_title', 'web_artist_hide_title' );
function web_artist_hide_title() {
	return false;
}
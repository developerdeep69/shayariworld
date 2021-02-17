<?php
/**
 * web artist inclusion
 *
 * This is the template that includes all custom widgets of Theme Palace
 *
 * @package Theme Palace
 * @subpackage Web Artist Pro
 * @since Web Artist Pro 1.0
 */


 /*
  * Add social link widget
*/ 
require get_template_directory() . '/inc/widgets/social-link.php';


/**
 * Register widgets
 */
function news_vibe_pro_register_widgets() {

	register_widget( 'web_artist_Social_Link' );

}
add_action( 'widgets_init', 'news_vibe_pro_register_widgets' );

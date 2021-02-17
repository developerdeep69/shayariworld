<?php 
function yala_blog_enqueue_styles() {

    $parent_style = 'yala-mag-style'; 

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'yala-blog-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family='.get_theme_mod('google_fontfamily_setting','Poppins').':300,400,500,600,700', array(), '' );
	wp_enqueue_style( 'google-font-title', 'https://fonts.googleapis.com/css?family='.get_theme_mod('title_google_fontfamily_setting','Poppins').':300,400,500,600,700', array(), '' );
	wp_enqueue_style( 'google-font-description', 'https://fonts.googleapis.com/css?family='.get_theme_mod('description_google_fontfamily_setting','Poppins').':300,400,500,600,700', array(), '' );
}
add_action( 'wp_enqueue_scripts', 'yala_blog_enqueue_styles' );

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses yala_mag_header_style()
 */
function yala_blog_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'yala_blog_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '1e73be',
		'width'                  => 1920,
		'height'                 => 800,
		'flex-height'            => true,
		'wp-head-callback'       => 'yala_mag_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'yala_blog_custom_header_setup' );


/**
 * Customizer additions.
 */
 require 'inc/yala-css.php';
 require 'inc/yala-font.php';
 require 'inc/yala-color.php';



 if ( ! function_exists( 'yala_blog_sanitize_select' ) ) :

    /**
     * Sanitize select.
     *
     * @since 1.0.0
     *
     * @param mixed                $input The value to sanitize.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return mixed Sanitized value.
     */
    function yala_blog_sanitize_select( $input, $setting ) {

        // Ensure input is a slug.
        $input = sanitize_key( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

    }

endif;




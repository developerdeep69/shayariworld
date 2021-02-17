<?php
/**
 * Theme Palace options
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

function web_artist_page_choices() {
    $pages = get_pages();
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'web-artist' );
    foreach ( $pages as $page ) {
        $choices[ $page->ID ] = $page->post_title;
    }
    return  $choices;
}

/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function web_artist_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'web-artist' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    wp_reset_postdata();
    return  $choices;
}

/**
 * List of products for post choices.
 * @return Array Array of post ids and name.
 */
function web_artist_product_choices() {
    $posts = get_posts( array( 'numberposts' => -1, 'post_type' => 'product' ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'web-artist' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    wp_reset_postdata();
    return  $choices;
}


if ( ! function_exists( 'web_artist_site_layout' ) ) :
    /**
     * Site Layout
     * @return array site layout options
     */
    function web_artist_site_layout() {
        $web_artist_site_layout = array(
            'wide'  => get_template_directory_uri() . '/assets/images/full.png',
            'boxed-layout' => get_template_directory_uri() . '/assets/images/boxed.png',
        );

        $output = apply_filters( 'web_artist_site_layout', $web_artist_site_layout );
        return $output;
    }
endif;

if ( ! function_exists( 'web_artist_selected_sidebar' ) ) :
    /**
     * Sidebars options
     * @return array Sidbar positions
     */
    function web_artist_selected_sidebar() {
        $web_artist_selected_sidebar = array(
            'sidebar-1'             => esc_html__( 'Default Sidebar', 'web-artist' ),
            'optional-sidebar'      => esc_html__( 'Optional Sidebar 1', 'web-artist' ),
            'optional-sidebar-2'    => esc_html__( 'Optional Sidebar 2', 'web-artist' ),
            'optional-sidebar-3'    => esc_html__( 'Optional Sidebar 3', 'web-artist' ),
            'optional-sidebar-4'    => esc_html__( 'Optional Sidebar 4', 'web-artist' ),
        );

        $output = apply_filters( 'web_artist_selected_sidebar', $web_artist_selected_sidebar );

        return $output;
    }
endif;


if ( ! function_exists( 'web_artist_global_sidebar_position' ) ) :
    /**
     * Global Sidebar position
     * @return array Global Sidebar positions
     */
    function web_artist_global_sidebar_position() {
        $web_artist_global_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'web_artist_global_sidebar_position', $web_artist_global_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'web_artist_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidbar positions
     */
    function web_artist_sidebar_position() {
        $web_artist_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'web_artist_sidebar_position', $web_artist_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'web_artist_pagination_options' ) ) :
    /**
     * Pagination
     * @return array site pagination options
     */
    function web_artist_pagination_options() {
        $web_artist_pagination_options = array(
            'numeric'   => esc_html__( 'Numeric', 'web-artist' ),
            'default'   => esc_html__( 'Default(Older/Newer)', 'web-artist' ),
        );

        $output = apply_filters( 'web_artist_pagination_options', $web_artist_pagination_options );

        return $output;
    }
endif;


if ( ! function_exists( 'web_artist_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function web_artist_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'web-artist' ),
            'off'       => esc_html__( 'Disable', 'web-artist' )
        );
        return apply_filters( 'web_artist_switch_options', $arr );
    }
endif;

if ( ! function_exists( 'web_artist_hide_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function web_artist_hide_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'web-artist' ),
            'off'       => esc_html__( 'No', 'web-artist' )
        );
        return apply_filters( 'web_artist_hide_options', $arr );
    }
endif;

if ( class_exists('WooCommerce') ) {
    add_filter( 'get_product_search_form' , 'web_artist_woo_custom_product_searchform' );
    function web_artist_woo_custom_product_searchform( $form ) {
        ?>
       <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label>
                <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'web-artist' ); ?></span>
            </label>
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Product &hellip;', 'placeholder', 'web-artist' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
            <button type="submit" class="search-submit"><?php echo web_artist_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'web-artist' ); ?></span></button>
            <input type="hidden" name="post_type" value="product" />
        </form>
    <?php }
}

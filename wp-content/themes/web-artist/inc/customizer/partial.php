<?php
/**
* Partial functions
*
* @package Theme Palace
* @subpackage Web Artist
* @since Web Artist 1.0.0
*/



if ( ! function_exists( 'web_artist_topic_title_partial' ) ) :
    // topic title
    function web_artist_topic_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['topic_title'] );
    }
endif;

if ( ! function_exists( 'web_artist_topic_button_partial' ) ) :
    // topic button
    function web_artist_topic_button_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['topic_button'] );
    }
endif;

if ( ! function_exists( 'web_artistduct_button_partial' ) ) :
    // product button
    function web_artistduct_button_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['product_button'] );
    }
endif;

if ( ! function_exists( 'web_artist_service_title_partial' ) ) :
    // service title
    function web_artist_service_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['service_title'] );
    }
endif;

if ( ! function_exists( 'web_artist_service_button_partial' ) ) :
    // service title
    function web_artist_service_button_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['service_button'] );
    }
endif;

if ( ! function_exists( 'web_artist_artisan_title_partial' ) ) :
    // artisan title
    function web_artist_artisan_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['artisan_title'] );
    }
endif;

if ( ! function_exists( 'web_artist_artisan_button_partial' ) ) :
    // artisan title
    function web_artist_artisan_button_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['artisan_btn_title'] );
    }
endif;

if ( ! function_exists( 'web_artist_cta_title_partial' ) ) :
    // cta title
    function web_artist_cta_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['cta_title'] );
    }
endif;

if ( ! function_exists( 'web_artist_cta_atlernate_text_partial' ) ) :
    // cta subtitle
    function web_artist_cta_atlernate_text_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['cta_atlernate_text'] );
    }
endif;

if ( ! function_exists( 'web_artist_cta_description_partial' ) ) :
    // cta description
    function web_artist_cta_description_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['cta_description'] );
    }
endif;

if ( ! function_exists( 'web_artist_cta_btn_title_partial' ) ) :
    // cta btn title
    function web_artist_cta_btn_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['cta_btn_title'] );
    }
endif;

if ( ! function_exists( 'web_artist_popular_title_partial' ) ) :
    // popular  title
    function web_artist_popular_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['popular_title'] );
    }
endif;



if ( ! function_exists( 'web_artist_popular_btn_title_partial' ) ) :
    // popular btn title
    function web_artist_popular_btn_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['popular_btn_title'] );
    }
endif;

if ( ! function_exists( 'web_artist_search_title_partial' ) ) :
    // search title
    function web_artist_search_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['search_title'] );
    }
endif;

if ( ! function_exists( 'web_artist_search_subtitle_partial' ) ) :
    // search subtitle
    function web_artist_search_subtitle_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['search_subtitle'] );
    }
endif;

if ( ! function_exists( 'web_artist_testimonial_title_partial' ) ) :
    // testimonial title
    function web_artist_testimonial_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['testimonial_title'] );
    }
endif;

if ( ! function_exists( 'web_artist_testimonial_button_partial' ) ) :
    // testimonial subtitle
    function web_artist_testimonial_button_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['testimonial_button'] );
    }
endif;

if ( ! function_exists( 'web_artist_blog_title_partial' ) ) :
    // blog title
    function web_artist_blog_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['blog_title'] );
    }
endif;


if ( ! function_exists( 'web_artist_blog_btn_title_partial' ) ) :
    // blog btn title
    function web_artist_blog_btn_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['blog_btn_title'] );
    }
endif;

if ( ! function_exists( 'web_artistduct_title_partial' ) ) :
    // product title
    function web_artistduct_title_partial() {
        $options = web_artist_get_theme_options();
        return esc_html( $options['product_title'] );
    }
endif;
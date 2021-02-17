<?php
add_action( 'customize_register', 'yala_blog_color_settings_register' );

function yala_blog_color_settings_register( $wp_customize ) {
$wp_customize->add_setting( 'yala_blog_theme_color_setting', array(
    'capability'        => 'edit_theme_options',
    'default'           => __('#1e73be','yala-blog'),
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'yala_blog_theme_color_setting',array(
    'label'                 =>  __( 'Theme Color', 'yala-blog' ),
    'section'               => 'colors',
    'type'                  => 'color',
    'priority'              => 0,
    'settings' => 'yala_blog_theme_color_setting',
) )
);
$wp_customize->add_setting( 'yala_blog_bc_color_setting', array(
    'capability'        => 'edit_theme_options',
    'default'           => __('#1e73be','yala-blog'),
    'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'yala_blog_bc_color_setting',array(
    'label'                 =>  __( 'BreadCrumb Background', 'yala-blog' ),
    'section'               => 'colors',
    'type'                  => 'color',
    'priority'              => 10,
    'settings' => 'yala_blog_bc_color_setting',
) )
);
}
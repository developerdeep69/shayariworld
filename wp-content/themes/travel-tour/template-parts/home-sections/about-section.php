<?php if( get_theme_mod( 'about_display_option', true ) ) : ?>
  <?php 
    $about_ID = absint( get_theme_mod( 'about_page' ) );
    $post = get_post( $about_ID );
    setup_postdata( $post );
  ?>
<?php $about_image = wp_get_attachment_image_src( get_post_thumbnail_id( $about_ID ), 'medium' ); ?>

<?php
  set_query_var( 'about_ID', $about_ID );
  set_query_var( 'about_image', $about_image );
?>

<?php
  $layout = get_theme_mod( 'about_section_layout', 'one' );
  if( $layout == 'one' ) {
    get_template_part( 'layouts/homepage/about/about-layout', 'one' );
  }
  if( $layout == 'two' ) {
    get_template_part( 'layouts/homepage/about/about-layout', 'two' );
  }
  if( $layout == 'three' ) {
    get_template_part( 'layouts/homepage/about/about-layout', 'three' );
  } 
?>

<?php wp_reset_postdata(); endif;
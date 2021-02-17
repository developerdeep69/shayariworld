<?php
/**
 * Search section
 *
 * This is the template for the content of search section
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */
if ( ! function_exists( 'web_artist_add_search_section' ) ) :
    /**
    * Add search section
    *
    *@since Web Artist 1.0.0
    */
    function web_artist_add_search_section() {
    	$options = web_artist_get_theme_options();
        // Check if search is enabled on frontpage
        $search_enable = apply_filters( 'web_artist_section_status', true, 'search_section_enable' );

        if ( true !== $search_enable ) {
            return false;
        }

        // Render search section now.
        web_artist_render_search_section();
    }
endif;
add_action( 'web_artist_content_end_action', 'web_artist_add_search_section', 5 );

if ( ! function_exists( 'web_artist_render_search_section' ) ) :
  /**
   * Start search section
   *
   * @return string search content
   * @since Web Artist 1.0.0
   *
   */
   function web_artist_render_search_section() {
        $options = web_artist_get_theme_options();
        
        ?>

        <div id="product-search" class="relative">
            <div class="wrapper">
            <div class="product-search-wrapper page-section" style="background-image:url('<?php echo esc_url( $options['search_bg_image'] ); ?>')">
                    <div class="entry-container">
                        <div class="section-header">
                            <span><?php echo esc_html( $options['search_subtitle'] ); ?></span>
                            <h2 class="section-title"><?php echo esc_html( $options['search_title'] ); ?></h2>
                        </div><!-- .section-header -->

                        <div class="section-content">

                            <?php 

                            if ( !class_exists('WooCommerce') ) {
                                get_search_form();
                            }else{
                                get_product_search_form();
                            }

                            ?>
                            
                        </div><!-- .section-content -->
                    </div><!-- .entry-container -->
                </div><!-- .product-wrapper -->
            </div><!-- .wrapper -->
        </div><!-- #product-wrapper -->

    <?php }
endif;
        
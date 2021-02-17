<?php
/**
 * Call to action section
 *
 * This is the template for the content of cta section
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */
if ( ! function_exists( 'web_artist_add_cta_section' ) ) :
    /**
    * Add cta section
    *
    *@since Web Artist 1.0.0
    */
    function web_artist_add_cta_section() {
    	$options = web_artist_get_theme_options();
        // Check if cta is enabled on frontpage
        $cta_enable = apply_filters( 'web_artist_section_status', true, 'cta_section_enable' );

        if ( true !== $cta_enable ) {
            return false;
        }
        // Get cta section details
        $section_details = array();
        $section_details = apply_filters( 'web_artist_filter_cta_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render cta section now.
        web_artist_render_cta_section( $section_details );
    }
endif;

if ( ! function_exists( 'web_artist_get_cta_section_details' ) ) :
    /**
    * cta section details.
    *
    * @since Web Artist 1.0.0
    * @param array $input cta section details.
    */
    function web_artist_get_cta_section_details( $input ) {
        $options = web_artist_get_theme_options();
        
        $content = array();
    
        $page_id = ! empty( $options['cta_content_page'] ) ? $options['cta_content_page'] : '';
        $args = array(
            'post_type'         => 'page',
            'page_id'           => $page_id,
            'posts_per_page'    => 1,
        );                    
           
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = web_artist_trim_content( 33 );
                $page_post['image']  	= get_the_post_thumbnail_url( get_the_id(), 'full' );

                // Push to the main array.
                array_push( $content, $page_post );
            endwhile;
        endif;
        wp_reset_postdata();

            
        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// cta section content details.
add_filter( 'web_artist_filter_cta_section_details', 'web_artist_get_cta_section_details' );


if ( ! function_exists( 'web_artist_render_cta_section' ) ) :
  /**
   * Start cta section
   *
   * @return string cta content
   * @since Web Artist 1.0.0
   *
   */
   function web_artist_render_cta_section( $content_details = array() ) {
        $options = web_artist_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } 

        foreach ( $content_details as $content ) : ?>

        <div id="cta" class="page-section" style="background-image:url('<?php echo esc_url( $content['image'] ); ?>')">
            <div class="overlay"></div>
            <div class="wrapper">
                <div class="cta-wrapper">
                    <div class="section-header">
                        <h2 class="section-title"><?php echo esc_html( $content['title'] ); ?></h2>
                    </div><!-- .section-header -->

                    <div class="section-content">
                        <div class="entry-content">
                            <p><?php echo esc_html( $content['excerpt'] ); ?></p>
                        </div><!-- .entry-content -->

                        <?php if( !empty($options['cta_btn_title']) ): ?>
                            
                        <div class="read-more">
                            <a href="<?php echo esc_url( $content['url'] ); ?>" class="btn btn-fill"><?php echo esc_html( $options['cta_btn_title'] ); ?></a>
                        </div><!-- .read-more -->

                    <?php endif; ?>

                    </div><!-- .section-content -->
                </div><!-- .cta-wrapper -->
            </div><!-- .wrapper -->
        </div><!-- #cta -->
        <?php endforeach; 
    }
endif;
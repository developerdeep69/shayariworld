<?php
/**
 * Blog section
 *
 * This is the template for the content of blog section
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */
if ( ! function_exists( 'web_artist_add_blog_section' ) ) :
    /**
    * Add blog section
    *
    *@since Web Artist 1.0.0
    */
    function web_artist_add_blog_section() {
    	$options = web_artist_get_theme_options();
        // Check if blog is enabled on frontpage
        $blog_enable = apply_filters( 'web_artist_section_status', true, 'blog_section_enable' );

        if ( true !== $blog_enable ) {
            return false;
        }
        // Get blog section details
        $section_details = array();
        $section_details = apply_filters( 'web_artist_filter_blog_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render blog section now.
        web_artist_render_blog_section( $section_details );
    }
endif;

if ( ! function_exists( 'web_artist_get_blog_section_details' ) ) :
    /**
    * blog section details.
    *
    * @since Web Artist 1.0.0
    * @param array $input blog section details.
    */
    function web_artist_get_blog_section_details( $input ) {
        $options = web_artist_get_theme_options();  

        // Content type.
        $blog_content_type  = $options['blog_content_type'];
        
        $content = array();
        switch ( $blog_content_type ) {

            case 'post':
                $post_ids = array();

                for ( $i = 1; $i <= 6; $i++ ) {
                    if ( ! empty( $options['blog_content_post_' . $i] ) )
                        $post_ids[] = $options['blog_content_post_' . $i];
                }
                
                $args = array(
                    'post_type'         => 'post',
                    'post__in'          => ( array ) $post_ids,
                    'posts_per_page'    => 6,
                    'orderby'           => 'post__in',
                    'ignore_sticky_posts'   => true,
                    );                    
            break;

            case 'recent':
                $cat_ids = ! empty( $options['blog_category_exclude'] ) ? $options['blog_category_exclude'] : array();
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 6,
                    'category__not_in'  => ( array ) $cat_ids,
                    'ignore_sticky_posts'   => true,
                    );                    
            break;

            default:
            break;
        }              

        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = web_artist_trim_content( 15 );
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';

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
// blog section content details.
add_filter( 'web_artist_filter_blog_section_details', 'web_artist_get_blog_section_details' );


if ( ! function_exists( 'web_artist_render_blog_section' ) ) :
  /**
   * Start blog section
   *
   * @return string blog content
   * @since Web Artist 1.0.0
   *
   */
   function web_artist_render_blog_section( $content_details = array() ) {
        $options = web_artist_get_theme_options();
        if ( empty( $content_details ) ) {
            return;
        } ?>

        <div id="recent" class="page-section relative">
            <div class="wrapper">
                <div class="section-header-wrapper clear">
                    <div class="section-header">
                        <h2 class="section-title"><?php echo esc_html( $options['blog_title'] ); ?></h2>
                    </div><!-- .section-header -->
                </div><!-- .section-header-wrapper -->

                <div class="section-content col-3">
                    <div class="archive-blog-wrapper clear">
                        
                        <?php foreach ( $content_details as $content ) : ?>

                        <article class="hentry">
                            <div class="post-wrapper">
                                <div class="featured-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');">
                                    <a href="<?php echo esc_url( $content['url'] ); ?>" class="post-thumbnail-link"></a>
                                </div><!-- .featured-image -->

                                <div class="entry-container">
                                    <div class="entry-meta">
                                        <span class="cat-links">
                                            <?php the_category( '', '', $content['id'] ); ?>
                                        </span>
                                        <?php web_artist_posted_on( $content['id'] ); ?>
                                    </div><!-- .entry-meta -->

                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                    </header>

                                    <div class="entry-content">
                                        <p><?php echo esc_html( $content['excerpt'] ); ?></a></p>
                                    </div><!-- .entry-content -->
                                </div><!-- .entry-container -->
                            </div><!-- .post-wrapper -->
                        </article>

                    <?php endforeach; ?>

                    </div><!-- .archive-blog-wrapper -->
                </div><!-- .section-content -->
            </div><!-- .wrapper -->
        </div>

    <?php }
endif;
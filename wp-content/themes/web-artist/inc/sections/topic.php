<?php
/**
* Topic section
*
* This is the template for the content of topic section
*
* @package Theme Palace
* @subpackage Web Artist
* @since Web Artist 1.0.0
*/
if ( ! function_exists( 'web_artist_add_topic_section' ) ) :
/**
* Add topic section
*
*@since Web Artist 1.0.0
*/
function web_artist_add_topic_section() {
    $options = web_artist_get_theme_options();
// Check if topic is enabled on frontpage
    $topic_enable = apply_filters( 'web_artist_section_status', true, 'topic_section_enable' );

    if ( true !== $topic_enable ) {
        return false;
    }
// Get topic section details
    $section_details = array();
    $section_details = apply_filters( 'web_artist_filter_topic_section_details', $section_details );

    if ( empty( $section_details ) ) {
        return;
    }

// Render topic section now.
    web_artist_render_topic_section( $section_details );
}
endif;

if ( ! function_exists( 'web_artist_get_topic_section_details' ) ) :
/**
* topic section details.
*
* @since Web Artist 1.0.0
* @param array $input topic section details.
*/
function web_artist_get_topic_section_details( $input ) {
    $options = web_artist_get_theme_options();

    $content = array();

    $page_ids = array();

    for ( $i = 1; $i <= 4; $i++ ) {
        if ( ! empty( $options['topic_content_page_' . $i] ) )
            $page_ids[] = $options['topic_content_page_' . $i];
    }

    $args = array(
        'post_type'         => 'page',
        'post__in'          => ( array ) $page_ids,
        'posts_per_page'    => 4,
        'orderby'           => 'post__in',
    );                    
        
    // Run The Loop.
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : 
        while ( $query->have_posts() ) : $query->the_post();
            $page_post['title']     = get_the_title();
            $page_post['url']       = get_the_permalink();

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
// topic section content details.
add_filter( 'web_artist_filter_topic_section_details', 'web_artist_get_topic_section_details' );


if ( ! function_exists( 'web_artist_render_topic_section' ) ) :
/**
* Start topic section
*
* @return string topic content
* @since Web Artist 1.0.0
*
*/
function web_artist_render_topic_section( $content_details = array() ) {
    $options = web_artist_get_theme_options();     

    if ( empty( $content_details ) ) {
        return;
    } ?>
    <div id="topics" class="page-section">
        <div class="wrapper">
            <div class="section-header-wrapper clear">
                <div class="section-header">
                    <h2 class="section-title"><?php echo esc_html( $options['topic_title'] ); ?></h2>
                </div>

                <?php if(!empty($options['topic_button'] ) && !empty($options['topic_button_url'])): ?>
                    <a href="<?php echo esc_url( $options['topic_button_url'] ); ?>" class="btn"><?php echo esc_html( $options['topic_button'] ); ?></a>
                <?php endif; ?>
            </div><!-- .section-header-wrapper -->

            <div class="section-content col-4 clear">
                <?php $i = 1; foreach ( $content_details as $content ) : ?>

                    <article class="hentry">
                        <div class="topic-wrapper">
                            <div class="topic-icon">
                                <a href="<?php echo esc_url( $content['url'] ); ?>">
                                    <i class="fa <?php echo ! empty( $options['topic_content_icon_' . $i] ) ? esc_attr( $options['topic_content_icon_' . $i] ) : 'fa-cogs'; ?>"></i>
                                </a>
                            </div><!-- .topic-icon -->

                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                            </header>
                        </div><!-- .topic-wrapper -->
                    </article>

                    <?php $i++; endforeach; ?>

                </div>
            </div><!-- .wrapper -->
        </div><!-- #topics -->
    <?php }
endif;

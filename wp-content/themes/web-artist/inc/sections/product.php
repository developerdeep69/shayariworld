<?php
/**
* recent_product section
*
* This is the template for the content of recent_product section
*
* @package Theme Palace
* @subpackage Web Artist Pro
* @since Web Artist Pro 1.0.0
*/
if ( ! function_exists( 'web_artist_add_product_section' ) ) :
/**
* Add recent_product section
*
*@since Web Artist Pro 1.0.0
*/
function web_artist_add_product_section() {
    $options = web_artist_get_theme_options();
// Check if recent_product is enabled on frontpage
    $product_enable = apply_filters( 'web_artist_section_status', true, 'product_section_enable' );

    if ( true !== $product_enable ) {
        return false;
    }
// Get recent_product section details
    $section_details = array();
    $section_details = apply_filters( 'web_artist_filter_product_section_details', $section_details );

    if ( empty( $section_details ) || !class_exists('WooCommerce') ) {
            return;
        }
// Render recent_product section now.
    web_artist_render_product_section( $section_details );
}
endif;

if ( ! function_exists( 'web_artist_get_product_section_details' ) ) :
/**
* recent_product section details.
*
* @since Web Artist Pro 1.0.0
* @param array $input recent_product section details.
*/
function web_artist_get_product_section_details( $input ) {
    $options = web_artist_get_theme_options();

    $content = array();

    $page_ids = array();

    for ( $i = 1; $i <= 8; $i++ ) {
        if ( ! empty( $options['product_content_product_' . $i] ) )
            $page_ids[] = $options['product_content_product_' . $i];
    }

    $args = array(
        'post_type'         => 'product',
        'post__in'          => ( array ) $page_ids,
        'posts_per_page'    => 8,
        'orderby'           => 'post__in',
    );

    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : 
        while ( $query->have_posts() ) : $query->the_post();
    $page_post['id']        = get_the_id();
    $page_post['title']     = get_the_title();
    $page_post['url']       = get_the_permalink();
    $page_post['excerpt']   = web_artist_trim_content( 10 );
    $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), array( 330, 250 )) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';

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
// recent_product section content details.
add_filter( 'web_artist_filter_product_section_details', 'web_artist_get_product_section_details' );


if ( ! function_exists( 'web_artist_render_product_section' ) ) :
/**
* Start recent_product section
*
* @return string recent_product content
* @since Web Artist Pro 1.0.0
*
*/
function web_artist_render_product_section( $content_details = array() ) {
    $options = web_artist_get_theme_options();

    if ( empty( $content_details ) ) {
        return;
    } ?>
    <div id="product-section" class="page-section no-padding-top">
        <div class="wrapper">
            <div class="section-header-wrapper clear">
                <div class="section-header">
                    <h2 class="section-title"><?php echo esc_html( $options['product_title'] ); ?></h2>
                </div><!-- .section-header -->
            </div><!-- .section-header-wrapper -->

            <div class="section-content">
                <ul class="products clear col-4">
                    <?php $i=1; foreach ( $content_details as $content ):  ?>
                    <li>
                        <article class="hentry">
                            <div class="product-item-wrapper">
                                <div class="featured-image">
                                    <a href="<?php echo esc_url( $content['url'] ) ; ?>">
                                        <img src="<?php echo esc_url( $content['image'] ); ?>" alt="<?php echo esc_html( $content['title'] ) ?>">
                                    </a>
                                </div><!-- .featured-image -->

                                <div class="entry-container">
                                    <h2 class="woocommerce-loop-product__title"><a href="<?php echo esc_url( $content['url'] ) ; ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>

                                    <span class="price">
                                        <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>
                                            <?php 
                                            $product = new WC_Product( $content['id'] );
                                            echo $product->get_price_html();
                                            ?>
                                        </span></ins>
                                    </span><!-- .price -->
                                </div><!-- .entry-container -->
                            </div><!-- .product-item-wrapper -->
                        </article>
                    </li>
                    <?php $i++; endforeach; ?>
                </ul>
            </div>

            <?php if(!empty($options['product_button'] ) && !empty($options['product_button_url'])): ?>
                <div class="read-more">
                    <a href="<?php echo esc_url( $options['product_button_url'] ); ?>" class="btn"><?php echo esc_html( $options['product_button'] ); ?></a>
                </div>
            <?php endif; ?>
        </div><!-- .wrapper -->
    </div><!-- .product-section --> 
    <?php }
    endif;
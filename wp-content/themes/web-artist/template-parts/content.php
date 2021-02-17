<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

$options = web_artist_get_theme_options();
$image     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';
?>

<article class="has-post-thumbnail">
    <div class="post-item-wrapper clear">

        <div class="featured-image" style="background-image:url(<?php echo esc_url( $image ) ?>);">
            <a class="post-thumbnail-link"></a>
        </div><!-- .featured-image -->

        <div class="entry-container">
            <div class="entry-meta">
                <?php web_artist_posted_on(); ?>

                <span class="cat-links">
                    <?php the_category( ' ', '' ) ?>
                </span><!-- .cat-links -->
            </div><!-- .entry-meta -->

            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div><!-- .entry-content -->
        </div><!-- .entry-container -->
    </div><!-- .post-item-wrapper -->
</article>
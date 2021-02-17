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
?>

<article class="hentry">
    <div class="entry-meta">
        <?php 
        	if ( ! $options['single_post_hide_author'] ) : 
	        	echo web_artist_author(); 
	        endif;
         ?>

        <span class="posted-on">
        	<?php 
        	if ( ! $options['single_post_hide_date'] ) : 
        		web_artist_posted_on();
        	endif; ?>
    </div><!-- .entry-meta -->

    <div class="entry-container">
        <div class="entry-content">
            <?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'web-artist' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'web-artist' ),
					'after'  => '</div>',
				) );
			?>
        </div><!-- .entry-content -->
    </div><!-- .entry-container -->

    <div class="entry-meta">
        <span class="cat-links">
            <?php web_artist_single_categories(); ?>
        </span><!-- .cat-links -->       
    </div><!-- .entry-meta -->
</article>



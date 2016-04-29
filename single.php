<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Developer theme
 * @since Developer theme 1.0
 */

get_header(); ?>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );

        // Show comments if open.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        // Previous/next post navigation.
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'developer-theme' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'developer-theme' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'developer-theme' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'developer-theme' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );

    endwhile;
    ?>

<?php get_footer(); ?>

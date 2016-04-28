<?php
/**
* The template for the frontpage and files missing templates.
*
* @package Developer theme
* @since Developer theme 1.0
*/

get_header(); ?>

    <?php if ( have_posts() ) : ?>

        <?php if ( is_home() && ! is_front_page() ) : ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            get_template_part( 'content', get_post_format() );

            // End the loop.
        endwhile;

        // Previous/next page navigation.
        the_posts_pagination( array(
            'prev_text'          => __( 'Previous page', 'developer-theme' ),
            'next_text'          => __( 'Next page', 'developer-theme' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'developer-theme' ) . ' </span>',
        ) );

    // If no content, include the "No posts found" template.
    else :
        get_template_part( 'content', 'none' );
        echo "None";
    endif;
    ?>

<?php get_footer(); ?>
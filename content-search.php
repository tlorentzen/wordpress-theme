<?php
/**
 * The template part for displaying results in search pages
 *
 * @package Developer theme
 * @since Developer theme 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <span class="text-muted date-span">Published: <?php the_time('j F Y'); ?></span><?php edit_post_link( __( 'Edit', 'developer-theme' ), ' - <span class="edit-link">', '</span>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->

    <?php if ( 'post' == get_post_type() ) : ?>

        <footer class="entry-footer">


        </footer><!-- .entry-footer -->

    <?php else : ?>

        <?php edit_post_link( __( 'Edit', 'developer-theme' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

    <?php endif; ?>

</article><!-- #post-## -->
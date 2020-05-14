<? php
/**
 * Content article single file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header">
        <?php
        // if (is_sticky() && is_home() && !is_paged()) {
        //     printf('<span class="sticky-post">%s</span>', _x('Featured', 'post', 'rumble-inn'));
        // }
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        endif;
        ?>
    </div>
    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                get_the_title()
            )
        );
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __('Pages:', 'rumble-inn'),
                'after'  => '</div>',
            )
        );
        ?>
    </div>

    <div class="entry-footer">
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
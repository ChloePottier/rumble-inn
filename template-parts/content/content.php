<?php
/**
 * Content article single file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="image-blog">
       
    </div>
    <div class="content-blog">
    <?php
        // if (is_sticky() && is_home() && !is_paged()) {
        //     printf('<span class="sticky-post">%s</span>', _x('Featured', 'post', 'rumble-inn'));
        // }
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
        endif;
        ?>
        <?php
        the_content(
            sprintf(
                get_the_title()
            )
        );
    
        ?>
    </div>
</article>
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
    </div><!-- .entry-content -->

    <div class="entry-footer">
        <?php the_autor(); ?>
    </div><!-- .entry-footer -->



</article><!-- #post-<?php the_ID(); ?> -->
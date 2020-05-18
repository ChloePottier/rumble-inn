<?php

/**
 * Reference single, file for the Rumble Inn theme blog
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
get_header();
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <h2><?php the_field('titre-reference'); ?></h2>
            </div>
            <div class="col-12">
                <img src="<?php the_field('image-reference'); ?>" />

                <p><?php
                    // the_content(); 
                    ?>
                </p>
                
            </div>
        </div>
    </div>
</article>
<?php
get_footer();
?>

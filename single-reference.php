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
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="<?php the_field('image-reference'); ?>" class="image-reference w-100" />
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0">
                <?php  the_field('description-reference'); ?>
            </div>
                
            
        </div>
    </div>
</article>
<?php
get_footer();
?>

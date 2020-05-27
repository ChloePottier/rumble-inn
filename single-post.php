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
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <?php $image = get_field('image_article'); ?>
                <img src="<?php echo $image ?>" class="image-responsive-blog" />
            </div>
            <div class="col-6">
                <span class="text-uppercase font-family-cocogoose-light m-0 author"><?php the_author(); ?></span>
                <span class="date m-0"><?php the_date() ?></span>
                <h4 class="font-family-cocogoose pt-2 m-0"><?php the_field('titre_article'); ?></h4>
                <p class="m-0 text-justify"><?php the_field('detail_article'); ?></p>
            </div>
        </div>
    </div>
</article>
<?php
get_footer();
?>
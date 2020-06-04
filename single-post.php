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
            <div class="col-12"></div>
            <div class="col-12 col-md-4">
                <?php $image = get_field('image_article'); ?>
                <img src="<?php echo $image ?>" class="image-responsive-blog w-100" />
            </div>
            <div class="col-12 col-md-8 pt-4 pt-md-0">
                <h4 class="font-family-cocogoose pt-2 m-0"><?php the_field('titre_article'); ?></h4>
                <p class="m-0 text-justify"><?php the_field('detail_article'); ?></p>
               <!-- <div class="text-uppercase font-family-cocogoose-light m-0 author">-->
                   <?php
                //  the_author(); 
                 ?>
                <div class="date text-capitalize m-0"><?php the_field('date_article') ?></div>
                <!--<div class="mt-3 mt-md-0 pt-3 text-center text-md-right"><a href="-->
                <?php
                //  echo the_field('lien_article');
                  ?>
                <!--" target="_blank" class="btn-lien-article p-3">Suivre le lien</a></div>-->
            </div>
        </div>
    </div>
</article>
<?php
get_footer();
?>
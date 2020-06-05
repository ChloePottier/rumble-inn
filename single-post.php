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
    <div class="container pb-5">
        <div class="row pt-5 d-md-none">
            <div class="col-12">
                <h1> <?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <?php $image = get_field('image_article'); ?>
                <img src="<?php echo $image ?>" class="image-responsive-blog w-100" />
            </div>
            <div class="col-12 col-md-8 pt-4 pt-md-0 text-justify">
                <h4 class="font-family-cocogoose m-0"><?php the_field('titre_article'); ?></h4>
                <?php the_field('detail_article'); ?>
                <div class="date text-capitalize m-0 text-blue"><?php the_field('date_article') ?></div>
                <!--<div class="mt-3 mt-md-0 pt-3 text-center text-md-right"><a href="-->
                <a class="deezer" href="<?php the_field('lien_deezer'); ?> " target="_blank">DEezer</a>
                <!--" target="_blank" class="btn-lien-article p-3">Suivre le lien</a></div>-->
            </div>
        </div>
    </div>
</article>
<?php
get_footer();
?>
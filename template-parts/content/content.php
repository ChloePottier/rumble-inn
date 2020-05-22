<?php

/**
 * Content article single file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
$loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 6, 'paged' => $paged));
while ($loop->have_posts()) : $loop->the_post();
    $image = get_field('image_article'); ?>
    <div class="col-12 col-md-6 d-flex flex-column flex-sm-row align-items-center pb-5 pb-sm-3 pb-md-0" id="post-<?php the_ID(); ?>">
        <div class="image-blog w-100 w-sm-auto mw-50">
            <img src="<?php echo $image ?>" class="image-responsive-blog" />
        </div>
        <a href=" <?php the_field('lien_article'); ?>" target="_blank" class="content-blog w-100 w-sm-50 py-3 py-sm-2 px-3">
            <span class="text-uppercase font-family-cocogoose-light m-0 author"><?php the_author(); ?></span>
            <span class="date m-0"><?php the_date() ?></span>
            <h4 class="font-family-cocogoose pt-2 m-0"><?php the_field('titre_article'); ?></h4>
            <p class="m-0 text-justify"><?php the_field('detail_article'); ?></p>

        </a>
    </div>
    <!--  -->
<?php endwhile; ?>
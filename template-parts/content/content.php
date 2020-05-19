<?php
/**
 * Content article single file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" class="row">
    <?php $loop = new WP_Query(array('post_type' => 'post', 'paged' => $paged));
            while ($loop->have_posts()) : $loop->the_post();
                $image = get_field('image_article'); ?>
                <div class="col-12 col-md-6 d-flex pb-3 pb-md-0">
                    <div class="image-blog w-50">
                        <img src="<?php echo $image ?>" class="image-responsive-blog" />
                    </div>
                    <a href=" <?php the_field('lien_article'); ?>" class="content-blog w-50 py-2 px-3">
                        <h5 class="text-uppercase font-family-cocogoose-light m-0"><?php the_author(); ?></h5>
                        <p class="date m-0"><?php the_date() ?></p>
                        <h4 class="font-family-cocogoose pt-2 m-0"><?php the_field('titre_article'); ?></h4>
                        <p class="m-0 text-justify"><?php the_field('detail_article'); ?></p>
                        
                    </a>
                </div>
                <!--  -->
            <?php endwhile; ?>
</article>
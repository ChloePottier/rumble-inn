<?php
// *************VERSION BLOCS COMME PAGE ACTUS

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
    <!--<a href="" class="col-12 col-md-6 col-lg-4 btn-accueil pb-4">-->
        <?php echo sprintf('<a href="%s" rel="bookmark" class="col-12 col-md-6 col-lg-4 btn-accueil pb-4">', esc_url(get_permalink())) ?>
        <figure class="snip1581 bg-black text-white">
            <img src="<?php echo $image ?>" class="img-btn-accueil w-100" width="" height="" />
            <div class=" text-bloc-blog position-absolute text-white text-uppercase">
                <h3 class=""><?php the_field('titre_article'); ?></h3>
                <p class=""><?php the_field('resume_article'); ?></p>
                <span class="date m-0"><?php the_date('Y') ?></span>
                
            </div>

        </figure>
    </a>
<?php endwhile; ?>
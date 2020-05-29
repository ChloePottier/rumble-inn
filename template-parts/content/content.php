<?php
// *************VERSION BLOCS COMME SPREAD
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
    <div class="col-12 col-md-6 col-lg-4 mb-5 text-white">
        <div>
            <img src="<?php echo $image ?>" class="image-responsive-blog w-100" />
        </div>
        <div class="bg-blue h-100 p-4 content-blocs">
            <h3 class="bg-dark d-inline py-2 px-3 position-absolute"><?php the_field('titre_article'); ?></h3>
            
            <p class="details-prestations mt-5"><?php the_field('detail_article'); ?></p>

        </div>
    </div>
<?php endwhile; ?>
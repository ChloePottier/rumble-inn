<?php /**
 * Content article single file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
$loop = new WP_Query(array(
    'post_type' => 'post', 'paged' => $paged, 'meta_key' => 'date_article',
    'orderby' => 'meta_value', 'order' => 'DESC'));
while ($loop->have_posts()) : $loop->the_post();
    $image = get_field('image_article');
    $text = get_field('detail_article') ?>
    <div class="col-12 col-md-6 col-lg-4 mb-5 text-white">
        <div class="img-blog">
            <img src="<?php echo $image ?>" class="image-responsive-blog " />
        </div>
        <div class="bg-blue p-4 content-blocs">
            <h3 class="bg-dark d-inline py-2 px-3 position-absolute"><?php the_field('titre_article'); ?></h3>
            <div class="details-blog mb-4"><?php echo custom_field_excerpt_longer(); ?></div>
            <?php echo sprintf('<a href="%s" rel="bookmark" class="col-12 col-md-6 col-lg-4 read-more text-right">', esc_url(get_permalink())) ?>
            Lire la suite... </a>
        </div>
    </div>
<?php endwhile; ?>
<div class="col-12 d-flex mb-5">
    <?php echo theme_pagination();
    // On réinitialise à la requête principale (important)
    wp_reset_postdata();
    wp_reset_query(); ?>
</div>
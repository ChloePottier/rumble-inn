<?php
/**
 * Content article single file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */ ?>

<?php $loop = new WP_Query(array(
    'post_type' => 'post', 'paged' => $paged, 'meta_key' => 'date_article',
    'orderby' => 'meta_value', 'order' => 'DESC'));
if (have_posts()) : 
while ($loop->have_posts()) : $loop->the_post();
    $image = get_field('image_article');
    $text = get_field('detail_article') ?>
    <div class="col-12 col-md-6 col-lg-4 mb-5 text-white">
        <div class="img-blog">
            <?php if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="image-responsive-blog " width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="mr-3"/>
                <?php endif; ?>
        </div>
        <div class="bg-blue p-4 content-blocs">
            <h3 class="bg-dark d-inline py-2 px-3 position-absolute"><?php the_field('titre_article'); ?></h3>
            <div class="details-blog mb-4"><?php echo custom_field_excerpt_longer(); ?></div>
            <?php echo sprintf('<a href="%s" rel="bookmark" class="col-12 col-md-6 col-lg-4 read-more text-right">', esc_url(get_permalink())) ?>
            Lire la suite... </a>
        </div>
    </div>
<?php endwhile;
endif; ?>
<div class="col-12 d-flex mb-5">
    <?php
    echo theme_pagination();
    // On réinitialise à la requête principale (important)
    wp_reset_postdata();
    wp_reset_query();
    ?>
</div>
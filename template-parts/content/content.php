<?php
// *************avec ancienne BDD
/**
 * Content article single file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
$loop = new WP_Query(array('post_type' => 'post','paged' => $paged, 'meta_key' => 'date_article',
'orderby' => 'meta_value', 'order' => 'DESC'));
while ($loop->have_posts()) : $loop->the_post();
    $image = get_field('image_article'); 
    $text = get_field('detail_article')?>
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
<?php endwhile;
echo 'ANCIENS ARTICLES';

//BDD news. ancien site jarring-effects-studio
global $wpdb;
$resultats = $wpdb->get_results("SELECT * FROM news WHERE `idrubrique`= 1 ORDER BY datecreation DESC") ;
foreach ($resultats as $post) {?>
<?php $urlImage = home_url( '/wp-content/uploads'); ?>
        <div class="col-12 col-md-6 col-lg-4 btn-accueil">
        
            <img src="<?php echo $urlImage.'/'.$post->image?>" class="w-100" width="" height="" />
            <div class=" text-bloc-blog">
                <h3 class=" text-uppercase"><?php echo $post->titre; ?></h3>
                <span class="date m-0 font-weight-bold"><?php echo $post->tags ; ?></span>
                <p class=""><?php echo $post->texte ;  ?></p>
            </div>
        
        </div>
<?php }?>


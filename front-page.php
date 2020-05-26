<!-- Theme Name: Rumble Inn Home
Author: Chloé Pottier
Description: Thème Rumble Inn
Version: 1.0 -->
<?php
/**
 * Homepage file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */

get_header();
?>
<div class="container-fluid pt-5" id="accueil"></div>
    <div class="container">
        <div class="row d-flex flex wrap">
        <?php $loop = new WP_Query(array('post_type' => 'accueil', 'paged' => $paged));
            while ($loop->have_posts()) : $loop->the_post();
            $image = get_field('image_btn_accueil'); ?>
                <div class="col-12 col-md-6 col-lg-4 btn-accueil">
                <img src="<?php echo $image ?>" class="img-btn-accueil w-100" width="" height="" />

                    <?php
                    // the_title('<h3 class="entry-title font-family-cocogoose-light"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h3>'); 
                    ?>
                    <h3 class="position-absolute"><?php the_field('titre_btn_accueil'); ?></h3>
                </div>
                
            <?php endwhile; ?>
        </div>
    </div>
</div>



<?php
get_footer();
?>
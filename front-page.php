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
get_header(); ?>
<div class="container-fluid pt-3" id="accueil" itemscope itemtype="https://schema.org/Organization">
    <div class="container" itemscope itemtype="https://schema.org/BreadcrumbList">
        <div class="row d-flex flex wrap pb-5 pt-3 pt-lg-0">
            <?php $loop = new WP_Query(array('post_type' => 'accueil', 'paged' => $paged, 'order' => 'ASC'));
            if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post();
            $image = get_field('image_btn_accueil'); ?>
                <a href="<?php the_field('lien_page'); ?>" class="col-12 col-md-6 col-lg-4 btn-accueil pb-4" itemprop='url'>
                    <figure class="snip1581 bg-black text-white">
                        <?php  if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" class="img-btn-accueil w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" itemprop="image"/>
                         <?php endif; ?>
                    </figure>
                    <h3 class="bg-dark d-inline py-2 px-3 position-absolute text-uppercase text-white" itemprop="name"><?php the_field('titre_btn_accueil'); ?></h3>
                </a>
                
            <?php endwhile;
            endif; 
            wp_reset_postdata();?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

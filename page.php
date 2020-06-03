<?php

/**
 * Modèle de page pour le thème Rumble Inn
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?><?php get_header() ?>
<?php
// Si on est sur la PAGE STUDIO
if (is_page(1905)) : ?>
    <div class="container-fluid" id="studio">
        <div class="container">
            <div class="row">
                <?php $loop = new WP_Query(array('post_type' => 'studio', 'post__not_in' => array(20055, 20058), 'paged' => $paged, 'order'   => 'ASC'));
                while ($loop->have_posts()) : $loop->the_post();
                    $image = get_field('image_publication_studio'); ?>
                    <div class="col-12 pb-5">
                        <h3 class="pt-5 pb-2"><?php the_field('titre_publication_studio'); ?></h3>
                        <?php the_field('description_publication_studio'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <section class="container-fluid py-5 bg-burger" id="studio-equipement">
        <div class="container">
            <div class="row">
                <!-- affichage de l'article matériel du studio -->
                <?php $loop2 = new WP_Query(array('post_type' => 'studio', 'post__in' => array(20055), 'paged' => $paged, 'order'   => 'ASC'));
                while ($loop2->have_posts()) : $loop2->the_post();
                    $image = get_field('image_publication_studio'); ?>
                    <div class="col-12- col-md-6">
                        <h3 class="pt-5 pb-2"><?php the_field('titre_publication_studio'); ?></h3>
                        <div class="content-materiel">
                            <?php the_field('description_publication_studio'); ?>
                        </div>
                    </div>
                    <!--  -->
                <?php endwhile; ?>
                <!-- affichage de l'article plan du studio -->
                <?php $loop2 = new WP_Query(array('post_type' => 'studio', 'post__in' => array(20058), 'paged' => $paged, 'order'   => 'ASC'));
                while ($loop2->have_posts()) : $loop2->the_post();
                    $image = get_field('image_publication_studio'); ?>
                    <div class="col-12- col-md-6">
                        <h3 class="pt-5 pb-2"><?php the_field('titre_publication_studio'); ?></h3>
                        <div class="content-plan">
                            <?php the_field('description_publication_studio'); ?>
                        </div>
                    </div>
                    <!--  -->
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!--galerie photos -->
<?php
// PAGE REFERENCES
elseif (is_page(20101)) :     ?>
    <div class="container-fluid" id="references">
        <div class="container">
            <!-- Soundcloud -->
            <div class="row pb-5 d-flex justify-content-center">
                <div class="col-4">
                    <!-- widget pour lien soundcloud -->
                    <?php if (is_active_sidebar('widget-soundcloud')) :
                        dynamic_sidebar('widget-soundcloud');
                    endif; ?>
                </div>
            </div>
            <!-- YouTube -->
            <div class="row py-5 youtube">
                <?php $loop = new WP_Query(array('post_type' => 'videos_youtube', 'paged' => $paged));
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <h3 class="bg-dark d-inline py-2 px-3 position-absolute text-white z-index-1500"><?php the_field('titre_video'); ?></h3>
                        <div class="embed-container">
                            <?php the_field('lien_youtube'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <!-- Artistes de références, références en production -->
            <div class="row py-5 d-flex justify-content-between justify-content-md-center justify-content-lg-between artistes-ref">
                <div class="col-12">
                    <h3 class="pb-2">Nos références en production</h3>
                </div>
                <!-- Récupérer les articles de type référence -->
                <?php $loop = new WP_Query(array('post_type' => 'reference', 'posts_per_page' => 5, 'paged' => $paged));
                while ($loop->have_posts()) : $loop->the_post();
                    $image = get_field('image-reference'); ?>
                    <div class="text-center text-sm-left col-12 col-sm-6 col-md-4 col-lg-2 pb-2">
                        <div class="entry-header text-center text-sm-left font-family-cocogoose-light">
                            <?php the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark" class="lien-reference-single">', esc_url(get_permalink())), '</a></h3>'); ?>
                        </div>
                        <div class="entry-content">
                            <img src="<?php echo $image ?>" class="img-fluid" />
                        </div>
                    </div>
                    <!--  -->
                <?php endwhile; ?>
            </div>
            <!-- post-production -->
            
            <div class="row justify-content-between mb-5">
            <div class="col-12">
                    <h3 class="pb-2">Nos références en post production</h3>
                </div>
                <?php $loop = new WP_Query(array('post_type' => 'postproduction', 'paged' => $paged));
                while ($loop->have_posts()) : $loop->the_post();
                    $image = get_field('image_trailer'); ?>
                    <div class="col-12 col-md-6 card h-280 mb-4">
                        <a href="<?php the_field('url_trailer'); ?>" target="_blank">
                            <div class="card__side card__side--back">
                                <div class="text-center d-flex flex-column align-items-center justify-content-center bg-bordeau w-100 h-280">
                                    <h4 class=" pt-2 text-uppercase text-grey-dark"><?php the_field('nom_trailer'); ?></h4>
                                    <p class="text-uppercase text-white"><?php the_field('description_trailer'); ?></p>
                                </div>
                            </div>
                            <div class="card__side card__side--front h-280">
                                <img src="<?php echo $image ?>" class="img-trailer" width="" height="" />
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <!-- Galerie photos -->
        </div>
    </div>
    <!-- PAGE PRESTATIONS-->
<?php elseif (is_page(20116)) :     ?>
    <div class="container-fluid " id="prestations">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row py-5">
                        <?php $loop = new WP_Query(array('post_type' => 'prestations', 'paged' => $paged));
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="col-12 col-md-6 col-lg-4 mb-5 text-white">
                                <div class="bg-blue h-100 p-4 content-blocs">
                                    <h3 class="bg-dark d-inline py-2 px-3 position-absolute"><?php the_field('titre_prestation'); ?></h3>
                                    <p class="details-prestations mt-5"><?php the_field('details_prestation'); ?></p>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>

    <!-- PAGE 360 (tous les labels,...) -->
<?php elseif (is_page(20123)) :     ?>
    <div class="container-fluid" id="labels">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row py-5 justify-content-center">
                        <div class="col-12 font-family-cocogoose text-center">
                            <?php the_content(); ?>
                        </div>
                        <?php $loop = new WP_Query(array('post_type' => 'label', 'paged' => $paged, 'order' => 'ASC'));
                        while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('logo_label'); ?>
                            <div class="col-6 col-sm-4 col-lg-2 my-5 text-center">
                                <a href="<?php the_field('lien_site'); ?>" target="_blank">
                                    <img src="<?php echo $image ?>" class="logo-label" />
                                    <h3 class="description-label text-uppercase mt-2"><?php the_field('description_label'); ?></h3>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
    <!-- Sinon -->
<?php else :     ?>
    <div class="container-fluid" id="page-<?php the_ID(); ?>">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row py-5">
                        <div class="col-12 pb-3">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="col-12">
                            <?php the_content(); ?>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
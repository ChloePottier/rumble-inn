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
// Si on est sur la page studio alors afficher le post-type studio
if (is_page(1905)) : ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h1> <?php the_title(); ?></h1>
                </div>
            </div>
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
// sinon si c'est une page différent de studio, afficher :
else :
    if (have_posts() && 'studio' != get_post_type()) :
        while (have_posts()) : the_post(); ?>
            <div class="container-fluid">
                <div class="container">
                    <div class="row pt-5 pb-2">
                        <div class="col-12">
                            <!-- on récupère grace à cela le titre de la page -->
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="col-12">
                            <!-- L'image de présentation -->
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);
                            } ?>
                        </div>
                        <div class="col-12">
                            <!-- Le contenu -->
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
<?php endwhile;
    // sinon la page est indisponible
    else : echo '<p> Cette page n\'est pas disponible</p>';
    endif;
endif; ?>
<?php get_footer() ?>
<?php

/**
 * Modèle de page pour le thème Rumble Inn
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
get_header() ?>
<?php if (is_page(1905)) : ?>
    <?php if (have_posts()) : ?>
        <!-- Si on est sur la PAGE STUDIO-->
        <?php while (have_posts()) : the_post(); ?>
            <div class="container-fluid" id="studio"  itemscope itemtype="https://schema.org/CreativeWork">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-12">
                            <h1 itemprop="name"> <?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="row" itemscope itemtype="https://schema.org/organization">
                        <?php $loop = new WP_Query(array('post_type' => 'studio', 'post__not_in' => array(20055, 20058, 20500), 'paged' => $paged, 'order'   => 'ASC'));
                        while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image_publication_studio');
                            $titrePublication = get_field('titre_publication_studio');
                            if ($titrePublication != '') {
                                echo '<h3 class="p-0 bg-blue text-white p-2 w-auto" itemprop="text">' . $titrePublication . '</h3>';
                            } ?>
                            <div class="col-12 pb-3 text-justify text-studio" itemprop="description">
                                <?php the_field('description_publication_studio'); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <section class="container-fluid py-5 bg-grey-light" id="studio-equipement" itemscope itemtype="https://schema.org/Organization">
                <div class="container">
                    <div class="row" >
                        <!-- affichage de l'article matériel du studio -->
                        <span itemscope itemtype="https://schema.org/ListItem">
                        <?php $loop2 = new WP_Query(array('post_type' => 'studio', 'post__in' => array(20055), 'paged' => $paged, 'order'   => 'ASC'));
                        while ($loop2->have_posts()) : $loop2->the_post();
                            $image = get_field('image_publication_studio'); ?>
                            <div class="col-12 col-md-6 " itemprop="item">
                                <?php the_field('description_publication_studio'); ?>
                            </div>
                            <!--  -->
                        <?php endwhile; ?>
                        </span>
                        <div class="col-12 col-md-6" id="plan-studio" itemscope itemtype="https://schema.org/FloorPlan">
                            <!-- affichage de l'article plan du studio -->
                            <?php $loop2 = new WP_Query(array('post_type' => 'studio', 'post__in' => array(20058), 'paged' => $paged, 'order'   => 'ASC'));
                            while ($loop2->have_posts()) : $loop2->the_post();
                                $image = get_field('image_publication_studio'); ?>
                                <div itemprop="layoutImage">
                                    <h3 class="pt-0 pb-2" itemprop="text"><?php the_field('titre_publication_studio'); ?></h3>
                                    <div class="content-plan w-100 d-flex justify-content-center" itemprop="image">
                                        <?php the_field('description_publication_studio'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <div>
                                <?php $loop2 = new WP_Query(array('post_type' => 'studio', 'post__in' => array(20500), 'paged' => $paged, 'order'   => 'ASC'));
                                while ($loop2->have_posts()) : $loop2->the_post();
                                    $image = get_field('image_publication_studio'); ?>

                                    <h3 class="pt-0 pb-2" itemprop="text"><?php the_field('titre_publication_studio'); ?></h3>
                                    <div class="content-plan w-100" itemprop="image">
                                        <?php the_field('description_publication_studio'); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php endwhile;
    endif ?>
<?php
// PAGE REFERENCES
elseif (is_page(20101)) :     ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="container-fluid " id="references" itemscope itemtype="https://schema.org/MusicGroup">
                <div class="container">
                    <div class="row pt-4 ">
                        <div class="col-12">
                            <h1 itemprop="text"> <?php the_title(); ?></h1>
                        </div>
                    </div>
                    <!-- Soundcloud -->
                    <div class="row pt-3 pb-4 d-flex justify-content-center"  itemscope itemtype="https://schema.org/CreativeWork">
                        <div class="col-12 col-md-6 col-xl-4" itemscope itemtype="https://schema.org/MusicPlaylist" itemprop="track">
                            <!-- widget pour lien soundcloud -->
                            <?php if (is_active_sidebar('widget-soundcloud')) :
                                dynamic_sidebar('widget-soundcloud');
                            endif; ?>
                        </div>
                        <div class="col-12 col-md-6 col-xl-5 pt-4 pt-lg-0" itemprop="image">
                            <?php if (is_active_sidebar(' widget-nuage-groupe')) :
                                dynamic_sidebar(' widget-nuage-groupe');
                            endif; ?>
                        </div>
                    </div>
                    <!-- YouTube -->
                    <div class="row py-4 video-youtube" itemscope itemtype="https://schema.org/CreativeWork">
                        <div class="col-12">
                            <h3 class="pb-2" itemprop="text">Nos références en production</h3>
                        </div>
                        <?php $loop = new WP_Query(array('post_type' => 'videos_youtube', 'paged' => $paged));
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3 " itemscope itemtype="https://schema.org/VideoObject">
                                <h4 class="bg-dark d-inline py-2 px-3 position-absolute text-white z-index-900" itemprop="name"><?php the_field('titre_video'); ?></h4>
                                <div class="embed-container" itemprop="video">
                                    <?php the_field('lien_youtube'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- post-production -->
                    <div class="row pt-4 mb-5" itemscope itemtype="https://schema.org/CreativeWork">
                        <div class="col-12">
                            <h3 class="pb-2" itemprop="text">Nos références en post production</h3>
                        </div>
                        <?php $loop = new WP_Query(array('post_type' => 'postproduction', 'paged' => $paged));
                        while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image_trailer'); ?>
                            <div class="col-12 col-md-6 card h-280 mb-4" itemscope itemtype="https://schema.org/VideoObject">
                                <a href="<?php the_field('url_trailer'); ?>" target="_blank" itemprop='url'>
                                    <div class="card__side card__side--back">
                                        <div class="text-center d-flex flex-column align-items-center justify-content-center bg-blue w-100 h-280">
                                            <h4 class=" pt-2 text-uppercase text-grey-dark" itemprop="name"><?php the_field('nom_trailer'); ?></h4>
                                            <p class="text-uppercase text-white" itemprop="description"><?php the_field('description_trailer'); ?></p>
                                        </div>
                                    </div>
                                    <div class="card__side card__side--front h-280">
                                        <?php if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" class="img-trailer" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" itemprop="thumbnails"/>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
    <!-- PAGE PRESTATIONS / SERVICES -->
<?php elseif (is_page(20116)) :     ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="container-fluid " id="prestations" itemscope itemtype="https://schema.org/Services">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-12">
                            <h1> <?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="row pt-4 pt-md-3 pb-5" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
                        <?php $loop = new WP_Query(array('post_type' => 'prestations', 'paged' => $paged));
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="col-12 col-md-6 col-lg-4 mb-5 text-white" >
                                <div class="bg-blue h-100 content-blocs" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                                    <h3 class="bg-dark d-inline py-2 px-3 position-absolute" itemprop="name"><?php the_field('titre_prestation'); ?></h3>
                                    <div class="picto text-white text-right mr-4"><?php the_field('picto_prestation'); ?></div>
                                    <p class="details-prestations m-4" itemprop="description"><?php the_field('details_prestation'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
    <!-- PAGE 360 (la constellation, tous les labels,...) -->
<?php elseif (is_page(20123)) :     ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="container-fluid" id="labels" itemscope itemtype="https://schema.org/Organization">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-12">
                            <h1> <?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="row py-5 justify-content-center">
                        <?php $loop = new WP_Query(array('post_type' => 'label', 'paged' => $paged, 'order' => 'ASC'));
                        while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('logo_label'); ?>
                            <div class="col-6 col-sm-4 col-lg-2 my-5 text-center">
                                <a href="<?php the_field('lien_site'); ?>" target="_blank" itemprop="url">
                                    <img src="<?php echo $image ?>" class="logo-label" itemprop="logo"/>                                
                                    <h3 class="description-label text-uppercase mt-2" itemprop="name"><?php the_field('description_label'); ?></h3>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        <div class="col-12 font-family-cocogoose text-center">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
<?php else :     ?>
    <!-- Sinon (si c'est une autre page -->
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
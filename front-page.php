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
<!-- Le studio -->
<section class="container-fluid py-5" id="studio">
    <div class="container">
        <!-- récupérer le contenu de la page studio (type page) -->
        <h2><?php echo get_post_field('post_title', '1905'); ?></h2>
        <p><?php echo get_post_field('post_content', '1905'); ?></p>
    </div>
</section>
<!-- BLOG -->
<section class="container-fluid py-5" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Blog</h2>
            </div>
        </div>
        <div class="row">
            <?php $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 6, 'paged' => $paged));
            while ($loop->have_posts()) : $loop->the_post();
                $image = get_field('image_article'); ?>
                <div class="col-12 col-md-6 d-flex pb-3 pb-md-0">
                    <div class="image-blog w-50">
                        <img src="<?php echo $image ?>" class="image-responsive-blog" />
                    </div>
                    <a href=" <?php the_field('lien_article'); ?>" class="content-blog w-50 py-2 px-3">
                        <span class="text-uppercase font-family-cocogoose-light m-0 author"><?php the_author(); ?></span>
                        <span class="date m-0"><?php the_date() ?></span>
                        <h4 class="font-family-cocogoose pt-2 m-0"><?php the_field('titre_article'); ?></h4>
                        <p class="m-0 text-justify"><?php the_field('detail_article'); ?></p>

                    </a>
                </div>
                <!--  -->
            <?php endwhile; ?>

        </div>
    </div>
</section>
<!-- REFERENCES -->
<section class="container-fluid py-5" id="references">
    <div class="container">
        <!-- Soundcloud -->
        <div class="row">
            <div class="col-12">
                <!-- widget pour lien soundcloud -->
                <?php if (is_active_sidebar('widget-soundcloud')) :
                    dynamic_sidebar('widget-soundcloud');
                endif; ?>
            </div>
        </div>
        <!-- YouTube -->
        <div class="row py-5 youtube">
            <?php $loop = new WP_Query(array('post_type' => 'videos_youtube', 'paged' => $paged));
            while ($loop->have_posts()) : $loop->the_post();
            ?>
                <div class="col-12 col-sm-6 col-md-3">
                    <h3><?php the_field('titre_video'); ?></h3>
                    <?php the_field('lien_youtube'); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <!-- Page d'accueil : références -->
        <div class="row py-5">
            <!-- récupérer le contenu de la page d'accueil -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-12">
                        <!-- on récupère grace à cela le titre de la page -->
                        <h2><?php the_title(); ?></h2>
                        <!-- L'image de présentation -->
                        <div class="img-fluid">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } ?>
                        </div>
                        <!-- Le contenu -->
                        <?php the_content(); ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
        <!-- Artistes de références -->
        <div class="row d-flex">
            <!-- Récupérer les articles de type référence -->
            <?php $loop = new WP_Query(array('post_type' => 'reference', 'posts_per_page' => 5, 'paged' => $paged));
            while ($loop->have_posts()) : $loop->the_post();
                $image = get_field('image-reference'); ?>
                <div class="col-2">
                    <div class="entry-header">
                        <?php the_title('<h3 class="entry-title font-family-cocogoose-light"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h3>'); ?>
                    </div>
                    <div class="entry-content">
                        <img src="<?php echo $image ?>" class="img-fluid" />
                    </div>
                </div>
                <!--  -->
            <?php endwhile; ?>
        </div>
        <!-- post-production -->
        <div class="row py-5 postproduction">
            <div class="col-12">
                <h3>Nos références en post production</h3>
            </div>
            <?php $loop = new WP_Query(array('post_type' => 'postproduction', 'paged' => $paged));
            while ($loop->have_posts()) : $loop->the_post();
                $image = get_field('image_trailer'); ?>
                <div class="col-6">
                    <div class="carte card-front">
                        <img src="<?php echo $image ?>" class="img-fluid" width="" height="" />
                    </div>
                    <div class="carte card-back">
                        <h4><?php the_field('nom_trailer'); ?></h4>
                        <p><?php the_field('description_trailer'); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- PRESTATIONS -->
<section class="container-fluid py-5" id="prestations">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Prestations</h2>
            </div>
            <?php $loop = new WP_Query(array('post_type' => 'prestations', 'paged' => $paged));
            while ($loop->have_posts()) : $loop->the_post();
            ?>
                <div class="col-12 entry-header pt-3">
                    <?php
                    // the_title('<h3 class="entry-title font-family-cocogoose-light"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h3>'); 
                    ?>
                    <h3><?php the_field('titre_prestation'); ?></h3>
                </div>
                <div class="col-10">
                    <?php the_field('details_prestation'); ?>
                </div>
                <div class="col-2 d-flex prix-prestation">
                    <?php the_field('prix_prestation'); ?>
                </div>
                <!--  -->
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- HISTORIQUE -->
<section class="container-fluid py-5" id="historique">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- récupérer le contenu de la page (type page) -->
                <h2><?php echo get_post_field('post_title', '2012'); ?></h2>
                <p><?php echo get_post_field('post_content', '2012'); ?></p>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();
?>
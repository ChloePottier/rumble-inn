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
        <!-- récupérer le contenu de la page (type page) -->
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
            <!-- récupérer le contenu des articles (type post) -->
            <?php $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged));
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col">
                    <?php the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>');
                    the_content(); ?>
                </div>
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
                <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/12862009&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
            </div>
        </div>
        <div class="row py-5">
            <!-- récupérer le contenu de la page d'accueil -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-12">
                        <!-- on récupère grace à cela le titre de la page -->
                        <h1><?php the_title(); ?></h1>
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
                        <img src="<?php echo $image ?>" class="img-fluid"/>
                    </div>
                </div>
                <!--  -->
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- PRESTATIONS -->
<section class="container-fluid py-5" id="prestations">
        <div class="container">
            <div class="row">
                <div class="col">


                </div>
            </div>
        </div>
</section>




<?php
get_footer();
?>
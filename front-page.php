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
<div class="container-fluid" id="studio">
    <div class="container">
        <h3><?php echo get_post_field('post_title', '1905'); ?></h3>
        <p><?php echo get_post_field('post_content', '1905'); ?></p>
        <!-- Comment récuper le contenu d'une page -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="row">
                    <div class="col-12">
                        <!-- on récupère grace à cela le titre de la page -->
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-12">
                        <!-- L'image de présentation -->
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                        <!-- Le contenu -->
                        <?php the_content(); ?>
                <?php endwhile;
        endif; ?>
                    </div>

                </div>
    </div>
</div>
<!-- Blog -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <?php
            $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged)); ?>

            <?php while ($loop->have_posts()) : $loop->the_post();
                
                the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>');
            

                the_content();?>
                <!--  -->
            <?php endwhile; ?>
        </div>
    </div>
</div>

<!-- références -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <?php
            $loop = new WP_Query(array('post_type' => 'reference', 'posts_per_page' => 5, 'paged' => $paged)); ?>

            <?php while ($loop->have_posts()) : $loop->the_post();
                $image = get_field('image-reference');
                the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>');
            ?>

                <div class="entry-content">
                    <img src="<?php echo $image ?>" />
                </div>
                <!--  -->
            <?php endwhile; ?>
        </div>
    </div>
</div>





<?php
get_footer();
?>
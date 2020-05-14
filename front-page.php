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
<div class="container-fluid">
    <div class="container">
    <h3><?php echo get_post_field('post_title', '1905'); ?></h3>
									<p><?php echo get_post_field('post_content', '1905'); ?></p>
        <!-- Comment récuper le contenu d'une page -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-12">
                <!-- on récupère grace à cela le titre de la page -->
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="col-12">
                <!-- L'image de présentation -->
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <!-- Le contenu -->
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><a href="<?php echo esc_url( get_page_link( 1893 ) ); ?>">Accéder au blog</a></p>
            </div>
        </div>
    </div>
</div>

<?php 
get_footer();
?>
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
        <!-- Comment récuper le contenu d'une page -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-12">
                <!-- on récupère grace à cela le titre de la page -->
                <h1><?php the_title(); ?> BIENVENUE</h1>
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

<?php 
get_footer();
?>
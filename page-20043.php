<?php

/**
 * Modèle de page contact pour le thème Rumble Inn
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?><?php get_header() ?>
<div class="w-100 modele-page-contact d-flex">
    <div class="content-left">
        qqc ici, image studio ?
    </div>
    <div class="content-right">
        <!-- Comment récuper le contenu d'une page -->
        <?php if (have_posts()) : ?>
            <div class="container-contact">
                <div class="">
                    <div class="">
                        <?php while (have_posts()) : the_post(); ?>

                            <!-- on récupère grace à cela le titre de la page -->
                            <h1 class="pt-5 pb-3"><?php the_title(); ?></h1>

                            <!-- Le contenu -->
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php else : echo '<p class="pb-5"> Cette page nest pas disponible</p>';
        endif; ?>
    </div>
</div>



<?php get_footer() ?>
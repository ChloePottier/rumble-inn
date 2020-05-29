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
    <div class="content-left d-none d-md-block">
    </div>
    <div class="content-right">
        <!-- Comment récuper le contenu d'une page -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="container-contact pl-md-3 ">
                    <h1 class="py-5 w-100 text-center"><?php the_title(); ?></h1>
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <div class="w-100 w-md-50 text-center adresse-rumble-inn my-5 my-md-0">
                            <h2 class="pb-2">RUMBLE INN</h2>
                            <h3 class="pb-1">Recording studio</h3>
                            <p class="adresse-JFX">Croix Rousse<br />
                                69001 Lyon<br />
                                Tél : 07 70 69 77 64</p>
                               
                        </div>
                        <div id="formulaire_contact" class="w-100 w-md-50 px-2 px-sm-5 px-md-0">
                            <!-- Le contenu -->
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : echo '<p class="pb-5"> Cette page nest pas disponible</p>';
        endif; ?>
    </div>
</div>
<?php get_footer() ?>
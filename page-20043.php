<?php

/**
 * Modèle de page contact pour le thème Rumble Inn
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?><?php get_header() ?>
<div class="container-fluid" id="contact">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="row py-3">
                    <div class="col-4">
                        <?php if (is_active_sidebar('widget-image-contact')) :
                            dynamic_sidebar('widget-image-contact');
                        endif; ?>
                    </div>
                    <div class="col-4 text-center text-uppercase d-flex flex-column justify-content-center bg-grey-light">
                        <h2 class="pb-2">RUMBLE INN</h2>
                        <h3 class="pb-1 text-blue">Recording studio</h3>
                        <p class="adresse-JFX text-corail font-family-cocogoose-light">Lyon / France</p>
                    </div>
                    <div class="col-4" id="formulaire_contact">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer() ?>
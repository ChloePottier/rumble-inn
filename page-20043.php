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
        <div class="row pt-5 d-lg-none">
            <div class="col-12 text-center text-md-left">
                <h1> <?php the_title(); ?></h1>
            </div>
        </div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="row py-3">
                    <div class="col-4 d-none d-md-flex">
                        <?php if (is_active_sidebar('widget-image-contact')) :
                            dynamic_sidebar('widget-image-contact');
                        endif; ?>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 text-center d-flex flex-column justify-content-center ">
                        <h2 class="mx-auto mb-0 text-black  text-uppercase">RUMBLE&nbsp;&nbsp;INN</h2>
                        <h3 class="mx-auto mb-0 text-blue  text-uppercase">Recording studio</h3>
                        <h4 class="mt-1 text-corail font-family-cocogoose-light mb-0 mx-auto  text-uppercase">Lyon / France</h4>
                        <p>adossé à <a href="http://www.jarringeffects.net/" target="_blank" class="jarring-effects">Jarring Effects</a></p>
                        <p class="notes pt-4 text-justify text-center w-75 mx-auto">N'hésitez pas à nous écrire pour toute demande de renseignements et de devis personnalisés</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4" id="formulaire_contact">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer() ?>
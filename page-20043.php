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
                    <div class="col-12 col-sm-6 col-md-4 text-center text-uppercase d-flex flex-column justify-content-center ">
                        <h2 class="mx-auto mb-0 text-black">RUMBLE&nbsp;&nbsp;INN</h2>
                        <h3 class="mx-auto text-blue">Recording studio</h3>
                        <h5 class="font-family-cocogoose mb-0 mx-auto text-black">OPEN TO EVERYONE</h5>
                        <h4 class="mt-1 text-corail font-family-cocogoose-light mb-0 mx-auto">Lyon / France</h4>
                        <!-- <h2 class="pb-2">RUMBLE INN</h2>
                        <h3 class="pb-1 text-blue">Le studio d'enregistrement</h3>
                        <h5>ouvert à tous</h5>
                        <h4 class="adresse-JFX text-corail font-family-cocogoose-light">Lyon / France</h4> -->
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
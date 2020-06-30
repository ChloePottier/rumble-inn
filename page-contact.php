<?php /**
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
            <div class="row pt-5 d-lg-none">
            <div class="col-12 text-left">
                <h1> <?php the_title(); ?></h1>
            </div>
        </div>
                <div class="row py-3 flex-column-reverse flex-sm-row">
                    <div class="col-4 d-none d-lg-flex">
                        <?php if (is_active_sidebar('widget-image-contact')) :
                            dynamic_sidebar('widget-image-contact');
                        endif; ?>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 text-lg-center d-flex flex-column justify-content-center mt-4 mt-md-0">
                        <h2 class="text-center text-sm-left text-lg-center mx-lg-auto mb-0 text-black  text-uppercase">RUMBLE&nbsp;&nbsp;INN</h2>
                        <h3 class="text-center text-sm-left text-lg-center mx-lg-auto mb-0 text-blue  text-uppercase">Recording studio</h3>
                        <h4 class="text-center text-sm-left text-lg-center mt-1 text-dark font-family-cocogoose-light mb-0 mx-lg-auto  text-uppercase">Lyon / France</h4>
                        <p class="notes pt-4 text-justify text-center text-sm-left text-lg-center mx-auto mx-sm-0 mx-lg-auto">N'hésitez pas à nous écrire pour toute demande de renseignements et de devis personnalisés</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4" id="formulaire_contact">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer() ?>
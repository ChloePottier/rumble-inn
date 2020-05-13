<!-- Theme Name: Rumble Inn
Author: Chloé Pottier
Description: Thème Rumble Inn
Version: 1.0 -->
<?php

/**
 * Header file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- ajouter les méta, opengraph et micro données ? -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <?php wp_head(); ?>
    <title><?php ?></title>
</head>

<body <?php body_class(); ?> class="home blog logged-in admin-bar no-customize-support ">
<?php wp_body_open(); ?>
    <header class="custom-header" >
        <div class="position-absolute z-index-1">
            <!-- Faire boucle : si l'image d'en-tête existe alors afficher sinon rien -->
            <!-- image d'en-tête -->
            <?php if (get_header_image() != '') : ?>
                <img src="<?php echo get_header_image() ?>" class="header-image d-block mx-auto" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" />
            <?php endif; ?>

        </div>
        <div class="container position-relative z-index-100">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start py-5">
                    <div class="">
                        <!-- Logo -->
                        <?php echo get_custom_logo() ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-end py-5">
                    <!-- widget header text -->
                    <?php if (is_active_sidebar('widget-header-text')) :
                        dynamic_sidebar('widget-header-text');
                    endif; ?>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
        </div>
    </div>

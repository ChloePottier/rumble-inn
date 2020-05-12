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
 <html <?php language_attributes();?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- ajouter les méta, opengraph et micro données ? -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
        <title><?php ?></title>
    </head>
    <body class="home blog logged-in admin-bar no-customize-support">
        <header class="custom-header" style="background-image: url('<?php echo get_header_image()?>');">
            <div class="">
                <!-- Logo -->
                <?php echo get_custom_logo() ?>
            </div>
            
        </header>
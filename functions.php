<?php 
//ajouter le logo
function theme_prefix_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 175,
        'width'       => 400,
        'flex-width' => true,
        'header-text' => array( 'site-title', 'site-description' ),
     ) );   }
add_action( 'after_setup_theme', 'theme_prefix_setup' );

//ajouter l'image d'entête du site
$defaults = array(
    'default-image'          => '',
    'random-default'         => false,
    'width'                  => 1900,
    'height'                 => 481,
    'flex-height'            => false,
    'flex-width'             => true,
    'default-text-color'     => '',
    'header-text'            => true,
    'uploads'                => true,
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
    'video'                  => false,
    'video-active-callback'  => 'is_front_page',
);
add_theme_support( 'custom-header', $defaults );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );





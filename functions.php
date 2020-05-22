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

//ajouter l'image d'entête du site(options de cette img)
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

// widget header
function header_widgets_init() {
        register_sidebar( array(
         'name' => 'Ajouter du texte au Header',
         'id' => 'widget-header-text',
         'before_widget' => '<div class="header-text">',
         'after_widget' => '</div>',
         'before_title' => '<h2 class="header-title">',
         'after_title' => '</h2>',
         ) );
         register_sidebar( array(
            'name' => 'Logo Home menu top',
            'id' => 'widget-menu-top',
            'before_widget' => '<div class="widget-menu-top">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-menu-title">',
            'after_title' => '</div>',
            ) );
     }
    add_action( 'widgets_init', 'header_widgets_init' );
 // widget content
function content_widgets_init() {
    register_sidebar( array(
     'name' => 'Lien Soudcloud',
     'id' => 'widget-soundcloud',
     'before_widget' => '<div class="widget-soundcloud-content">',
     'after_widget' => '</div>',
     'before_title' => '<h3 class="content-title">',
     'after_title' => '</h3>',
     ) );
 }
add_action( 'widgets_init', 'content_widgets_init' );
function footer_widgets_init() {
     register_sidebar( array(
        'name' => 'Newsletter',
        'id' => 'widget-newsletter',
        'before_widget' => '<div class="widget-newsletter">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="newsletter title-title">',
        'after_title' => '</h3>',
        ) );
 }
add_action( 'widgets_init', 'footer_widgets_init' );
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
// NAvigation top menu
register_nav_menus(
    array(
        'top'    => __( 'Top Menu', 'rumbleinn' ),
        'social' => __( 'Social Links Menu', 'rumbleinn' ),
    )
);









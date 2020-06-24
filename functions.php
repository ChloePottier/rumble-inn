<?php 
//ajouter le logo
function theme_prefix_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 400,
        'width'       => 400,
        'flex-width' => true,
        'header-text' => array( 'site-title', 'site-description' ),
     ) );   }
add_action( 'after_setup_theme', 'theme_prefix_setup' );

    // Chargement des styles et des scripts Bootstrap sur WordPress
    function wpbootstrap_styles_scripts(){
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        wp_enqueue_script('jquery');
        wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
        wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    }
    add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');

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
     register_sidebar( array(
        'name' => 'Nuage de groupes',
        'id' => 'widget-nuage-groupe',
        'before_widget' => '<div class="widget-nuage-content">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="content-title">',
        'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => 'Image page contact',
            'id' => 'widget-image-contact',
            'before_widget' => '<div class="widget-img-contact">',
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
    ));
/* Autoriser l'upload de tous types de format dans les médias */
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
function wpm_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //On autorise les .svg
    $mime_types['webp'] = 'image/webp'; //On autorise les .webp
    return $mime_types;
}
// page blog, lire la suite
function custom_field_excerpt() {
	global $post;
	$text = get_field('detail_article');
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 17; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}
// fonction read more
function custom_field_excerpt_longer() {
	global $post;
	$text = get_field('detail_article');
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 17; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

if( !function_exists( 'theme_pagination' ) ) {
    function theme_pagination() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '?paged=%#%',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
	        'show_all' => false,
	        'end_size'     => 1,
	        'mid_size'     => 2,
		'type' => 'list',
		'next_text' => '»',
		'prev_text' => '«'
	);
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	
	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => str_replace( ' ' , '+', get_query_var( 's' ) ) );
		
	echo str_replace('page/1/','', paginate_links( $pagination ) );
    }	
}

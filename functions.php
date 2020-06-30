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
         register_sidebar( array(
            'name' => 'Logo JFX dans Menu smartphone',
            'id' => 'logo-jarring-effects',
            'before_widget' => '<div id="logo-jfx">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
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
// pagination
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
/*** BOUTONS DE PARTAGE RESEAUX SOCIAUX ***/
function my_sharing_buttons($content) {
    global $post;
    // si ce n'est pas un article ou une page, ne pas inclure les boutons de partages
    if(is_singular() || is_home() || !is_singular('contact')){
        // Récuperer URL de la page en cours 
        $myCurrentURL = urlencode(get_permalink());
        // Récuperer TITRE de la page en cours
        $myCurrentTitle = urlencode(get_field('titre_article')); // utilisation de ACF 
        $myCurrentImg = urlencode(get_field('image_article')); 
        wp_get_attachment_image_src($myCurrentImg, 'full');// image ACF convertie en attachement wordpress
        // Construction des URL de partage 
        $facebookURL = esc_url( 'https://www.facebook.com/sharer/sharer.php?u='.$myCurrentURL );
        // $instagramURL = esc_url( 'https://www.instagram.com/sharer/sharer.php?u='.$myCurrentURL ); //instagram je crois qu'on peut pas
        $linkedInURL = esc_url( 'https://www.linkedin.com/shareArticle?mini=true&url='.$myCurrentURL.'&amp;title='.$myCurrentTitle );
        $email_share = esc_url( 'mailto:?subject=Regarde cet article !&BODY=Hey ! Je voulais partager avec toi cet article interressant : '.$myCurrentURL.'&amp;title='.$myCurrentTitle );
        // Ajout des bouton en bas des articles et des pages
        $content .= '<div class="partage-reseaux-sociaux  d-flex align-items-center justify-content-end">';
        $content .= __('<span class="font-weight-bold mr-2 partagez">Partagez  : </span>');
        $content .= '<a class="share-facebook mr-2" href="'.$facebookURL.'" target="_blank"><i class="fab fa-facebook-square"></i></a>';
        $content .= '<a class="share-linkedin mr-2" href="'.$linkedInURL.'" target="_blank"><i class="fab fa-linkedin"></i></a>';
        $content .= '<a class="share-email" href="'.$email_share.'" target="_blank"><i class="fas fa-envelope"></i></a>';
        $content .= '</div>';
        }
        return $content;
};
add_filter( 'the_content', 'my_sharing_buttons');
/*** page de maintenance côté visiteur - sans plugins ***/
// function mode_maintenance(){
//     if(!current_user_can('edit_themes') || !is_user_logged_in()){
//         wp_die('<div style="text-align:center; "><h1 style="color:#03848a; text-transform:uppercase;">JFX Studio devient Rumble Inn ! </h1><div style="margin-top: 1rem; font-size: 1.3rem;">Le nouveau site arrive très bientôt, stay tuned !</div></div>',
//          'Maintenance', 
//          array( 'response' => 503 )); // correction du 9 février 2017
//     }
// }
// add_action('init', 'mode_maintenance');
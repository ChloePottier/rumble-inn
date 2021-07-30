<?php require 'hooks.php';
function rumbleinn_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 400,
        'width'       => 400,
        'flex-width' => true,
        'header-text' => array( 'site-title', 'site-description' ),
     ) ); 
     add_theme_support('title-tag');
     // Ajouter la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );
}
function wp_styles_scripts(){
    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_style('font-awesome', ''. get_template_directory_uri() .'/assets/font-awesome/css/all.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper',''. get_template_directory_uri().'/assets/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('boostrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('style', get_stylesheet_uri());
}
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
// NAvigation top menu
function register_nav(){
    register_nav_menus(
        array(
        'top'    => __('Top Menu', 'rumbleinn'),
        'social' => __('Social Links Menu', 'rumbleinn'),
    ));
}
/* Autoriser l'upload de tous types de format dans les médias */
function wpm_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //On autorise les .svg
    $mime_types['webp'] = 'image/webp'; //On autorise les .webp
    return $mime_types;
}
// fonction lire la suite
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
    //si le blog est en page d'accueil ou si c'est un post seul
    if(is_home() || is_single()){
        // Récuperer URL de la page en cours et transforme tout le résultat au format d'encodage des URL
        $myCurrentURL = urlencode(get_permalink());
        // Récuperer TITRE de la page en cours et on l'encode pour les URL 
        $myCurrentTitle = urlencode(get_field('titre_article')); // utilisation de ACF 
        $image = get_field('image_article');
        wp_get_attachment_image_src($image['ID'], 'full');
        // Construction des URL de partage 
        $facebookURL = esc_url( 'https://www.facebook.com/sharer/sharer.php?u='.$myCurrentURL);
        $linkedInURL = esc_url( 'https://www.linkedin.com/shareArticle?mini=true&url='.$myCurrentURL.'&amp;title='.$myCurrentTitle );
        $email_share = esc_url( 'mailto:?subject=Regarde cet article !&BODY=Hey ! Je voulais partager avec toi cet article interressant : '
        .$myCurrentURL.'&amp;title='.$myCurrentTitle );
        // Ajout des bouton en bas des articles et des pages
        $content .= '<div class="partage-reseaux-sociaux  d-flex align-items-center justify-content-end">';
        $content .= __('<span class="font-weight-bold mr-2 partagez">Partagez  : </span>');
        $content .= '<a class="share-facebook mr-2" href="'.$facebookURL.'" target="_blank" rel="noreferrer"><i class="fab fa-facebook-square"></i></a>';
        $content .= '<a class="share-linkedin mr-2" href="'.$linkedInURL.'" target="_blank" rel="noreferrer"><i class="fab fa-linkedin"></i></a>';
        $content .= '<a class="share-email" href="'.$email_share.'" target="_blank" rel="noreferrer"><i class="fas fa-envelope"></i></a>';
        $content .= '</div>';
        }
        return $content;
};

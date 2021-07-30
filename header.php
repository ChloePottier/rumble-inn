<?php /**
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
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="home blog logged-in admin-bar no-customize-support "  itemscope itemtype="https://schema.org/WebPage">
<?php wp_body_open(); ?>
    <header class="custom-header position-relative" >
        <div class="position-absolute z-index-1500">
            <!-- Faire boucle : si l'image d'en-tête existe alors afficher sinon rien -->
            <!-- image d'en-tête -->
            <?php if (get_header_image() != '') : ?>
                <img src="<?php echo get_header_image(); ?>" class="header-image d-block mx-auto" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" />
            <?php endif; ?>
        </div>
        <div class="container position-relative z-index-100" itemscope itemtype="https://schema.org/Organization">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-center justify-content-lg-start" >
                    <div class="" itemprop="logo">
                        <!-- Logo  -->
                        <?php echo get_custom_logo(); ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start justify-content-lg-end" itemprop="image">
                    <!-- widget header text -->
                    <?php if (is_active_sidebar('widget-header-text')) :
                        dynamic_sidebar('widget-header-text');
                    endif; ?>
                </div>
            </div>
        </div>
    </header>
    <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>


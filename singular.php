<?php
/**
 * Modèle de page pour le thème Rumble Inn
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', 'content-references');
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
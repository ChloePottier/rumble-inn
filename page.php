<?php /*Template Name: Rumble InnPages*/?>
<?php get_header()?>
<!-- Comment récuper le contenu d'une page -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- on récupère grace à cela le titre de la page -->
<?php the_title(); ?>
<!-- L'image de présentation -->
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<!-- Le contenu -->
<?php endwhile; endif; ?>






<?php get_footer()?>
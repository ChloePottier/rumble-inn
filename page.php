<?php /*Template Name: Rumble InnPages*/?>
<?php get_header()?>
<div class="container-fluid">
    <div class="container">
        <!-- Comment récuper le contenu d'une page -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-12">
                <!-- on récupère grace à cela le titre de la page -->
                <h2><?php the_title(); ?></h2>
            </div>
            <div>
                <!-- L'image de présentation -->
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <!-- Le contenu -->
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>

    </div>
</div>





<?php get_footer()?>






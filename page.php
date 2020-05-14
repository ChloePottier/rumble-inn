<?php /*Template Name: Rumble Inn Pages modèle*/?>
<?php get_header()?>
<div class="container-fluid modele-pages">
    <div class="container">
        <!-- Comment récuper le contenu d'une page -->
        <?php if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
        <div class="row pt-5">
            <div class="col-12">
                <!-- on récupère grace à cela le titre de la page -->
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="col-12">
                <!-- L'image de présentation -->
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); } ?>
                <!-- Le contenu -->
                <?php the_content(); ?>
                <?php endwhile; 
                else : echo '<p> Cette page nest pas disponible</p>';
                endif; ?>
            </div>
        </div>
    </div>
    
</div>


<?php get_footer()?>






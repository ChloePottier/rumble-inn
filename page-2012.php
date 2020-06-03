<?php /**
 * Page historique pour le thème Rumble Inn
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */ get_header() ?>
<div class="container-fluid" id="historique">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <h1 class="text-"> <?php the_title(); ?></h1>
                <!-- <h2>POST PRE RUMBLE INN</h2> -->
            </div>
        </div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!--mettre nouveaux post-->
                <div class="row py-2">
                    <!--nouveau post-->
                    <?php $loop = new WP_Query(array(
                        'post_type' => 'historique_jfx',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categorie',
                                'operator' => 'NOT EXISTS'
                            )))); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('image_histoire');
                        ?>
                            <div class="col-12 ">
                                <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                        <?php 
                         if ($image != '') { ?>
                            <div class="col-12 col-sm-2">
                                <img class="w-100" src=" <?php echo $image ?>" />
                            </div>
                            <div class="col-12 col-sm-10">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } ?>
                    <?php endwhile; ?>
                </div>
                <div class="row py-2">
                    <!--introduction-->
                    <?php $loop = new WP_Query(array(
                        'post_type' => 'historique_jfx',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categorie',
                                'field'    => 'slug',
                                'terms'    => 'introduction'
                            )))); ?>
                    <h4>Introduction :</h4>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('image_histoire');
                        $titreHistoire = the_field('titre_histoire');
                        if ($titreHistoire != '') { ?>
                            <div class="col-12 ">
                                <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                        <?php }
                         if ($image != '') { ?>
                            <div class="col-12 col-sm-2">
                                <img class="w-100" src=" <?php echo $image ?>" />
                            </div>
                            <div class="col-12 col-sm-10">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } ?>
                    <?php endwhile; ?>
                </div>
                <div class="row py-2">
                    <?php $loop = new WP_Query(array(
                        'post_type' => 'historique_jfx',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categorie',
                                'field'    => 'slug',
                                'terms'    => 'genese'
                            )))); ?>
                    <h4>La génèse</h4>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('image_histoire'); ?>
                        <div class="col-12 ">
                            <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-sm-2">
                                <img class="w-100" src=" <?php echo $image ?>" />
                            </div>
                            <div class="col-12 col-sm-10">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } ?>
                    <?php endwhile; ?>
                </div>
                    <div class="row py-2">
                        <?php $loop = new WP_Query(array(
                            'post_type' => 'historique_jfx',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categorie',
                                    'field'    => 'slug',
                                    'terms'    => 'dub'
                                )
                            )
                        )); ?>
                        <h4>Le Dub</h4>
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image_histoire'); ?>
                            <div class="col-12 ">
                                <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                            <?php if ($image != '') { ?>
                                <div class="col-12 col-sm-2">
                                    <img class="w-100" src=" <?php echo $image ?>" />
                                </div>
                                <div class="col-12 col-sm-10">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } else { ?>
                                <div class="col-12">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="row py-2">
                        <?php $loop = new WP_Query(array(
                            'post_type' => 'historique_jfx',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categorie',
                                    'field'    => 'slug',
                                    'terms'    => 'salamah'
                                )
                            )
                        )); ?>
                        <h4>Salamah</h4>
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image_histoire'); ?>
                            <div class="col-12 ">
                                <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                            <?php if ($image != '') { ?>
                                <div class="col-12 col-sm-2">
                                    <img class="w-100" src=" <?php echo $image ?>" />
                                </div>
                                <div class="col-12 col-sm-10">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } else { ?>
                                <div class="col-12">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="row py-2">
                        <?php $loop = new WP_Query(array(
                            'post_type' => 'historique_jfx',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categorie',
                                    'field'    => 'slug',
                                    'terms'    => 'tropical_bass'
                                )
                            )
                        )); ?>
                        <h4>Tropical Bass</h4>
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image_histoire'); ?>
                            <div class="col-12 ">
                                <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                            <?php if ($image != '') { ?>
                                <div class="col-12 col-sm-2">
                                    <img class="w-100" src=" <?php echo $image ?>" />
                                </div>
                                <div class="col-12 col-sm-10">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } else { ?>
                                <div class="col-12">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="row py-2">
                        <?php $loop = new WP_Query(array(
                            'post_type' => 'historique_jfx',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categorie',
                                    'field'    => 'slug',
                                    'terms'    => 'post_production'
                                )
                            )
                        )); ?>
                        <h4>Post Production</h4>
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image_histoire'); ?>
                            <div class="col-12 ">
                                <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                            <?php if ($image != '') { ?>
                                <div class="col-12 col-sm-2">
                                    <img class="w-100" src=" <?php echo $image ?>" />
                                </div>
                                <div class="col-12 col-sm-10">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } else { ?>
                                <div class="col-12">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="row py-2">
                        <?php $loop = new WP_Query(array(
                            'post_type' => 'historique_jfx',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categorie',
                                    'field'    => 'slug',
                                    'terms'    => 'inclassables'
                                )))); ?>
                        <h4>Inclassables</h4>
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image_histoire'); ?>
                            <div class="col-12 ">
                                <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                            <?php if ($image != '') { ?>
                                <div class="col-12 col-sm-2">
                                    <img class="w-100" src=" <?php echo $image ?>" />
                                </div>
                                <div class="col-12 col-sm-10">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } else { ?>
                                <div class="col-12">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="row py-2">
                        <?php $loop = new WP_Query(array(
                            'post_type' => 'historique_jfx',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categorie',
                                    'field'    => 'slug',
                                    'terms'    => 'hiphop'
                                )))); ?>
                        <h4>Hip Hop</h4>
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image_histoire'); ?>
                            <div class="col-12 ">
                                <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                            <?php if ($image != '') { ?>
                                <div class="col-12 col-sm-2">
                                    <img class="w-100" src=" <?php echo $image ?>" />
                                </div>
                                <div class="col-12 col-sm-10">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } else { ?>
                                <div class="col-12">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="row py-2">
                        <?php $loop = new WP_Query(array(
                            'post_type' => 'historique_jfx',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categorie',
                                    'field'    => 'slug',
                                    'terms'    => 'dernier_post'
                                )))); ?>
                        <h4>Dernier post</h4>
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image_histoire'); ?>
                            <div class="col-12 ">
                                <h5 class="font-weight-bold"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                            <?php if ($image != '') { ?>
                                <div class="col-12 col-sm-2">
                                    <img class="w-100" src=" <?php echo $image ?>" />
                                </div>
                                <div class="col-12 col-sm-10">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } else { ?>
                                <div class="col-12">
                                    <?php the_field("details_histoire"); ?>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
            <?php endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>
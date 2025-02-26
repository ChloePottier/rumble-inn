<?php

/**
 * Page historique pour le thème Rumble Inn
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */ get_header() ?>
<div class="container-fluid pb-5" id="historique" itemscope itemtype="https://schema.org/MusicGroup">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="row pt-5">
                    <div class="col-12 text-left">
                        <h1> En <span class="font-family-helvetica font-weight-bold-900">2020, </span>le mythique JFX Studio devient le Rumble Inn</h1>
                    </div>
                </div>
                <div class="row py-2">
                    <?php $loop = new WP_Query(array(
                        'post_type' => 'historique_jfx',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categorie', //nouveau articles, sans categories
                                'operator' => 'NOT EXISTS'
                            )
                        )
                    )); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('image_histoire'); ?>
                        <div class="col-12 ">
                            <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                                <img class="w-100" src=" <?php echo $image ?>" itemprop="image" />
                                <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0" itemprop="description">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12" itemprop="description">
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
                            )
                        )
                    )); ?>
                    <div class="mb-3">
                        <h4>Introduction</h4>
                    </div>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('image_histoire');
                        $titreHistoire = the_field('titre_histoire');
                        if ($titreHistoire != '') { ?>
                            <div class="col-12">
                                <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                            </div>
                        <?php }
                        if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                            <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0" itemprop="description">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12" itemprop="description">
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
                            )
                        )
                    )); ?>
                    <h4>La génèse</h4>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('image_histoire'); ?>
                        <div class="col-12 ">
                            <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                            <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0" itemprop="description">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12" itemprop="description">
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
                            <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                            <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0" itemprop="description">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12" itemprop="description">
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
                            <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                            <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0" itemprop="description">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12" itemprop="description">
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
                            <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                            <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0" itemprop="description">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12" itemprop="description">
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
                            <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                            <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0" itemprop="description">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12" itemprop="description">
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
                            )
                        )
                    )); ?>
                    <h4>Inclassables</h4>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('image_histoire'); ?>
                        <div class="col-12 ">
                            <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                            <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0" itemprop="description">
                                <?php the_field("details_histoire"); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-12" itemprop="description">
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
                            )
                        )
                    )); ?>
                    <h4>Hip Hop</h4>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('image_histoire'); ?>
                        <div class="col-12 ">
                            <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                            <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0">
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
                            )
                        )
                    )); ?>
                    <h4>L'histoire du Rumble Inn commence</h4>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('image_histoire'); ?>
                        <div class="col-12 ">
                            <h5 class="font-weight-bold text-blue text-capitalize" itemprop="name"><?php the_field('titre_histoire'); ?></h5>
                        </div>
                        <?php if ($image != '') { ?>
                            <div class="col-12 col-md-2">
                            <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-100" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"  itemprop="image"/>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-10  mt-3 mt-md-0">
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
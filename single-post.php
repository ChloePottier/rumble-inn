<?php

/**
 * Reference single, file for the Rumble Inn theme blog
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
get_header();?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php $unixtimestamp = strtotime(get_field('date_article')); ?>
    <div class="container pb-5">
        <div class="row pt-5 d-md-none">
            <div class="col-12">
                <h4 class="font-family-cocogoose m-0 text-capitalize"><?php the_field('titre_article'); ?></h4>
                <div class="date text-capitalize m-0 text-blue text-left mb-3"><?php echo date_i18n("d F Y", $unixtimestamp); ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 img-blog text-center mt-3 mt-lg-0">
                <?php $image = get_field('image_article'); ?>
                <img src="<?php echo $image ?>" class="image-responsive-blog" />
            </div>
            <div class="col-12 col-md-8 pt-4 text-justify">
                <h4 class="d-none d-md-flex font-family-cocogoose m-0 text-capitalize"><?php the_field('titre_article'); ?></h4>
                <div class="d-none d-md-flex  date text-capitalize m-0 text-blue text-left"><?php echo date_i18n("d F Y", $unixtimestamp); ?></div>
                <p><?php the_field('detail_article'); ?></p>
                <div class="d-flex align-items-center">
                    <?php $deezer = get_field('deezer');
                    $youtube = get_field('youtube');
                    $spotify = get_field('spotify');
                    $soundcloud = get_field('soundcloud');
                    $lienAutre = get_field('lien_autre');
                    if ($deezer != '') {
                        echo '<a class="deezer rounded-circle d-flex mr-3" title="aller sur Deezer" href="' . $deezer . ' " target="_blank"><img class="m-auto" src="' . get_home_url() . '/wp-content/uploads/2020/06/deezer-blanc-2.png" width="20"  height="20"/></a>';
                    }
                    if ($youtube != '') {
                        echo '<a class="youtube mr-3" title="aller sur Youtube" href="' . $youtube . ' " target="_blank"><i class="fab fa-youtube"></i></a>';
                    }
                    if ($spotify != '') {
                        echo '<a class="spotify mr-3" title="aller sur Spotify" href="' . $spotify . ' " target="_blank"><i class="fab fa-spotify"></i></a>';
                    }
                    if ($soundcloud != '') {
                        echo '<a class="soundcloud mr-3" title="aller sur Soundcloud" href="' . $soundcloud . ' " target="_blank"><i class="fab fa-soundcloud"></i></a>';
                    }
                    if ($lienAutre != '') {
                        echo '<a class="lien_autre" title="Suivre le lien" href="' . $lienAutre . ' " target="_blank"><i class="fas fa-globe"></i></a>';
                    }
                    ?>
                </div>

                <!--" target="_blank" class="btn-lien-article p-3">Suivre le lien</a></div>-->
            </div>
        </div>
    </div>
</article>
<?php
get_footer();
?>
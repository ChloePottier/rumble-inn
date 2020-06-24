<div class="sub-menu-jfx position-absolute bg-white text-center dis-none" id="sub-menu-jfx">
    <?php $loop = new WP_Query(array('post_type' => 'label', 'paged' => $paged, 'order' => 'ASC'));
    while ($loop->have_posts()) : $loop->the_post();
        $image = get_field('logo_label'); ?>
        <div class="label-jfx border-top py-2">
            <a href="<?php the_field('lien_site'); ?>" target="_blank">
                <img src="<?php echo $image ?>" class="logo-label" />
            </a>
        </div>
    <?php endwhile; ?>
</div>
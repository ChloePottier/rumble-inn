<?php

/**
 * Navigation-top file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */ ?>
<!-- Menu desktop -->
<div class="container-fluid  bg-white d-none d-lg-block " id="navbar">
    <div class="container">
        <nav class="row ">
            <div class="col-12 d-flex justify-content-center">
                <div class="menu-nav d-none d-md-flex flex-row py-2 align-items-center  font-family-cocogoose text-uppercase">
                    <?php // menu nav-top
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'theme_location' => 'top',
                            'menu_id'  => 'nav-top',
                        )
                    ); ?>
                </div>
                <div class="sub-menu-jfx position-absolute bg-grey-light dis-none" id="sub-menu-jfx">
                    <?php $loop = new WP_Query(array('post_type' => 'label', 'paged' => $paged, 'order' => 'ASC'));
                    while ($loop->have_posts()) : $loop->the_post();
                        $image = get_field('logo_label'); ?>
                        <div class="">
                            <a href="<?php the_field('lien_site'); ?>" target="_blank">
                                <img src="<?php echo $image ?>" class="logo-label" />
                                <h3 class="description-label text-uppercase mt-2"><?php the_field('description_label'); ?></h3>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Menu smartphone (burger) -->
<div class="container-fluid d-block d-lg-none position-fixed" id="nav-burger">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="burger text-center d-block flex-column rounded-circle position-fixed" id="burger">MENU
                    <span class="bg-black isclosed mx-auto" id="burger1">&nbsp;</span>
                    <span class="bg-black isclosed mx-auto" id="burger2">&nbsp;</span>
                    <span class="bg-black isclosed mx-auto" id="burger3">&nbsp;</span>
                </label>
                <div class="menu-burger display-none bg-burger font-family-cocogoose text-uppercase" id="navigation">
                    <a href="<?php echo get_option('home'); ?>">
                        <?php if (is_active_sidebar('widget-menu-top')) :
                            dynamic_sidebar('widget-menu-top');
                        endif; ?>
                    </a>
                    <?php
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'theme_location' => 'top',
                            'menu_id'  => 'nav-top',
                        )
                    ); ?>
                    <?php if (is_active_sidebar('widget-logo-jfx')) : ?>
                        <a href="<?php echo get_option('home'); ?>/?page_id=20123" class="d-flex justify-content-end"><?php dynamic_sidebar('widget-logo-jfx'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
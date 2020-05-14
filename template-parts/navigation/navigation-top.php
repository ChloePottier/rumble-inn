<?php/**
 * Navigation-top file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */?>
<!-- Menu desktop -->
<div class="col-12 d-flex justify-content-between">
    <a href="<?php echo get_option('home'); ?>" class="d-none d-md-flex align-items-center">
        <!-- widget logo -->
        <?php
        if (is_active_sidebar('widget-menu-top')) :
            dynamic_sidebar('widget-menu-top');
        endif;
        ?>
    </a>
    <div class="menu-nav d-none d-md-flex flex-row py-4  align-items-center  font-family-cocogoose text-uppercase">
        <?php // menu nav-top
        wp_nav_menu(
            array(
                'container' => false,
                'theme_location' => 'top',
                'menu_id'  => 'nav-top',
            )
        );
        ?>
    </div>
</div>
<!-- Menu smartphone (burger) -->
<div class="col-12">
    <label class="burger text-center d-flex flex-column d-md-none position-fixed rounded-circle" id="burger">MENU
        <span class="bg-black isclosed mx-auto" id="burger1">&nbsp;</span>
        <span class="bg-black isclosed mx-auto" id="burger2">&nbsp;</span>
        <span class="bg-black isclosed mx-auto" id="burger3">&nbsp;</span>
    </label>
    <div class="menu-burger display-none bg-burger font-family-cocogoose text-uppercase" id="navigation">
    <a href="<?php echo get_option('home'); ?>" >
        <?php
        if (is_active_sidebar('widget-menu-top')) :
            dynamic_sidebar('widget-menu-top');
        endif;
        ?>
    </a>
        <?php 
        wp_nav_menu(
            array(
                'container' => false,
                'theme_location' => 'top',
                'menu_id'  => 'nav-top',
            )); 
        ?>
    </div>

</div>
<?php
/**
 * Navigation-top file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?>
<!-- Menu desktop -->
<div class="container-fluid border-bottom bg-white d-none d-lg-block" id="navbar">
    <div class="container">
        <nav class="row ">
            <div class="col-12 d-flex justify-content-between">
                <a href="<?php echo get_option('home'); ?>" class="d-md-flex align-items-center">
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
                        ));?>
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
                        )
                    );
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
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
<div class="col-12">
            <nav class="menu-nav d-none d-md-flex flex-row">
                    <?php wp_nav_menu(
                            array(
                                'container' => false,
                                'theme_location' => 'top',
                                'menu_id'  => 'nav-top',
                                'echo' => true,
                                'before' => '',
                                'after' => '',
                                'link_before' => '',
                                'link_after' => '',
                                'depth' => 0,
                                'items_wrap'      => '%3$s',
                                'walker' => ''
                            )
                        );
                        ?>  
                    </nav>
                </div>
                <!-- Menu smartphone (burger) -->
                <div class="col-12">
                    <label class="burger text-center d-flex flex-column d-md-none position-fixed rounded-circle" id="burger">MENU
                        <span class="bg-black isclosed mx-auto" id="burger1">&nbsp;</span>
                        <span class="bg-black isclosed mx-auto" id="burger2">&nbsp;</span>
                        <span class="bg-black isclosed mx-auto" id="burger3">&nbsp;</span>
                    </label>
                    <nav class="menu-burger display-none bg-burger px-auto" id="navigation">
                        <?php wp_nav_menu(
                            array(
                                'container' => false,
                                'theme_location' => 'top',
                                'menu_id'  => 'nav-top',
                                'echo' => true,
                                'before' => '',
                                'after' => '',
                                'link_before' => '',
                                'link_after' => '',
                                'depth' => 0,
                                'items_wrap'      => '%3$s',
                                'walker' => ''
                            )
                        );
                        ?>
                    </nav>

                </div>
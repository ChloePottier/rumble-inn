<?php /**
 * Footer file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */ ?>
<footer class="container-fluid border-top py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-md-6 text-center text-sm-left">
                <!-- emplacement newsletter -->
                <?php if (is_active_sidebar('widget-newsletter')) :
                    dynamic_sidebar('widget-newsletter');
                endif; ?>
            </div>
            <div class="col-12 col-md-4 col-lg-md-6 pt-3 pt-md-0 menu-rs text-center text-md-right">
                <!-- Menu des réseaux sociaux -->
                <h3 class="d-inline">SUIVEZ-NOUS !</h3>
                <?php wp_nav_menu(
                    array(
                        'container' => false,
                        'theme_location' => 'social',
                        'menu_id'  => 'Social Links Menu' )); ?>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 copyright text-center">
                ©2020 Tous droits réservés <a class="rumbleinn" href="https://www.rumbleinnstudio.com/">Rumble Inn - Recording Studio</a>  – création <a href="https://akaleya.fr/" target="_blank" class="huarkaya">Akaleya - web & print</a>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?php echo get_home_url() ?>/wp-content/themes/rumble-inn/assets/jquery-3.5.1.min.js" async></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<!-- Menu burger -->
<script type="text/javascript" src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/rumble-inn/assets/navigation.js" async></script>
<?php if (is_page(1905)) : ?>
<!-- Plan studio -->
    <script type="text/javascript" src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/rumble-inn/assets/plan.js" async></script>
<?php endif; ?>
<script type="text/javascript" src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/rumble-inn/assets/constellation.js" async></script>
<?php wp_footer(); ?>
</body>
</html>
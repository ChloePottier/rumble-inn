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
                        'menu_id'  => 'Social Links Menu',
                    )
                ); ?>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_home_url() ?>/wp-content/themes/rumble-inn/assets/jquery-3.5.1.min.js" async></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="<?php echo get_home_url() ?>/wp-content/themes/rumble-inn/assets/bootstrap/bootstrap.min.js" async></script>
<!-- Menu burger -->
<script src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/rumble-inn/assets/navigation.js" async></script>
<script src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/rumble-inn/assets/plan.js" async></script>
<?php wp_footer(); ?>
</body>
</html>
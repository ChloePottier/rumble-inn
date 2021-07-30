<?php
add_action( 'after_setup_theme', 'rumbleinn_setup' );
add_action('wp_enqueue_scripts', 'wp_styles_scripts');
add_action( 'widgets_init', 'header_widgets_init' );
add_action( 'widgets_init', 'content_widgets_init' );
add_action( 'widgets_init', 'footer_widgets_init' );
add_action( 'init', 'register_nav' );
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
add_filter( 'the_content', 'my_sharing_buttons');


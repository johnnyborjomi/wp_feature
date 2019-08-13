<?php
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'head_menu_share' => 'Header Share',
        )
    );

    add_action( 'wp_enqueue_scripts', 'wp_feature_scripts' );
    function wp_feature_scripts() {
        wp_register_style( 'styles', get_template_directory_uri() . '/dist/styles.css', array());
        wp_register_script( 'script', get_template_directory_uri() . '/dist/public.js');


        wp_enqueue_style( 'styles');
        wp_enqueue_script( 'script');
    }
?>
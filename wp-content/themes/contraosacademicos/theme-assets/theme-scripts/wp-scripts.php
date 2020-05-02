<?php

    function add_theme_scripts() {
    
        wp_enqueue_style( 'main', get_template_directory_uri() . '/build/src/css/main.min.css', array(), '1.1', 'all');

        wp_enqueue_script( 'build', get_template_directory_uri() . '/build/src/js/build.min.js', array ('jquery'), 1.1, true);

    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
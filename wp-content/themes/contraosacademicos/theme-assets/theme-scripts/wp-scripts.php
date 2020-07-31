<?php

    function add_theme_scripts() {
    
        wp_enqueue_style( 'main', get_template_directory_uri() . '/build/src/css/main.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owlStyle', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
        wp_enqueue_style( 'owlStyle', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');

        wp_enqueue_script( 'owlScripts', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js', array ('jquery'), 1.1, true);
        wp_enqueue_script( 'build', get_template_directory_uri() . '/build/src/js/build.min.js', array ('jquery'), 1.1, true);

    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
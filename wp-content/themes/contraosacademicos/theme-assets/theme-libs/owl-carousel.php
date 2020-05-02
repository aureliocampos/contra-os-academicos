<?php
    function add_theme_owlCarousel() {
        wp_enqueue_style( 'carousel', get_template_directory_uri() . '/theme-assets/theme-libs/owlCarousel/dist/assets/owl.carousel.min.css', 'all');
        wp_enqueue_style( 'default', get_template_directory_uri() . '/theme-assets/theme-libs/owlCarousel/dist/assets/owl.theme.default.min.css', 'all');
       
        wp_enqueue_script( 'carousel', get_template_directory_uri() . '/theme-assets/theme-libs/owlCarousel/dist/owl.carousel.min.js', array ('jquery'), null, true);
       
      }
      add_action( 'wp_enqueue_scripts', 'add_theme_owlCarousel' );
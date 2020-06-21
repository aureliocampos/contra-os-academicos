<?php

function register_javaScriptCDNs() {
    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', null, null, true );
    wp_enqueue_script('jQuery');

    wp_register_script( 'jQuery-UI', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', null, null, true );
    wp_enqueue_script('jQuery-UI');

    wp_register_script( 'fontAwesome', 'https://kit.fontawesome.com/d4a838a739.js', null, null, true );
    wp_enqueue_script('fontAwesome');
}

add_action( 'wp_enqueue_scripts', 'register_javaScriptCDNs' );
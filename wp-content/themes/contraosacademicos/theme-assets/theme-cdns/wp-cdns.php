<?php

function register_javaScriptCDNs() {
    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', null, null, true );
    wp_enqueue_script('jQuery');

    wp_register_script( 'bootstrap', ( 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' ), ('jquery'), null, true );
    wp_enqueue_script( 'bootstrap' );

    wp_register_script( 'popper', ( 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' ), ('jquery'), null, true );
    wp_enqueue_script( 'popper' );
}

add_action( 'wp_enqueue_scripts', 'register_javaScriptCDNs' );
<?php

  function register_acf_block_types() {
    //block: Banners
    acf_register_block_type(array(
        'name'              => 'banners',
        'title'             => __('Banner'),
        'description'       => __('Um bloco de banner personalizado.'),
        'render_template'   => 'includes/template-parts/banners/banners.php',
        'category'          => 'layout',
        'icon'              => 'admin-appearance',
        'keywords'          => array( 'banner', 'header'),
    ));

    //Bloco de Conteúdo tipo A 
    acf_register_block_type(array(
      'name'              => '',
      'title'             => __('Banner'),
      'description'       => __('Bloco de Conteúdo personalizado.'),
      'render_template'   => 'includes/template-parts/banners/banners.php',
      'category'          => 'layout',
      'icon'              => 'admin-appearance',
      'keywords'          => array( 'banner', 'header'),
  ));

    }
    // Check if function exists and hook into setup.
    if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
  }
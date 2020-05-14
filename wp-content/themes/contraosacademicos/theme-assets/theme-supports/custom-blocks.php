<?php

  function coa_block_categories( $categories ) {
    $category_slugs = wp_list_pluck( $categories, 'slug' );
    return in_array( 'coa-custom-blocks', $category_slugs, true ) ? $categories : array_merge(
        $categories,
        array(
            array(
                'slug'  => 'coa-custom-blocks',
                'title' => __( 'COA blocos Personalizados', 'coa-plugin' ),
                'icon'  => null,
            ),
        )
    );
  }
  add_filter( 'block_categories', 'coa_block_categories', 5, 2 );



  function coa_acf_blocks_init() {
      if( function_exists('acf_register_block_type') ) {

          acf_register_block_type(array(
            'name'              => 'banners-select',
            'title'             => __('Banner Select'),
            'description'       => __('Um bloco de banner personalizado.'),
            'render_template'   => 'includes/template-parts/banners/banners.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'admin-appearance',
            'keywords'          => array(),
        ));
      }
  }
  add_action('acf/init', 'coa_acf_blocks_init');
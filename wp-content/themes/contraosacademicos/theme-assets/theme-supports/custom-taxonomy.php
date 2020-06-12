<?php

// taxonomia Autores
function taxonomy_posts() {
  register_taxonomy( 'autor', array( 'autores', 'post', 'biblioteca' ),
    array(
      'label' => 'Autor',
      'hierarchical' => true,
      'show_admin_column' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'tax_autores' ),
    )
  );
}
add_action( 'init', 'taxonomy_posts' );
<?php  // Não utilizado
    function sidebarsAll() {
        register_sidebar(
            array (
                'name' => __( 'Single Page Blog', 'contra-os-academicos'),
                'id' => 'sidebar-blog',
                'description' => __( 'Single Page blog', 'contra-os-academicos' ),
                'before_widget' => '<div class="widget-content">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
        register_sidebar(
            array (
                'name' => __( 'Single Page Categorias', 'contra-os-academicos'),
                'id' => 'sidebar-page-category',
                'description' => __( 'Single Page Categorias', 'contra-os-academicos' ),
                'before_widget' => '<div class="widget-content">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
       }
    add_action( 'widgets_init', 'sidebarsAll' );
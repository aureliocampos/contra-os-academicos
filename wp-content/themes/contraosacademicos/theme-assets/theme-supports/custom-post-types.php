<?php 

    function custom_post_types() {
        register_post_type( 'cursos', array(
            'labels' => array(
                'name'                => _x( 'Cursos', 'Post Type General Name'),
                'singular_name'       => _x( 'Curso', 'Post Type Singular Name'),
                'menu_name'           => __( 'Cursos'),
                'parent_item_colon'   => __( 'Parent Curso'),
                'all_items'           => __( 'Todos os Cursos'),
                'view_item'           => __( 'Ver Curso'),
                'add_new_item'        => __( 'Adicionar novo Curso'),
                'add_new'             => __( 'Adicionar novo'),
                'edit_item'           => __( 'Edit Curso'),
                'update_item'         => __( 'Update Curso'),
                'search_items'        => __( 'Search Curso'),
                'not_found'           => __( 'Nenhum curso encontrado.'),
                'not_found_in_trash'  => __( 'Not found in Trash'),
            ),
            'label'               => __( 'Cursos'),
            'description'         => __( 'Curso news and reviews'),
            'menu_icon'   	      => 'dashicons-awards',
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array('category', 'post_tag'),
            'rewrite'             => array('slug' => '','with_front' => false),
            'hierarchical'        => true,
            'public'              => true,
            'show_in_rest'        => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
        ));
        register_post_type( 'biblioteca', array(
            'labels' => array(
                'name'                => _x( 'Listas', 'Post Type General Name'),
                'singular_name'       => _x( 'Lista', 'Post Type Singular Name'),
                'menu_name'           => __( 'Biblioteca'),
                'parent_item_colon'   => __( 'Parent Lista'),
                'all_items'           => __( 'Todos as Listas'),
                'view_item'           => __( 'Ver Lista'),
                'add_new_item'        => __( 'Adicionar nova Lista'),
                'add_new'             => __( 'Adicionar novo'),
                'edit_item'           => __( 'Edit Lista'),
                'update_item'         => __( 'Update Lista'),
                'search_items'        => __( 'Search Lista'),
                'not_found'           => __( 'Nenhuma Lista encontrada.'),
                'not_found_in_trash'  => __( 'Not found in Trash'),
            ),
            'label'               => __( 'Biblioteca'),
            'description'         => __( 'Biblioteca news and reviews'),
            'menu_icon'   	      => 'dashicons-book',
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array('category', 'post_tag'),
            'rewrite'             => array('slug' => '','with_front' => false),
            'hierarchical'        => true,
            'public'              => true,
            'show_in_rest'        => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
        ));
    }
    add_action( 'init', 'custom_post_types');
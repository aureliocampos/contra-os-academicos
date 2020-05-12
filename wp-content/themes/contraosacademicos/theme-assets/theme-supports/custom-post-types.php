<!-- <?php 

    function custom_post_types() {
        register_post_type( 'case-studie', array(
            'labels' => array(
                'name'                => _x( 'Cases', 'Post Type General Name'),
                'singular_name'       => _x( 'Case', 'Post Type Singular Name'),
                'menu_name'           => __( 'Cases'),
                'parent_item_colon'   => __( 'Parent Case'),
                'all_items'           => __( 'All Cases'),
                'view_item'           => __( 'View Case'),
                'add_new_item'        => __( 'Add New Case'),
                'add_new'             => __( 'Add New'),
                'edit_item'           => __( 'Edit Case'),
                'update_item'         => __( 'Update Case'),
                'search_items'        => __( 'Search Case'),
                'not_found'           => __( 'Not Found'),
                'not_found_in_trash'  => __( 'Not found in Trash'),
            ),
            'label'               => __( 'Cases'),
            'description'         => __( 'Case news and reviews'),
            'menu_icon'   	      => 'dashicons-chart-line',
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
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
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
        ));
    }
    add_action( 'init', 'custom_post_types'); -->
<?php
    // HTML5 #
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    // Register Title Tag - Esse recurso permite que plug-ins e temas gerenciem a tag de título do documento #
    add_theme_support( 'title-tag' );

    //Esse recurso ativa os links de feed automáticos para postagem e comentários no cabeçalho. 
    add_theme_support( 'automatic-feed-links' );

    //Ativa o thumbnails em TODOS os Post Types
    add_theme_support( 'post-thumbnails');

    // Menus COA
    if ( ! function_exists( 'coa_register_nav_menu' ) ) {
 
        function coa_register_nav_menu(){
            register_nav_menus( array(
                'coa_header_menu' => __( 'Header Menu Site', 'coa' ),
                'coa_footer_menu'  => __( 'Footer Menu Site', 'coa' ),
            ) );
        }
        add_action( 'after_setup_theme', 'coa_register_nav_menu', 0 );
    
        // Adicionando classe ao <li></li>
        function add_classes_on_li($classes) {
            $classes[] = 'coa-nav-item';
            return $classes;
        }
        add_filter('nav_menu_css_class','add_classes_on_li',1,3);
    
        // Adicionando classe ao <a href=""></a>
        function add_linkclass($ulclass) {
            return preg_replace('/<a/', '<a class="coa-nav-link"', $ulclass, -1);
        }
        add_filter('wp_nav_menu','add_linkclass');
        }

    // Breadcrumps YOAST SEO 
    add_filter( 'wpseo_breadcrumb_links', 'unbox_yoast_seo_breadcrumb_append_link' );
        function unbox_yoast_seo_breadcrumb_append_link( $links ) {
        global $post;

        if( is_singular('post')){ // Function blog
            $breadcrumb = array(
                'url' => site_url( '/blog/' ),
                'text' => 'Blog',
            );
        array_unshift($links, $breadcrumb);
        }

        if( is_singular('biblioteca')){ // Function biblioteca
            $breadcrumb = array(
                'url' => site_url( '/biblioteca/' ),
                'text' => 'Biblioteca',
            ); 
        array_unshift($links, $breadcrumb);
        }

        if( is_singular('cursos')){ // Function Cursos
            $breadcrumb = array(
                'url' => site_url( '/cursos/' ),
                'text' => 'Cursos',
            ); 
        array_unshift($links, $breadcrumb);
        }

        return $links;
    }

    function get_breadcrumb() {
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<ol class="breadcrumb-items"><li class="breadcrumb-item">','</li></ol>');
        }
    }
<?php
/**
 * COAfunctions and definitions
 *
 *
 * @package WordPress
 * @subpackage COA
 * @since 1.0
 */

    /**
     * COA funções de suporte do tema.
     * Taxonomias, custom post types, widgtes e etc.
     */

    include_once (get_template_directory (). '/theme-assets/theme-supports/custom-post-types.php');
    include_once (get_template_directory (). '/theme-assets/theme-supports/theme-supports.php');
    include_once (get_template_directory (). '/theme-assets/theme-supports/custom-blocks.php');


    /**
     * Arquivos de plugins auxiliares de programação.
     * E outras bibliotecas usadas via cdn.
     *
     */
    
    // include_once (get_template_directory (). '/theme-assets/theme-libs/owl-carousel.php');
    include_once (get_template_directory (). '/theme-assets/theme-cdns/wp-cdns.php');

    /**
     * Arquivos base de estilos e scripts para o tema.
     */

    include_once (get_template_directory (). '/theme-assets/theme-scripts/wp-scripts.php');
    include_once (get_template_directory (). '/theme-assets/theme-ajax/ajax-blog.php');
    include_once (get_template_directory (). '/theme-assets/theme-ajax/ajax-biblioteca.php');
    include_once (get_template_directory (). '/theme-assets/theme-ajax/ajax-autores.php');

    // Remover auto p
	remove_filter( 'the_excerpt', 'wpautop' );
	remove_filter ('the_content', 'wpautop');

    // Adiciona exerpt ao post_type page
    add_post_type_support( 'page', 'excerpt' );

    //Desativando o Editor de Temas
    define('DISALLOW_FILE_EDIT', false);

    add_filter('_wp_post_revision_fields', 'add_field_debug_preview');
    function add_field_debug_preview($fields){
        $fields["debug_preview"] = "debug_preview";
        return $fields;
    }

    add_action( 'edit_form_after_title', 'add_input_debug_preview' );
        function add_input_debug_preview() {
            echo '<input type="hidden" name="debug_preview" value="debug_preview">';
    }
    
    // Remove issues with prefetching adding extra views
   remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

   

    function disqus_embed($disqus_shortname) {
		global $post;
		wp_enqueue_script('disqus_embed','https://'.$disqus_shortname.'.disqus.com/embed.js');
		echo '<div id="disqus_thread"></div>
		<script type="text/javascript">
			var disqus_shortname = "'.$disqus_shortname.'";
			var disqus_title = "'.$post->post_title.'";
			var disqus_url = "'.get_permalink($post->ID).'";
			var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
		</script>';
    }


    add_action( 'wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax' );
    add_action( 'wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax' );

    function load_posts_by_ajax() {
    
        switch ( filter_input( INPUT_POST, 'action2' ) ) {
            case 'load_biblioteca_posts':
                load_biblioteca_by_ajax_callback();
                break;
    
            case 'load_blog_posts':
                load_posts_by_ajax_callback();
                break;

            case 'load_autores_posts':
                load_autores_by_ajax_callback();
                break;

            default:
                break;
        }
    
        wp_die();
    }

     // Style Block Editor
     add_theme_support( 'wp-block-styles' );
     add_theme_support( 'align-wide' );
     add_editor_style( 'style-editor.css' );
     add_theme_support('editor-styles');
     add_theme_support( 'responsive-embeds' );
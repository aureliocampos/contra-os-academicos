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
    // include_once (get_template_directory (). '/theme-support/custom-taxonomy.php');
    include_once (get_template_directory (). '/theme-assets/theme-supports/theme-supports.php');
    // include_once (get_template_directory (). '/theme-assets/theme-supports/widgets.php');
    include_once (get_template_directory (). '/theme-assets/theme-supports/custom-blocks.php');

    /**
     * Arquivos de plugins auxiliares de programação.
     * E outras bibliotecas usadas via cdn.
     *
     */
    
    include_once (get_template_directory (). '/theme-assets/theme-cdns/wp-cdns.php');
    include_once (get_template_directory (). '/theme-assets/theme-libs/owl-carousel.php');

    /**
     * Arquivos base de estilos e scripts para o tema.
     */

    include_once (get_template_directory (). '/theme-assets/theme-scripts/wp-scripts.php');

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
    
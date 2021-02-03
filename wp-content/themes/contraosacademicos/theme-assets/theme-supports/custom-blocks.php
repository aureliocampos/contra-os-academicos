<?php
  function coa_block_categories( $categories ) {
    $category_slugs = wp_list_pluck( $categories, 'slug' );
    return in_array( 'coa-custom-blocks', $category_slugs, true ) ? $categories : array_merge(
        $categories,
        array(
            array(
                'slug'  => 'coa-custom-blocks',
                'title' => __( 'COA blocos Personalizados', 'coa-plugin' ),
                'icon'  => ' wordpress',
            ),
        )
    );
  }
  add_filter( 'block_categories', 'coa_block_categories', 5, 2 );
  function coa_acf_blocks_init() {
      if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'banners-select',
            'title'             => __('Banner Seleção'),
            'description'       => __('Um bloco de banner personalizado.'),
            'render_template'   => 'includes/template-parts/banners/banners.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'admin-appearance',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'banners-content',
            'title'             => __('Banner de conteúdo'),
            'description'       => __('Um bloco de banner personalizado.'),
            'render_template'   => 'includes/template-parts/banners/banner-content.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'admin-appearance',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'content-blocks',
            'title'             => __('Blocos de Contéudo'),
            'description'       => __('Tipos de Bloco de Conteúdo Simples personalizado.'),
            'render_template'   => 'includes/template-parts/content-blocks/content-blocks.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'admin-appearance',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'content-gallery',
            'title'             => __('Galeria de Conteúdo'),
            'description'       => __('Galeria de Conteúdo personalizado.'),
            'render_template'   => 'includes/template-parts/content-gallery/content-gallery.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'admin-appearance',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'content-carousel',
            'title'             => __('Carrossel de Conteúdo'),
            'description'       => __('Carrossel de Conteúdo personalizado.'),
            'render_template'   => 'includes/template-parts/content-lists/content-carousel.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'slides',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'content-carousel-lit-order',
            'title'             => __('Carrossel Lista de Literatura Ordenada'),
            'description'       => __('Carrossel Lista de Literatura Ordenada'),
            'render_template'   => 'includes/template-parts/content-lists/content-carousel-lit-order.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'book',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'content-featured',
            'title'             => __('Conteúdo de Destaque'),
            'description'       => __('Conteúdo de Destaque'),
            'render_template'   => 'includes/template-parts/content-lists/content-featured.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'star-filled',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'gallery-partners',
            'title'             => __('Parceiros'),
            'description'       => __('Parceiros'),
            'render_template'   => 'includes/template-parts/partners/partners.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'images-alt2',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'blog-default-content',
            'title'             => __(' Conteúdo Padrão da Página de Blog'),
            'description'       => __(' Conteúdo Padrão da Página de Blog'),
            'render_template'   => 'includes/template-parts/pages/blog-default-content.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'grid-view',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'biblioteca-default-content',
            'title'             => __(' Conteúdo Padrão da Página de Biblioteca'),
            'description'       => __(' Conteúdo Padrão da Página de Biblioteca'),
            'render_template'   => 'includes/template-parts/pages/biblioteca-default-content.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'grid-view',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'autores-default-content',
            'title'             => __(' Conteúdo Padrão da Página de Autores'),
            'description'       => __(' Conteúdo Padrão da Página de Autores'),
            'render_template'   => 'includes/template-parts/pages/autores-default-content.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'grid-view',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'editor-content',
            'title'             => __('Seja Editor Contra os Acdêmicos'),
            'description'       => __('Seja Editor Contra os Acdêmicos'),
            'render_template'   => 'includes/template-parts/content-lists/editor-content.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'edit-large',
            'keywords'          => array(),
        ));
        acf_register_block_type(array(
            'name'              => 'page-contact',
            'title'             => __('Página de contato Contra os Acdêmicos'),
            'description'       => __('Página de contato Contra os Acdêmicos'),
            'render_template'   => 'includes/template-parts/pages/contact-default-content.php',
            'category'          => 'coa-custom-blocks',
            'mode'              => 'edit',
            'align'             => 'wide',
            'icon'              => 'email-alt',
            'keywords'          => array(),
        ));
      }
  }
  add_action('acf/init', 'coa_acf_blocks_init');
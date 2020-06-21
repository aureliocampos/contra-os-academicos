<?php 
  $color = get_field('acf_background_color');
  $distortion = get_field('acf_background_distortion');
?>
<section class="section-container <?php echo esc_attr($color['value']); ?> <?php echo esc_attr($distortion['value']); ?>"> 
  <div class="section-content">
      <?php if (!empty (get_field('acf_section_title'))): // Titulo ?>
        <h2 class="section-title text-center"><?php echo get_field('acf_section_title'); ?></h2>
      <?php endif; ?>  

      <?php if (!empty (get_field('acf_section_subtitle'))): // Subtitulo ?>
        <p class="section-subtitle text-center"><?php echo get_field('acf_section_subtitle'); ?></p>
      <?php endif; ?>

      <ul id="<?php the_field('acf_id_block'); ?>" class="list-items-carousel-content owl-carousel owl-theme">
      
        <?php if(get_field('acf_select_posts') == 'select-custom' ): // Verificar a seleção do usuário ?>
          <?php 
            $selectCustom = get_field('acf_select_custom');

            if( $selectCustom ): ?>

              <?php global $post; // permite usar os metodos globais, para retornar o id correto de cada post com the_id(); ?>

              <?php foreach( $selectCustom as $post):  ?>
                <?php setup_postdata($post); ?>

                <li class="list-item" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID ); ?>')">
                <article class="list-item-article">
                <div class="container-title">
                  <h2 class="list-item-title"><?php echo get_the_title( $post->ID ); ?></h2>
                </div>
                  <div class="coa-section-btn-container">
                    <a href="<?php echo get_the_permalink( $post->ID ); ?>" class="coa-section-btn yellow" target="_blank">Leia mais</a>
                  </div>
                </article>
              </li>

              <?php endforeach; ?>
            <?php wp_reset_postdata();?>
          <?php endif; ?>

        <?php else: ?>
          

        <?php // Loop postagens recentes 
            $selectValue = get_field( 'acf_select_recent' );

            if($selectValue == 'select-resources'){
              $postType = 'biblioteca';
            }elseif($selectValue == 'select-courses'){
              $postType = 'cursos';
            }else {
              $postType = 'post';
            }
          
            $args = array(
                'post_type' => $postType,
                'posts_per_page' => 5,
                'status' => 'publish'
            );

            $mostRecents = new WP_Query( $args );

            if( $mostRecents->have_posts() ) : while ( $mostRecents->have_posts() ) : $mostRecents->the_post(); ?>
              <?php //retorna o nome do post type no frontend para a API.
                    $postType = get_post_type_object(get_post_type());
                    $type = $postType->rewrite['slug'];
                  ?>
                <li class="list-item" style="background-image: url('<?php echo get_the_post_thumbnail_url( $mostRecents->ID ); ?>')">
                <article class="list-item-article">
                <div class="container-title">
                  <h2 class="list-item-title"><?php echo get_the_title( $mostRecents->ID ); ?></h2>
                </div>
                  <div class="coa-section-btn-container">
                    <a href="<?php echo get_the_permalink( $mostRecents->ID ); ?>" class="coa-section-btn yellow" target="_blank">Leia mais</a>
                  </div>
                </article>
              </li>
              <?php endwhile;?>      
              <?php wp_reset_postdata();?>
          <?php endif; ?>
        <?php endif; ?>
      </ul>
      <?php 
      $sectionCTA = get_field('acf_section_cta');
      if( !empty($sectionCTA) ): // Condição do cta da seção ?>
      <div class="coa-section-btn-container">
        <a href="<?php echo esc_url($sectionCTA['url']); ?>" target="<?php echo esc_attr( $sectionCTA['target'] ? $sectionCTA['target'] : '_self' ); ?>" class="coa-section-btn yellow">
          <?php echo esc_html($sectionCTA['title']); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>

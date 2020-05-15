<section class="section-container container">
  <div class="section-content">

      <?php if (!empty (get_field('acf_section_title'))): // Titulo ?>
        <h2 class="section-title"><?php echo get_field('acf_section_title'); ?></h2>
      <?php endif; ?>  

      <?php if (!empty (get_field('acf_section_subtitle'))): // Subtitulo ?>
        <p class="section-subtitle"><?php echo get_field('acf_section_subtitle'); ?></p>
      <?php endif; ?>

      <div class="flex-column section-content-gallery">
        <div class="list-content-information">
          <article class="list-content-article">
            <h2 class="list-content-title">Curso de Grego Antigo e Moderno</h2>
            <p class="paragraph">Olá, caro leitor.</p>
            <p class="paragraph">Apresentamos aqui nossas Aulas de Grego Antigo e Moderno, onde nosso professor Lucas Emmanuel – Autor do artigo Processo e História e do Curso de Historiologia  irá lhes ensinar -s em trocadilhos – a falar grego.</p>
            <p class="paragraph">Esse tipo de conhecimento é indispensável aos interessados nos filósofos gregos como Platão, Aristóteles, Plotino, etc.</p>
            <div class="coa-section-btn-container">
              <a href="" class="coa-section-btn yellow">saiba mais</a>
            </div>
          </article>
      </div>

      <ul class="list-items-with-excerpt">  
        <?php if(get_field('acf_select_posts') == 'select-custom' ): // Verificar a seleção do usuário ?>
            <?php 
              $selectCustom = get_field('acf_select_custom');

              if( $selectCustom ): ?>
                <?php foreach( $selectCustom as $post):  ?>
                  <?php setup_postdata($post); ?>
                  <li class="list-item">
                    <figure class="list-item-figure">
                      <?php $alt = get_post_meta ( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true ); ?>
                      <?php echo get_the_post_thumbnail( $post->ID, array('400', '200'), array( "class" => "embed-responsive" ), array( 'alt' => $alt )); ?>
                      <figcaption class="list-item-figcaption">| <?php echo get_the_title( $post->ID ); ?></figcaption>
                    </figure>
                  </li>   
                <?php endforeach; ?>
              <?php wp_reset_postdata();?>
            <?php endif; ?>

        <?php else: ?>
          
          <?php 
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
                'posts_per_page' => 4
            );

            $mostRecents = new WP_Query( $args );

            if( $mostRecents->have_posts() ) : while ( $mostRecents->have_posts() ) : $mostRecents->the_post(); ?>
              <li class="list-item">
                <figure class="list-item-figure">
                  <?php $alt = get_post_meta ( get_post_thumbnail_id( $mostRecents->ID ), '_wp_attachment_image_alt', true ); ?>
                  <?php echo get_the_post_thumbnail( $mostRecents->ID, array('400', '200'), array( "class" => "embed-responsive" ), array( 'alt' => $alt )); ?>
                  <figcaption class="list-item-figcaption">| <?php echo get_the_title( $mostRecents->ID ); ?></figcaption>
                </figure>
              </li>   
              <?php endwhile;?>      
              <?php wp_reset_postdata();?>
          <?php endif; ?>
        <?php endif; ?>
      </ul>
    </div>
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
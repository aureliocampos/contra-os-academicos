<section class="section-container">
  <div class="section-content">
    <?php if (!empty (get_field('acf_section_title'))): // Titulo ?>
      <h2 class="section-title text-center"><?php echo get_field('acf_section_title'); ?></h2>
    <?php endif; ?>  

    <?php if (!empty (get_field('acf_section_subtitle'))): // Subtitulo ?>
      <p class="section-subtitle text-center"><?php echo get_field('acf_section_subtitle'); ?></p>
    <?php endif; ?>
    <ul class="list-items-featured-content">
      <?php if(get_field('acf_select_posts') == 'select-custom' ): // Verificar a seleção do usuário ?>
        <?php 
          $selectCustom = get_field('acf_select_custom');

          if( $selectCustom ): ?>

            <?php global $post; // permite usar os metodos globais, para retornar o id correto de cada post com the_id(); ?>

            <?php foreach( $selectCustom as $post):  ?>
              <?php setup_postdata($post); ?>
              
              <li class="list-item">
                  <a href="<?php echo get_the_permalink( $post->ID ); ?>" target="_blank" rel="noopener noreferrer">
                    <article class="list-item-article">
                      <figure class="list-item-figure">
                        <?php $alt = get_post_meta ( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true ); ?>
                        <?php echo get_the_post_thumbnail( $post->ID, 'medium', array( "class" => "embed-responsive" ), array( 'alt' => $alt )); ?>
                      </figure>
                      <div class="list-item-info">
                        <div class="flex">
                        <?php $category_detail=get_the_category( );?>
                        <?php foreach($category_detail as $cd): ?>
                          <h4 class="list-item-category">| <?php echo $cd->cat_name; ?></h4>
                        <?php endforeach; ?>       
                        <time class="list-item-time"><?php echo get_the_date(); ?></time></div>
                        <h2 class="list-item-title"><?php echo get_the_title( $post->ID ); ?></h2>
                        <!-- <h3 class="list-item-user">Por <strong>Josiah Royce</strong></h3> -->
                      </div>
                    </article>
                  </a>
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
            'posts_per_page' => 6
        );

        $mostRecents = new WP_Query( $args );

        if( $mostRecents->have_posts() ) : while ( $mostRecents->have_posts() ) : $mostRecents->the_post(); ?>
          
            <li class="list-item">
              <a href="<?php echo get_the_permalink( $mostRecents->ID ); ?>" target="_blank" rel="noopener noreferrer">
                <article class="list-item-article">
                 <figure class="list-item-figure">
                    <?php $alt = get_post_meta ( get_post_thumbnail_id( $mostRecents->ID ), '_wp_attachment_image_alt', true ); ?>
                    <?php echo get_the_post_thumbnail( $mostRecents->ID, 'medium', array( "class" => "embed-responsive" ), array( 'alt' => $alt )); ?>
                  </figure> 
                  <div class="list-item-info">
                   
                    <div class="flex">
                      <?php $category_detail=get_the_category($mostRecents->ID);?>
                      <?php foreach($category_detail as $cd): ?>
                        <h4 class="list-item-category">| <?php echo $cd->cat_name; ?></h4>
                      <?php endforeach; ?>
                     
                    <time class="list-item-time"><?php echo get_the_date( $mostRecents->ID ); ?></time></div>
                    
                    <h2 class="list-item-title"><?php echo get_the_title( $mostRecents->ID ); ?></h2>
                    <!-- <h3 class="list-item-user">Por <strong>Josiah Royce</strong></h3> -->
                  </div>
                </article>
              </a>
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


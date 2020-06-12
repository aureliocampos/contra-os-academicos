<section class="section-container container">
    <div class="section-content section-content-a">
    <?php if (!empty (get_sub_field('acf_section_title'))): // Titulo ?>
      <h2 class="section-title"><?php echo get_sub_field('acf_section_title'); ?></h2>
    <?php endif; ?>  

    <?php if (!empty (get_sub_field('acf_section_subtitle'))): // Subtitulo ?>
      <p class="section-subtitle"><?php echo get_sub_field('acf_section_subtitle'); ?></p>
    <?php endif; ?>
    <div class="text-content"><?php the_sub_field('acf_text_area'); // Texto Simples  ?></div>
    <div class="flex-column-center block-content">
      <?php 
        $image = get_sub_field('acf_image_one'); // Condição/Loop dá imagem e do link 1
        if( !empty( $image ) ):  ?>
          <figure class="figure">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="embed-responsive">
            <?php 
              $link = get_sub_field('acf_link_image_one');
              if( $link ): // Condição do link 1 ?>
              <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>" class="cta-image">
                <?php echo esc_html($link['title']); ?>
              </a>
              <?php endif; ?>
          </figure>  
        <?php endif; ?>

        <?php 
        $image = get_sub_field('acf_image_two'); // Condição/Loop dá imagem e do link 2
        if( !empty( $image ) ): ?>
          <figure class="figure">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="embed-responsive">                  
            <?php 
              $link = get_sub_field('acf_link_image_two');
              if( $link ): // Condição do link 2  ?>
              <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>" class="cta-image">
                <?php echo esc_html($link['title']); ?>
              </a>
              <?php endif; ?>
          </figure>  
        <?php endif; ?>
    </div>
    <?php 
      $sectionCTA = get_sub_field('acf_section_cta');
    if( !empty($sectionCTA) ): // Condição do CTA da seção  ?>
      <div class="coa-section-btn-container">
        <a href="<?php echo esc_url($sectionCTA['url']); ?>" target="<?php echo esc_attr( $sectionCTA['target'] ? $sectionCTA['target'] : '_self' ); ?>" class="coa-section-btn yellow">
            <?php echo esc_html($sectionCTA['title']); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>
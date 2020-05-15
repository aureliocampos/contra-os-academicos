<section class="section-container container">
  <div class="section-content section-content-b">

  <?php if (!empty (get_sub_field('acf_section_title'))): // Titulo ?>
    <h2 class="section-title"><?php echo get_sub_field('acf_section_title'); ?></h2>
  <?php endif; ?>  

    <?php if (!empty (get_sub_field('acf_section_subtitle'))): // Subtitulo ?>
      <p class="section-subtitle"><?php echo get_sub_field('acf_section_subtitle'); ?></p>
    <?php endif; ?>

    <div class="content-column-count block-content">
  
      <?php the_sub_field('acf_editor_wys'); // Texto Simples  ?>

      <?php $image = get_sub_field('acf_editor_image'); // Condição/Loop dá imagem e do link 1
        if( !empty( $image ) ):  ?>
          <figure class="figure">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="embed-responsive">
          </figure>  
      <?php endif; ?>
    </div>  
    <?php 
      $sectionCTA = get_sub_field('acf_section_cta');
    if( !empty($sectionCTA) ): // Condição do link 2  ?>
      <div class="coa-section-btn-container">
        <a href="<?php echo esc_url($sectionCTA['url']); ?>" target="<?php echo esc_attr( $sectionCTA['target'] ? $sectionCTA['target'] : '_self' ); ?>" class="coa-section-btn yellow">
          <?php echo esc_html($sectionCTA['title']); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>
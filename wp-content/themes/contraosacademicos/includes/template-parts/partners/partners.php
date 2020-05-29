<section class="section-container container">
  <div class="section-content">
      <?php if (!empty (get_field('acf_section_title'))): // Titulo ?>
        <h2 class="section-title text-center"><?php echo get_field('acf_section_title'); ?></h2>
      <?php endif; ?>  

      <?php if (!empty (get_field('acf_section_subtitle'))): // Subtitulo ?>
        <p class="section-subtitle text-center"><?php echo get_field('acf_section_subtitle'); ?></p>
      <?php endif; ?>
    <?php 
      $images = get_field('acf_image_gallery');
      if( $images ): ?>
          <ul class="list-items-images">
              <?php foreach( $images as $image ): ?>
                  <li class="list-item">
                    <figure class="list-item-figure">
                      <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="embed-responsive image">
                    </figure>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>
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
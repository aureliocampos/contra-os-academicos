<section class="section-container container">
  <div class="section-content">
      <?php if (!empty (get_field('acf_section_title'))): // Titulo ?>
        <h2 class="section-title text-center"><?php echo get_field('acf_section_title'); ?></h2>
      <?php endif; ?>  

      <?php if (!empty (get_field('acf_section_subtitle'))): // Subtitulo ?>
        <p class="section-subtitle text-center"><?php echo get_field('acf_section_subtitle'); ?></p>
      <?php endif; ?>
    <?php 
      $rows = get_field('acf_image_gallery');
        if( $rows ): ?>
        <ul class="list-items-images">
          <?php foreach( $rows as $row ): 
              $image = $row['acf_image'];
              $link = $row['acf_url'];
            ?>
            <li class="list-item">
              <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
                <figure class="list-item-figure">
                  <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="embed-responsive image">
                </figure>  
              </a>
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
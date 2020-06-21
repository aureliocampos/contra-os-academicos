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

    <ul class="list-items-lit-content owl-carousel owl-theme">

      <?php 
        $args = array(
          'post_type' => 'biblioteca',
          'posts_per_page' => 12,
          'status' => 'publish'
        );

        $post_list_order = new WP_Query( $args );

        if( $post_list_order->have_posts() ) : while ( $post_list_order->have_posts() ) : $post_list_order->the_post(); ?>

          <a href="<?php echo get_the_permalink( $post_list_order->ID ); ?>" target="_blank">
            <li class="list-item">
              <figure class="list-item-figure">
                <?php $alt = get_post_meta ( get_post_thumbnail_id( $post_list_order->ID ), '_wp_attachment_image_alt', true ); ?>
                <?php echo get_the_post_thumbnail( $post_list_order->ID, array('400', '200'), array( "class" => "embed-responsive" ), array( 'alt' => $alt )); ?>
              </figure>
              <article class="list-item-article">
                <h3 class="list-item-title"><?php echo get_the_title( $post_list_order->ID ); ?></h3>
                <!-- <p class="list-item-text"><?php echo get_the_excerpt( $post_list_order->ID, 0, 100 ); ?></p> -->
              </article>
            </li>
          </a>

          <?php endwhile;?>      
          <?php wp_reset_postdata();?>
      <?php endif; ?>
    </ul>
  </div>
</section>

<section class="section-container container-fluid fadeInUp">
  <div class="section-content section-default-page-loop">
    <div class="column-primary single-column">
      <h2 class="column-title">Autores</h2>
     
      <?php 
        $args = array(
          'post_type' => 'autores',
          'post_status' => 'publish',
          'posts_per_page' => 12,
          'page' => 1
        );

        $loop_post = new WP_query($args);

        if ( $loop_post->have_posts() ) : ?>

          <ul class="cards-list-items load-more-autores">

            <?php while ( $loop_post->have_posts() ) : $loop_post->the_post(); ?>
              <li class="cards cards-type-a">
                <a href="<?php echo get_the_permalink( $loop_post->ID ); ?>" class="cards-permalink">
                  <article class="cards-article">

                    <figure class="cards-figure">
                      <?php $alt = get_post_meta ( get_post_thumbnail_id( $loop_post->ID ), '_wp_attachment_image_alt', true ); ?>
                      <?php echo get_the_post_thumbnail( $loop_post->ID, 'medium', array( "class" => "cards-image embed-responsive" ), array( 'alt' => $alt )); ?>
                    </figure>

                    <div class="cards-info">
                      <?php 
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<h4 class="cards-category">| ' . esc_html( $categories[0]->name ) . '</h4>';
                        } ?>
                      <time class="cards-date"><?php echo get_the_date( $loop_post->ID ); ?></time>
                    </div>

                    <h2 class="cards-title"><?php echo get_the_title( $loop_post->ID ); ?></h2>
                    <p class="cards-user"><?php echo get_the_author_meta( 'display_name', $loop_post->ID ); ?></p>

                  </article>
                </a>
              </li>
              <?php endwhile;?> 
            <?php wp_reset_postdata();?>
          </ul>
        <div class="loadmore-autores"><span>Carregar mais</span></div>
      <?php endif; ?>
    </div>
  </div>
</section>
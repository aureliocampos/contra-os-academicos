<section class="section-container container-fluid fadeInUp">
  <div class="section-content section-default-page-loop">
    <div class="column-primary">
      <h2 class="column-title">Últimas Publicações</h2>
     
      <?php 
        // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => '9',
          'page' => 1
        );

        $loop_post = new WP_query($args);

        if ( $loop_post->have_posts() ) : ?>

          <ul class="cards-list-items load-more">

            <?php while ( $loop_post->have_posts() ) : $loop_post->the_post(); ?>
              <li class="cards cards-type-a">
                <a href="<?php echo get_the_permalink( $loop_post->ID ); ?>" class="cards-permalink">
                  <article class="cards-article">

                    <figure class="cards-figure">
                      <?php $alt = get_post_meta ( get_post_thumbnail_id( $loop_post->ID ), '_wp_attachment_image_alt', true ); ?>
                      <?php echo get_the_post_thumbnail( $loop_post->ID, 'medium', array( "class" => "cards-image embed-responsive" ), array( 'alt' => $alt )); ?>
                    </figure>

                    <div class="cards-info">
                      <?php $category_detail=get_the_category($loop_post->ID);?>
                        <?php foreach($category_detail as $cat): ?>
                          <h4 class="cards-category">| <?php echo $cat->cat_name; ?></h4>
                      <?php endforeach; ?>
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
        <div class="loadmore"><span>Carregar mais</span></div>
      <?php endif; ?>
     
    </div>
    <div class="column-secondary">
      <h2 class="column-title">Mais lidas</h2>
      <ul class="cards-list-items">
        <?php 
          $args = array(
            'post_type'           => 'post',
            'posts_per_page'      => 5,
            'orderby'     				=> 'post_views',
            'order'       	 			=> 'DESC',
            'ignore_sticky_posts' => 1,
          );

          $loop_post = new WP_query($args);

          if ( $loop_post->have_posts() ) : while ( $loop_post->have_posts() ) : $loop_post->the_post(); ?>
            <li class="cards cards-type-a">
              <a href="<?php echo get_the_permalink( $loop_post->ID ); ?>" class="cards-permalink">
                <figure class="cards-figure">
                    <?php $alt = get_post_meta ( get_post_thumbnail_id( $loop_post->ID ), '_wp_attachment_image_alt', true ); ?>
                    <?php echo get_the_post_thumbnail( $loop_post->ID, 'medium', array( "class" => "cards-image embed-responsive" ), array( 'alt' => $alt )); ?>
                  </figure>
                <article class="cards-article">
                  <div class="cards-info">
                    <?php $category_detail=get_the_category($loop_post->ID);?>
                      <?php foreach($category_detail as $cat): ?>
                        <h4 class="cards-category">| <?php echo $cat->cat_name; ?></h4>
                    <?php endforeach; ?>
                    <time class="cards-date"><?php echo get_the_date( $loop_post->ID ); ?></time>
                  </div>
                  <h2 class="cards-title"><?php echo get_the_title( $loop_post->ID ); ?></h2>    
                </article>
              </a>
              <?php echo pvc_post_views ($loop_post->ID, $echo = true);?>
            </li>

            <?php endwhile;?>      
          <?php wp_reset_postdata();?>
          <?php wp_reset_query (); ?>
        <?php endif; ?>
      </ul>
      <h2 class="column-title">Cursos</h2>
      <ul class="cards-list-items">
        <?php 
          $args = array(
            'post_type'           => 'biblioteca',
            'posts_per_page'      => 4,
            'orderby'     				=> 'post_views',
            'order'       	 			=> 'DESC',
            'ignore_sticky_posts' => 1,
          );

          $loop_post = new WP_query($args);

          if ( $loop_post->have_posts() ) : while ( $loop_post->have_posts() ) : $loop_post->the_post(); ?>
          
            <li class="cards cards-type-a">
              <a href="<?php echo get_the_permalink( $loop_post->ID ); ?>" class="cards-permalink">
                <figure class="cards-figure">
                  <?php $alt = get_post_meta ( get_post_thumbnail_id( $loop_post->ID ), '_wp_attachment_image_alt', true ); ?>
                  <?php echo get_the_post_thumbnail( $loop_post->ID, 'medium', array( "class" => "cards-image embed-responsive" ), array( 'alt' => $alt )); ?>
                </figure>
                <article class="cards-article">
                  <div class="cards-info">
                    <?php $category_detail=get_the_category($loop_post->ID);?>
                      <?php foreach($category_detail as $cat): ?>
                        <h4 class="cards-category">| <?php echo $cat->cat_name; ?></h4>
                    <?php endforeach; ?>
                    <time class="cards-date"><?php echo get_the_date( $loop_post->ID ); ?></time>
                  </div>
                  <h2 class="cards-title"><?php echo get_the_title( $loop_post->ID ); ?></h2>
                </article>
              </a>
              <?php echo pvc_post_views ($loop_post->ID, $echo = true);?>
            </li>

            <?php endwhile;?>      
          <?php wp_reset_postdata();?>
          
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>
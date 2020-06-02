<?php
  function blog_scripts() {
        // Localize the script with new data
        $script_data_array = array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'security' => wp_create_nonce( 'load_more_posts' ),
        );
        wp_localize_script( 'build', 'blog', $script_data_array );
      
    }
    add_action( 'wp_enqueue_scripts', 'blog_scripts' );

    add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
    add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

    function load_posts_by_ajax_callback() {
        check_ajax_referer('load_more_posts', 'security');
        $paged = $_POST['page'];
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => '9',
            'paged' => $paged,
        );

          $loop_post = new WP_query($args); ?>

          
    <?php if ( $loop_post->have_posts() ) : ?>
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
        <?php endwhile; ?>
        <?php
    endif;

    wp_die();
  }
  
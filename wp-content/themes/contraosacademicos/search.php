<?php /* Nome do modelo: Página de pesquisa */ ?>
<?php get_header(); ?>

  <main id="main-content" class="wrap-content" style="margin: 5em 0;">

		<div class="search-result__container">
			<h1 class="result-title">Resultados da Busca</h1>

			<?php 

				global $wp_query;
				$total_results = $wp_query-> found_posts;
			?>
			<p class="result-total">Foram encontrados <?php echo $total_results; ?> resultados.</p>

			<div class="result-form__container">
				<?php get_search_form (); ?>
			</div>
			
		</div>


		<?php 
        if ( have_posts() ) : ?>

          <ul class="cards-list-items load-more">

            <?php while (have_posts() ) :  the_post(); ?>
              <li class="cards cards-type-a">
                <a href="<?php the_permalink(); ?>" class="cards-permalink">
                  <article class="cards-article">

                    <figure class="cards-figure">
                      <?php $alt = get_post_meta ( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>
                      <?php the_post_thumbnail('medium', array( "class" => "cards-image embed-responsive" ), array( 'alt' => $alt )); ?>
                    </figure>
										<article class="cards-article">
		                  <div class="cards-info">
		                    <?php 
		                      $categories = get_the_category();
		                      if ( !empty( $categories ) ) {
		                          echo '<h4 class="cards-category">| ' . esc_html( $categories[0]->name ) . '</h4>';
		                      } ?>
		                    <time class="cards-date"><?php the_date(); ?></time>
		                    <?php echo pvc_post_views(get_the_ID(), $echo = true);?>
		                  </div>
		                </article>

                    <h2 class="cards-title"><?php the_title(); ?></h2>

                  </article>
                </a>
              </li>
              <?php endwhile;?> 
            <?php wp_reset_postdata();?>
          </ul>
      <?php endif; ?>
		<?php get_template_part( 'includes/template-parts/pagination' ); ?>
  </main>

<?php get_footer(); ?>
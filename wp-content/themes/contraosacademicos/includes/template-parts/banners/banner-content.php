<section class="coa-banner ">
  <div class="coa-banner-container coa-banner-content-container">
		<?php
			$featured_posts = get_field('acf_banner_items');
			if($featured_posts): ?>
				<div class="nav-article-items">

				<?php foreach( $featured_posts as $featured_post ): 
	        $permalink = get_permalink( $featured_post->ID );
					$title = get_the_title( $featured_post->ID );
					$excerpt = get_the_excerpt( $featured_post->ID );
	        ?>
					
						<article class="article-item">
							<a href="<?php echo esc_url( $permalink ); ?>" class="article-link">
								<figure class="article-figure">
									<?php echo get_the_post_thumbnail( $featured_post->ID, array('1366', '768'), array( 'class' => 'embed-responsive' ) ); ?>
								</figure>
								<h2 class="article-title"><?php echo esc_html( $title ); ?></h2>
							</a>
						</article>
					<?php endforeach; ?>
				</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
  </div>
</section>
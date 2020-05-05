<section class="coa-banner banner-image">
	<figure class="coa-banner-container">
		<?php 
			$image = get_sub_field('acf_banner_image');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="embed-responsive image-banner">
		<?php endif; ?>
	</figure>
</section>





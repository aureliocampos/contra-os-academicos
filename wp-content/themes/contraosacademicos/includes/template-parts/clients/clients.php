<section class="mjv-section-container">
    <div class="mjv-section-content">
        <h2 class="mjv-section-title"><?php echo get_sub_field('acf_section_title'); ?></h2>
        <?php 
        $images = get_sub_field('acf_choose_customer_images');
        if( $images ): ?>
            <ul class="mjv-clients-items">
                <?php foreach( $images as $image ): ?>
                    <li class="mjv-clients-item">
                        <figure class="mjv-clients-image">
                            <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="embed-responsive image">
                        </figure>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

		<?php $link = get_sub_field('acf_section_cta');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
		?>
			<div class="mjv-cta-container">
				<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="mjv-section-btn purple"><?php echo esc_html( $link_title ); ?><span></span></a>
			</div>
		<?php endif; ?>
    </div>
</section>
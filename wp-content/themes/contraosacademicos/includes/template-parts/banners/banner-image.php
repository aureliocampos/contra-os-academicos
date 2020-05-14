<section class="coa-banner banner-image">
	<figure class="coa-banner-container">
		<?php 
			$image = get_sub_field('acf_banner_image');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="embed-responsive image-banner">
		<?php endif; ?>
	</figure>
</section>

<?php if(get_field('acf_banner_page')) { ?>
    <?php while (has_sub_field('acf_banner_page')){ ?>

        <?php if( get_row_layout() == 'acf_banner_primary'){ ?>
            <?php get_template_part('includes/template-parts/banners/banner-primary'); ?> 
        <?php } ?>   

        <?php if( get_row_layout() == 'acf_banner_secondary' ) {?>
            <?php get_template_part('includes/template-parts/banners/banner-secondary'); ?> 
        <?php } ?>
        
        <?php if( get_row_layout() == 'acf_banner_image' ) {?>
            <?php get_template_part('includes/template-parts/banners/banner-image'); ?> 
        <?php } ?>
    <?php } ?>
<?php } ?>




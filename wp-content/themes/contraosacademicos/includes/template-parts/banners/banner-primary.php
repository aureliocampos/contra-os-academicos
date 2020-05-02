<section class="mjv-banner">
	<div class="mjv-banner-container">
		<h1 class="mjv-banner-title"><?php echo get_sub_field('acf_banner_title'); ?></h1>
		<ul class="mjv-banner-items">
			<?php if( have_rows('acf_banner_items') ): ?>
				<?php while ( have_rows('acf_banner_items') ) : the_row(); ?>
					<li class="mjv-banner-item"><?php echo the_sub_field('acf_banner_item'); ?></li>
				<?php endwhile; ?>
			<?php endif; ?>
		</ul> 
		<p class="mjv-banner-subtitle"><?php echo get_sub_field('acf_banner_subtitle');?></p>
		<div class="mjv-banner-arrow"><span></span></div>	
	</div>
</section>
<?php
$background = get_sub_field('acf_banner_bg');
$banner_subtitle = get_sub_field('acf_banner_subtitle');
?>
<section class="mjv-banner banner-secondary"<?php echo $background ? ' style="background:'.$background.'"' : '';?> >
	<div class="mjv-banner-container">
		<h1 class="mjv-banner-title"><?php echo get_sub_field('acf_banner_title'); ?></h1>
		<?php	if($banner_subtitle) : ?>
		<p class="mjv-banner-subtitle"><?php echo $banner_subtitle; ?></p>
		<?php endif; ?>
		<a class="mjv-banner-arrow icon mjv-icon-seta" href="#main-content"><span class="sr-only">Ir para o conteúdo</span></a>
	</div>
</section>

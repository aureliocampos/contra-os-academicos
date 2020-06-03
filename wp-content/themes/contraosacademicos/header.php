<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="coa-header">
	<div class="coa-header-container">
		<div class="container-logo">
			<figure class="coa-logo">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/05/cropped-banner-coa-teste.png" alt="" class="embed-responsive">
			</figure>
		</div>
		<div class="coa-header-menu">
			<div class="coa-menu-hamburguer">
				<div class="coa-line"></div>
				<div class="coa-line"></div>
				<div class="coa-line"></div>
			</div>
		</div>
		<?php wp_nav_menu( array( 
			'container'       => 'nav',
			'container_class' => 'coa-header-nav',
			'menu_class'      => 'coa-nav-items',
			'echo'            => true,
			'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
			'theme_location'  => '',
			) ); ?> 
			<div class="medias">
				<ul>
					<li>
						<span></span>
					</li>
					<li>
						<span></span>
					</li>
					<li>
						<span></span>
					</li>
				</ul>
			</div>
			<div class="search-button"></div>
	</div>
</header>

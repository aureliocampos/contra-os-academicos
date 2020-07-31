<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="coa-header" class="coa-header">
	<div class="coa-header-container">
		<div class="container-logo">
			<figure class="coa-logo">
				<a href="<?php echo get_site_url(); ?>">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/06/logo-png-branco.png" alt="" class="embed-responsive">
				</a>
			</figure>
		</div>
		<div class="search-button">
			<i id="open-search" class="fas fa-search"></i>
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
				<ul class="medias-list">
					<li class="medias-item"><a href="https://www.facebook.com/contraosacademicos/" class="media-link" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li class="medias-item"><a href="https://www.instagram.com/contraosacademicos/" class="media-link" target="_blank"> <i class="fab fa-instagram"></i></a></li>
					<li class="medias-item"><a href="https://twitter.com/Contracademicos" class="media-link" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<li class="medias-item"><a href="https://www.youtube.com/channel/UC3NjjjKEtzVCJOu7N9jLXzg" class="media-link" target="_blank"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
	</div>
</header>

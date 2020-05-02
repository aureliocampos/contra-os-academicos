<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="coa-header">
	<div class="coa-header-container">
		<figure class="coa-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/coa.png" alt="" class="embed-responsive embed-responsive-16by9">
		</figure>
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
	</div>
</header>
<?php /* Nome do modelo: Página de pesquisa */ ?>
<?php get_header(); ?>

  <main id="main-content" class="wrap-content" style="margin: 5em 0;">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1>Em construção</h1>
		<?php endwhile; endif; ?>
  </main>

<?php get_footer(); ?>
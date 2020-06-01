<?php/* Nome do modelo: Página de pesquisa */
?>
<?php get_header(); ?>

<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>

  <main id="main-content" class="wrap-content" style="margin: 5em 0;">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<main id="main-content" class="wrap-content" style="margin: 5em 0;">
					<?php the_title(); ?>
			</main>
		<?php endwhile; endif; ?>
  </main>


<?php get_footer(); ?>
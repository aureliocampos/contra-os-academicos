<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main id="main-content" class="wrap-content">
        <?php the_content(); ?>
        <?php get_template_part('includes/template-parts/cards/card-type-a'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer();?>

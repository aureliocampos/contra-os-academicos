<?php /* Template Name: Template Forum */ ?>
<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main id="template-forum" class="wrap-forum-container">
        <?php the_content(); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer();?>

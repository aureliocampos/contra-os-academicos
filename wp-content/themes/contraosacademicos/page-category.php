<?php /* Template Name: Page Category */ ?>
<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="section-container background-black">
        <div class="section-content container">
          <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer();?>

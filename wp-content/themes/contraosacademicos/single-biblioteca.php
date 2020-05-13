<?php get_header();?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="coa-banner banner-secondary" style="background-image: url('<?php echo get_the_post_thumbnail_url('');?>')">
            <div class="coa-banner-container">
                <h1 class="coa-banner-title"><?php the_title(); ?></h1>
            </div>
        </section>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
<?php get_footer();?>


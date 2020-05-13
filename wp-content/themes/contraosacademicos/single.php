<?php get_header();?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="coa-banner banner-primary" style="background-image: url('<?php echo get_the_post_thumbnail_url('');?>'); height:50vh;">
            <div class="coa-banner-container">
                <h1 class="coa-banner-title"><?php the_title(); ?></h1>
            </div>
        </section>
        <div class="container block-style">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
<?php get_footer();?>



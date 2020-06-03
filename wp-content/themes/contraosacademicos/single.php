<?php get_header();?>
    <?php if ( have_posts() ) : ?> 
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="coa-banner coa-banner-image banner-secondary" style="background-image: url('<?php echo get_the_post_thumbnail_url('');?>');">
                <div class="coa-banner-container">
                    <h1 class="coa-banner-title"><?php echo pvc_post_views ($post->ID, $echo = true);?></h1>
                </div>
            </section>
            <div class="row-flex">
                <div class="column-flex block-style">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php wp_reset_query (); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    
<?php get_footer();?>



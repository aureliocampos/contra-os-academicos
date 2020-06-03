<?php get_header();?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <section class="coa-banner coa-banner-image banner-secondary" style="background-image: url('<?php echo get_the_post_thumbnail_url('');?>')">
            <div class="coa-banner-container">
                <h1 class="coa-banner-title"><?php the_title(); ?></h1>
            </div>
        </section>
        <?php get_breadcrumb(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_query (); ?>
<?php endif; ?>

<?php get_footer();?>


<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="coa-banner banner-primary">
        <div class="coa-banner-container">
            <h1 class="coa-banner-title"><?php the_title(); ?></h1>
            <p class="coa-banner-subtitle"><?php echo get_sub_field('acf_banner_subtitle');?></p>
            <div class="coa-banner-arrow"><span></span></div>	
        </div>
    </section>
    <main id="main-content" class="wrap-content">
        <?php the_content(); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer();?>

<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main id="main-content" class="wrap-content">
        <?php the_content(); ?>
    </main>
    <div id="preloader">
        <div class="inner">
            <figure class="coa-logo">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/06/logo-png-branco.png" alt="" class="embed-responsive">
			</figure>
            <div class="bolas">
                <div></div>
                <div></div>
                <div></div>                    
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer();?>


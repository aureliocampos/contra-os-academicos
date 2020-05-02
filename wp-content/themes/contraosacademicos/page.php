<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('includes/template-pages/loops/banners'); ?>

    <main id="main-content" class="wrap-content">
        <aside class="nav-col">
          <nav class="menu-anchor">

          </nav>
        </aside>
        <div class="w-cont flt-center col-main">
            <?php if(has_excerpt()) : ?>
            <h2 class="excerpt-def-page color-1-1 w-cont flt-center"><?php the_excerpt(); ?></h2>
            <?php endif; ?>
            <div class="cont-page-def">
                <?php the_content(); ?>
            </div>
        </div>
        <?php get_template_part('includes/template-parts/social-media/social-media-share'); ?>
    </main>

    <?php if(get_field('acf_template_parts')) { ?>
        <?php while (has_sub_field('acf_template_parts')){ ?>

        <?php } ?>
    <?php } ?>
<?php endwhile; endif; ?>
<?php get_footer();?>

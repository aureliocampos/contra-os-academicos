<?php get_header();?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="coa-banner coa-banner-image banner-secondary" style="background-image: url('<?php echo get_the_post_thumbnail_url('');?>');">
            <div class="coa-banner-container">
                <h1 class="coa-banner-title"><?php the_title(); ?></h1>
            </div>
        </section>
        <div class="row-flex">
            <div class="column-flex block-style">
                <?php the_content(); ?>
            </div>
            <div class="column-flex">
            <?php $loop_query = new WP_Query($post); if ($loop_query->have_posts()): while ($loop_query->have_posts()) : $loop_query->the_post(); ?>
                    <article class="loop-template" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_title();?>
                    </article>
                <?php endwhile; ?>
                <?php else: ?>
                    <article>
                        <!-- else content here -->
                    </article>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
<?php get_footer();?>



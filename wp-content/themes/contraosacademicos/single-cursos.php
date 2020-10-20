<?php get_header();?>
    <?php if ( have_posts() ) : ?> 
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="coa-banner coa-banner-image banner-secondary" style="background-image: url('<?php echo get_the_post_thumbnail_url('');?>');">
            </section>
            <section class="single-section-container">
                <main class="single-section-content"> 
                    <div class="single-section-header">
                        <div class="column"><?php get_breadcrumb(); ?></div>
                    </div>
                    <div class="single-content block-style">   
                        <h1 class="single-title"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                    <div id="coa-tabs">
                        <ul class="tabs-items">
                            <li class="tabs-item"><a href="#tab-1-comments">Comentários</a></li>
                        </ul>
                        <div class="tab-target" id="tab-1-comments"><?php disqus_embed('contraosacademicos'); ?></div>
                    </div>
                </main>
                <section class="single-sidebar-container">
                    <aside class="single-sidebar">  
                        <div class="sidebar-share">
                            <h3 class="sidebar-title">Compartilhar</h3>
                            <ul class="sidebar-medias-list">
                                <li class="medias-item">
                                    <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" title="Compartilhar <?php the_title();?> no Facebook" class="media-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="medias-item">
                                    <a href="http://twitter.com/intent/tweet?text=<?php the_title();?>&url=<?php the_permalink();?>&via=Contracademicos" title="Twittar sobre <?php the_title();?>"class="media-link" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="medias-item">
                                    <a href="https://web.whatsapp.com/send?text=<?php the_permalink() ?>" class="media-link whatsapp-web" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://web.whatsapp.com/send?text=<?php the_permalink() ?>" class="media-link whatsapp-movel" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>                      
                        <ul class="sidebar-post-relationship cards-list-items">
                        <h3 class="sidebar-title">Outros Cursos</h3>
                            <?php 
                                $args = array(
                                'post_type' => 'cursos',
                                'posts_per_page' => 10,
                                );
                                $loop_post = new WP_Query( $args ); 
                            ?>
                            <?php while ( $loop_post->have_posts() ) : $loop_post->the_post(); ?> 
                            <li class="cards cards-type-a">
                                <a href="<?php echo get_the_permalink( $loop_post->ID ); ?>" class="cards-permalink">
                                    <figure class="cards-figure">
                                    <?php $alt = get_post_meta ( get_post_thumbnail_id( $loop_post->ID ), '_wp_attachment_image_alt', true ); ?>
                                    <?php echo get_the_post_thumbnail( $loop_post->ID, 'medium', array( "class" => "cards-image embed-responsive" ), array( 'alt' => $alt )); ?>
                                    </figure>
                                    <article class="cards-article">
                                    <div class="cards-info">
                                        <?php 
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo '<h4 class="cards-category">| ' . esc_html( $categories[0]->name ) . '</h4>';
                                        } ?>
                                    <time class="cards-date"><?php echo get_the_date( $loop_post->ID ); ?></time>
                                    </div>
                                    <h2 class="cards-title"><?php echo get_the_title( $loop_post->ID ); ?></h2>
                                    </article>
                                </a>
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>

                            <a href="<?php echo get_site_url(); ?>/cursos" class="sidebar-link">Ir para o Cursos ></a>
                        </ul>

                    </aside>
                </section>
            </section>
            <?php wp_reset_query (); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    
<?php get_footer();?>



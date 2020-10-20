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
                            <li class="tabs-item"><a href="#tab-2-references">Referências</a></li>
                        </ul>
                        <div class="tab-target" id="tab-1-comments"><?php disqus_embed('contraosacademicos'); ?></div>
                        <div class="tab-target" id="tab-2-references"><h2>Referências</h2></div>
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
                      <ul class="sidebar-autors-list">
                            <h3 class="sidebar-title">Autores(as)</h3>
                            <?php 
                                $args = array(
                                'post_type' => 'autores',
                                'post__not_in' => array( $post->ID),
                                'posts_per_page' => -1,
                                );
                                $loop_autors = new WP_Query( $args ); 
                            ?>
                            <?php while ( $loop_autors->have_posts() ) : $loop_autors->the_post(); ?> 
                                <li class="sidebar-autors-item">
                                    <a href="<?php echo get_the_permalink( $loop_autors->ID ); ?>"><?php echo get_the_title( $loop_autors->ID ); ?></a>
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                        <div class="autor-content">
                            <h2 class="autor-content-title">Conteúdo desse Autor(a):</h2>
                            <?php 
                            $the_posts_autor = get_posts(array(
                                'post_type' => 'post',
                                'meta_query' => array(
                                    array(
                                        'key' => 'acf_autor_post', 
                                        'value' => '"' . get_the_ID() . '"',
                                        'compare' => 'LIKE'
                                    )
                                )
                            ));

                            ?>
                            <?php if( $the_posts_autor ): ?>
                                <ul class="autor-content-list">
                                <?php foreach( $the_posts_autor as $post_autor ): ?>
                                    <li class="autor-content-item">
                                        <a href="<?php echo get_permalink( $post_autor->ID ); ?>" class="autor-content-link">
                                            <?php echo get_the_title( $post_autor->ID ); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        </div>
                    </aside>
                </section>
            </section>
            <?php wp_reset_query (); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    
<?php get_footer();?>



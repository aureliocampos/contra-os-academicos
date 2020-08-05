<?php get_header();?>
    <?php if ( have_posts() ) : ?> 
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="coa-banner coa-banner-image banner-secondary" style="background-image: url('<?php echo get_the_post_thumbnail_url('');?>');">
            </section>
            <section class="single-section-container">
                <main class="single-section-content"> 
                    <div class="single-section-header">
                        <div class="single-breadcrumb"><?php get_breadcrumb(); ?></div>
                        <div class="single-header-infos">
                            <?php 
                                $autors = get_field('acf_autor_post');
                                if( $autors ): ?>
                                <?php foreach( $autors as $aut ): // variable must NOT be called $post (IMPORTANT) ?>
                                <div class="single-header-info"><i class="fas fa-user"></i><a class="autor-link" href="<?php echo get_permalink( $aut->ID ); ?>"><?php echo get_the_title( $aut->ID ); ?></a></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class=single-post-info>
                                <?php 
                                    $id_post = get_the_id();
                                    echo pvc_post_views( $id_post, $echo = true);
                                ?>
                            </div>
                        </div>
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
                        <ul class="sidebar-category-list">
                            <h3 class="sidebar-title">Categoria(as)</h3>
                            <?php $category_detail=get_the_category();?>
                                <?php foreach($category_detail as $cat): ?>
                                <li class="sidebar-category-item"><a href="<?php echo get_category_link( $cat->term_id ) ; ?>">| <?php echo $cat->cat_name; ?></a></li>
                            <?php endforeach; ?>
                            
                            <a href="<?php echo get_site_url(); ?>/categorias" class="sidebar-link">Todas as Categorias ></a>
                        </ul>
                        
                        <ul class="sidebar-post-relationship cards-list-items">
                        <h3 class="sidebar-title">Posts Relacionados</h3>
                            <?php 
                                $args = array(
                                'posts_per_page' => 5,
                                'category_name'  => $cat->cat_name,
                                'post__not_in' => array( $post->ID)
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
                                    </article>
                                    <h2 class="cards-title"><?php echo get_the_title( $loop_post->ID ); ?></h2>
                                </a>
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>

                            <a href="<?php echo get_site_url(); ?>/blog" class="sidebar-link">Ir para o Blog ></a>
                        </ul>
                        <ul class="sidebar-autors-list">
                            <h3 class="sidebar-title">Autores(as)</h3>
                            <?php 
                                $args = array(
                                'post_type' => 'autores',
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
                    </aside>
                </section>
            </section>
            <?php wp_reset_query (); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    
<?php get_footer();?>



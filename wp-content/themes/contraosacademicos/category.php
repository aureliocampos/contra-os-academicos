<?php get_header(); ?> 
    <section class="coa-banner banner-primary" style="height: 40vh;">
        <div class="coa-banner-container">
            <h1 class="coa-banner-title"><?php echo single_cat_title(); ?></h1>
        </div>
    </section>
<section id="primary" class="site-content">
    <div id="content" role="main">

         <!-- loop para posts do Blog. -->
        <div class="section-container container">
            <?php // Args do loop para posts do blog
                $pageObjectCategory = get_queried_object(); // retorna o objeto que é o assunto da página da web no caso aqui a categoria.
                $categoryName = $pageObjectCategory->cat_name; // retorna o nome dá categoria para o argumento.
                $args = array(
                        'post_type'=> 'post', 
                        'category_name'=> $categoryName,
                        'posts_per_page'=> 10
                    ); 
                $postObject = new WP_Query( $args ); // cria uma nova instância do loop principal. 
            ?>

            <h2 class="section-title">Blog</h2>

            <?php if ( $postObject->have_posts() ) : while ( $postObject->have_posts() ) : $postObject->the_post(); ?>
                <div class="row">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                    <div class="entry">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); // cria uma nova instância do loop principal. ?>
                <?php else: ?>
                    <?php get_template_part('includes/template-parts/errors/'); ?>
            <?php endif; ?>
        </div>

        <!-- loop para posts da Biblioteca (Listas). -->
        <div class="section-container container">
            <?php // Args do loop para posts da Biblioteca(Listas).
                $pageObjectCategory = get_queried_object();
                $categoryName = $pageObjectCategory->cat_name;
                $args = array(
                        'post_type'=> 'biblioteca', 
                        'category_name'=> $categoryName,
                        'posts_per_page'=> 10
                    ); 
                $bibliotecaObject = new WP_Query( $args );
            ?>
            <h2 class="section-title">Biblioteca</h2>
            <?php if ( $bibliotecaObject->have_posts() ) : while ( $bibliotecaObject->have_posts() ) : $bibliotecaObject->the_post(); ?>
                <div class="row">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                    <div class="entry">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
                <?php else: ?>
                    <!-- <?php get_template_part('includes/template-parts/errors/'); ?> -->
                    <strong>Não temos Listas com essa categoria</strong>
            <?php endif; ?>
        </div>

        <!-- loop para posts de Cursos. -->
        <div class="section-container container">
            <?php // Args do loop para posts de Cursos
                $pageObjectCategory = get_queried_object();
                $categoryName = $pageObjectCategory->cat_name;
                $args = array(
                        'post_type'=> 'Cursos', 
                        'category_name'=> $categoryName,
                        'posts_per_page'=> 10
                    ); 
                $cursosObject = new WP_Query( $args );
            ?>
            
            <h2 class="section-title">Cursos</h2>

            <?php if ( $cursosObject->have_posts() ) : while ( $cursosObject->have_posts() ) : $cursosObject->the_post(); ?>
                <div class="row">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                    <div class="entry">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
                <?php else: ?>
                    <!-- <?php get_template_part('includes/template-parts/errors/'); ?> -->
                    <strong>Não temos Cursos com essa categoria</strong>
            <?php endif; ?>
        </div>

    </div>
</section>
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>
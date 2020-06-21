<?php get_header(); ?> 
    <section class="coa-banner banner-primary" style="height: 40vh;">
        <div class="coa-banner-container">
            <h1 class="coa-banner-title"><?php echo single_cat_title(); ?></h1>
        </div>
    </section>

<section class="site-content single-category">
    <aside class="sidebar-category">
        <div class="sidebar-category-list">
            <p class="title-object">Categoria:</p>
            <h2 class="title"><?php echo single_cat_title();?></h2>
            <div class="all-categories">
                <?php 
                    $cat_actual = get_queried_object()->term_id;
                    wp_list_categories( array(
                    'orderby'    => 'name',
                    'show_count' => true,
                    'exclude'    => $cat_actual,
                    'title_li'   => __( 'Outras Categorias:' ),
                ) ); ?> 
            </div>
        </div>
    </aside>
    <div class="content-category">
        
        <?php // loop para posts do Blog. --> 
            $pageObjectCategory = get_queried_object(); // retorna o objeto que é o assunto da página da web no caso aqui a categoria.
            $categoryName = $pageObjectCategory->cat_name; // retorna o nome dá categoria para o argumento.
            $args = array(
                    'post_type'=> 'post', 
                    'category_name'=> $categoryName,
                    'posts_per_page'=> 10
                ); 
            $postObject = new WP_Query( $args ); // cria uma nova instância do loop principal. 
        ?>  
        <?php if ( $postObject->have_posts() ) : ?> 
            <div class="section-container">
                <h2 class="section-title">Blog</h2>
                <ul class="cards-list-items">
                    <?php while ( $postObject->have_posts() ) : $postObject->the_post(); ?>
                        <li class="cards cards-type-a">
                            <a href="<?php echo get_the_permalink( $postObject->ID ); ?>" class="cards-permalink">
                            <article class="cards-article">

                                <figure class="cards-figure">
                                <?php $alt = get_post_meta ( get_post_thumbnail_id( $postObject->ID ), '_wp_attachment_image_alt', true ); ?>
                                <?php echo get_the_post_thumbnail( $postObject->ID, 'medium', array( "class" => "cards-image embed-responsive" ), array( 'alt' => $alt )); ?>
                                </figure>

                                <div class="cards-info">
                                <?php 
                                    $categories = get_the_category();
                                    if ( !empty( $categories ) ) {
                                        echo '<h4 class="cards-category">| ' . esc_html( $categories[0]->name ) . '</h4>';
                                    } ?>

                                <time class="cards-date"><?php echo get_the_date( $postObject->ID ); ?></time>
                                </div>

                                <h2 class="cards-title"><?php echo get_the_title( $postObject->ID ); ?></h2>
                                <p class="cards-user"><?php echo get_the_author_meta( 'display_name', $postObject->ID ); ?></p>

                            </article>
                            </a>
                        </li>
                    <?php endwhile;?> 
                    <?php wp_reset_postdata();?>
                </ul>
            </div>
        <?php endif; ?>
                
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
        <?php if ( $bibliotecaObject->have_posts() ) : ?> 
            <div class="section-container">
                <h2 class="section-title">Biblioteca</h2>
                <ul class="cards-list-items">   
                <?php while ( $bibliotecaObject->have_posts() ) : $bibliotecaObject->the_post(); ?>
                    <li class="cards cards-type-a">
                        <a href="<?php echo get_the_permalink( $bibliotecaObject->ID ); ?>" class="cards-permalink">
                        <article class="cards-article">

                            <figure class="cards-figure">
                            <?php $alt = get_post_meta ( get_post_thumbnail_id( $bibliotecaObject->ID ), '_wp_attachment_image_alt', true ); ?>
                            <?php echo get_the_post_thumbnail( $bibliotecaObject->ID, 'medium', array( "class" => "cards-image embed-responsive" ), array( 'alt' => $alt )); ?>
                            </figure>

                            <div class="cards-info">
                            <?php 
                                $categories = get_the_category();
                                if ( !empty( $categories ) ) {
                                    echo '<h4 class="cards-category">| ' . esc_html( $categories[0]->name ) . '</h4>';
                                } ?>

                            <time class="cards-date"><?php echo get_the_date( $bibliotecaObject->ID ); ?></time>
                            </div>

                            <h2 class="cards-title"><?php echo get_the_title( $bibliotecaObject->ID ); ?></h2>
                            <p class="cards-user"><?php echo get_the_author_meta( 'display_name', $bibliotecaObject->ID ); ?></p>

                        </article>
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        <?php endif; ?>
        
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
        <?php if ( $cursosObject->have_posts() ) :?>
            <div class="section-container">
                <h2 class="section-title">Cursos</h2>
                <ul class="cards-list-items">   
                <?php while ( $cursosObject->have_posts() ) : $cursosObject->the_post(); ?>
                    <li class="cards cards-type-a">
                        <a href="<?php echo get_the_permalink( $cursosObject->ID ); ?>" class="cards-permalink">
                        <article class="cards-article">

                            <figure class="cards-figure">
                            <?php $alt = get_post_meta ( get_post_thumbnail_id( $cursosObject->ID ), '_wp_attachment_image_alt', true ); ?>
                            <?php echo get_the_post_thumbnail( $cursosObject->ID, 'medium', array( "class" => "cards-image embed-responsive" ), array( 'alt' => $alt )); ?>
                            </figure>

                            <div class="cards-info">
                            <?php 
                                $categories = get_the_category();
                                if ( !empty( $categories ) ) {
                                    echo '<h4 class="cards-category">| ' . esc_html( $categories[0]->name ) . '</h4>';
                                } ?>

                            <time class="cards-date"><?php echo get_the_date( $cursosObject->ID ); ?></time>
                            </div>

                            <h2 class="cards-title"><?php echo get_the_title( $cursosObject->ID ); ?></h2>
                            <p class="cards-user"><?php echo get_the_author_meta( 'display_name', $cursosObject->ID ); ?></p>

                        </article>
                        </a>
                    </li>
                <?php endwhile;?> 
            <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        <?php endif; ?>
            
    </div>
</section>

<?php get_footer(); ?>

            
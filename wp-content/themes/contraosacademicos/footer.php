<?php get_template_part('includes/template-parts/newsletter/newsletter');?>
<footer class="coa-footer">
    <div class="coa-footer-about footer-section">
        <h3 class="footer-section-title">Contra os Acadêmicos</h3>
        <p class="about-text">Surgiu com o objetivo de melhorar o acesso aos estudos de Filosofia para todos aqueles que desejam aprofundar-se na busca pelo conhecimento e, principalmente, pela verdade.</p>
        <div class="footer-donate">
            <h3 class="footer-section-title">Apoie o Projeto</h3>
        </div>
    </div>

    <div class="coa-footer-categories footer-section">
        <h3 class="footer-section-title">Categorias</h3>
        <ul class="categories-items">
            <?php wp_list_categories( array(
                'orderby'    => 'name',
                'show_count' => false,
                'title_li' => '',
                'exclude'    => array( 1 )
            ) ); ?> 
        </ul>
    </div>

    <div class="coa-footer-post footer-section">
        <h3 class="footer-section-title">Posts Recentes</h3>
        <ul class="post-items">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'status' => 'publish'
                );

                $mostRecents = new WP_Query( $args );

                if( $mostRecents->have_posts() ) : while ( $mostRecents->have_posts() ) : $mostRecents->the_post(); ?>
                <li class="post-item">
                    <a href="<?php echo get_the_permalink( $mostRecents->ID ); ?>" class="post-link">
                    <?php the_title(); ?></a>
                </li>   
                <?php endwhile;?>      
                <?php wp_reset_postdata();?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="coa-footer-container footer-section">
        <div class="coa-footer-terms">
            <ul class="terms-items">
                <li class="terms-item">
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="term-name">Privacy Policy</a>
                </li>
                <span class="line"></span>
                <li class="terms-item">
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="term-name">Terms of Use</a>
                </li>
            </ul>
        </div>
        <div class="coa-footer-license">
            <p class="lincense-text">© Contra os Acadêmicos 2020 All Rights Reserved</p>
        </div>
    </div>
    <div class="footer-button-back"><a href="#main-content" class="go-up"><i class="fas fa-arrow-up"></i></a></div>
</footer>
<?php get_template_part('includes/template-parts/search/input-search');?>
<?php wp_footer(); ?>
</body>
</html>
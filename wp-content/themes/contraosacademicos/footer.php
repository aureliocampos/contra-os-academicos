<?php get_template_part('includes/template-parts/newsletter/newsletter');?>
<footer class="coa-footer">
    <div class="coa-footer-about footer-section">
    <figure class="about-figure">
        <img src="https://contraosacademicos.com.br/wp-content/uploads/2018/05/banner-coa-teste.png" alt="" class="about-image embed-responsive">
    </figure>
        <h3 class="footer-section-title">Contra os Acadêmicos</h3>
        <p class="about-text">Surgiu com o objetivo de melhorar o acesso aos estudos de Filosofia para todos aqueles que desejam aprofundar-se na busca pelo conhecimento e, principalmente, pela verdade.</p>
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

    <div id="donate" class="footer-donate footer-section">
        <h3 class="footer-section-title">Apoie o Projeto</h3>
        <ul class="donate-list">
            <li class="donate-item">
               <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
                    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                    <input type="hidden" name="currency" value="BRL" />
                    <input type="hidden" name="receiverEmail" value="lazaro.nti@gmail.com" />
                    <input type="hidden" name="iot" value="button" />
                    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/120x53-doar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                </form>
                <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
            </li>
            <li class="donate-item">
                <a href="https://pagseguro.uol.com.br/checkout/nc/nl/donation/sender-identification.jhtml?t=d611a2353dcf4554e5f3a066ce3005b13401eafc0d4b504d4ae18faa0c317257&e=true#rmcl" target="_blank" rel="noopener noreferrer" class="donate-link">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/08/logo-pagseguro.png" alt="" class="donate-image embed-responsive">
                </a>
            </li>
            <li class="donate-item">
                <a href="https://apoia.se/contraosacademicos" target="_blank" rel="noopener noreferrer" class="donate-link">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/08/logo-apoiase.png" alt="" class="donate-image embed-responsive">
                </a>
            </li>
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
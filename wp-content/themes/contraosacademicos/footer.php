<?php get_template_part('includes/template-parts/newsletter/newsletter');?>
<footer class="coa-footer">
    <div class="coa-footer-container">
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
</footer>
<div id="search-target">
    <div class="search-container">
        <div class="search-header"><i id="closed-search" class="fas fa-times"></i></div>
        <div class="search-content">
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
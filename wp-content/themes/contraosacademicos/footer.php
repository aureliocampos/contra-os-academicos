<footer class="coa-footer">
    <div class="coa-footer-container">
		<?php wp_nav_menu( array( 
			'container'       => 'nav',
			'container_class' => 'coa-footer-nav',
			'menu_class'      => 'coa-nav-items',
			'echo'            => true,
			'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
			'theme_location'  => '',
			) ); ?>
        <?php get_template_part('includes/template-parts/social-media/social-media'); ?>
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
<?php wp_footer(); ?>
</body>
</html>
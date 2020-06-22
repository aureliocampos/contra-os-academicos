<section class="section-container container-fluid fadeInUp page-contact">
  <div class="section-content">
      <?php if (!empty (get_field('acf_section_title'))): // Titulo ?>
        <h2 class="section-title text-center"><?php echo get_field('acf_section_title'); ?></h2>
      <?php endif; ?> 
      <div class="form-page-contact">
        <?php echo do_shortcode('[contact-form-7 id="4100" title="Contato"]'); ?>
      </div>
  </div>
</section>
<?php if( have_rows('acf_section_content') ): ?>
    <?php while( have_rows('acf_section_content') ): the_row(); ?>
        <?php if(get_field('acf_block_content_type') == 'block-content-b'): ?>
          <?php get_template_part('includes/template-parts/content-blocks/block-content-B');?>
        <?php else: ?>
         <?php get_template_part('includes/template-parts/content-blocks/block-content-A');?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
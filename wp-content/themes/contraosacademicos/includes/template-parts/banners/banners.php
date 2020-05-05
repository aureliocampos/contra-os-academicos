<?php if(get_field('acf_banner_page')) { ?>
    <?php while (has_sub_field('acf_banner_page')){ ?>

        <?php if( get_row_layout() == 'acf_banner_primary'){ ?>
            <?php get_template_part('includes/template-parts/banners/banner-primary'); ?> 
        <?php } ?>   

        <?php if( get_row_layout() == 'acf_banner_secondary' ) {?>
            <?php get_template_part('includes/template-parts/banners/banner-secondary'); ?> 
        <?php } ?>
        
        <?php if( get_row_layout() == 'acf_banner_image' ) {?>
            <?php get_template_part('includes/template-parts/banners/banner-image'); ?> 
        <?php } ?>
    <?php } ?>
<?php } ?>

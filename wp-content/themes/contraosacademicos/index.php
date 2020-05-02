<?php get_header();?>

<?php get_template_part('includes/template-pages/loops/banners'); ?> 

<?php if(get_field('acf_template_parts')) { ?>
    <?php while (has_sub_field('acf_template_parts')){ ?>
        
    <?php } ?>
<?php } ?>

<?php get_footer();?>


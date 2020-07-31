<?php if( have_rows('acf_banner') ): ?>
    <?php while( have_rows('acf_banner') ): the_row(); 

        $title = get_sub_field('acf_banner_title');
        $subtitle = get_sub_field('acf_banner_subtitle');
        $image = get_sub_field('acf_banner_background_image');
        $content = get_sub_field('acf_banner_highlight_content');
        $vhValue = get_sub_field('acf_banner_background_height');
        ?>

        <?php if(get_field('acf_banner_select') == 'banner-secondary'): ?>
            <section class="coa-banner banner-secondary coa-banner-image" style="height:<?php echo $vhValue; ?>;background-image: url('<?php echo $image['url']; ?>');">
                <div class="coa-banner-container">    
                    <h1 class="coa-banner-title"><?php echo $title; ?></h1>
                    <p class="coa-banner-subtitle"><?php echo $subtitle; ?></p>
                    <div class="coa-banner-arrow"><span></span></div>	
                </div>
            </section>
        <?php else: ?>
            <section class="coa-banner banner-primary" style="height:<?php echo $vhValue; ?>;">
                <div class="coa-banner-container">    
                    <h1 class="coa-banner-title"><?php echo $title; ?></h1>
                    <p class="coa-banner-subtitle"><?php echo $subtitle; ?></p>
                    <div class="coa-banner-arrow"><span></span></div>	
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
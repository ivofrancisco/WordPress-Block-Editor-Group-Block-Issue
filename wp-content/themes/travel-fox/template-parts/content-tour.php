<!-- BEGIN: TOURS ITEM -->
<div class="s-tour-item">
    <!-- BEGIN: TOURS ITEM MEDIA -->
    <div class="s-tour-item-media">
        <img src="<?php echo get_theme_file_uri('/images/tours_01.jpg'); ?>" alt="Travel Fox - Wordpress Blog Testing Theme" />
    </div>
    <!-- END: TOURS ITEM MEDIA -->

    <!-- BEGIN: TOURS ITEM INFO -->
    <div class="s-tour-item-info">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <!-- Begin: s-tour-price -->
        <div class="s-tour-price">
            <h4>€<?php the_field('value'); ?></h4>
            <span>/ <?php the_field('specs'); ?></span>
        </div>
        <!-- End: s-tour-price -->
        <!-- Begin: g-paragraph-1 -->
        <div class="g-paragraph-1">
            <?php echo wp_trim_words(get_the_content(), 12); ?>
        </div>
        <!-- End: g-paragraph-1 -->
    </div>
    <!-- END: TOURS ITEM INFO -->
</div>
<!-- END: TOURS ITEM -->
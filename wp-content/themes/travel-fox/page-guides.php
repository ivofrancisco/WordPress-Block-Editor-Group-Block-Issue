<?php get_header();

pageHeader(array(
    'title' => get_the_archive_title()
));
?>

<!-- BEGIN: GUIDES
==================================================== -->
<div id="p-guides">
    <!-- Begin: g-container-md -->
    <div class="g-container-md">

        <?php

        $tourGuides = new WP_Query(array(
            'post_type' => 'guide',
            'posts_per_page' => -1
        ));

        while ($tourGuides->have_posts()) :
            $tourGuides->the_post(); ?>

            <!-- BEGIN: GUIDE ITEM -->
            <div class="s-guide-item">
                <!-- BEGIN: GUIDE MEDIA -->
                <div class="s-guide-media">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%; height:auto;">
                    </a>
                </div>
                <!-- END: GUIDE MEDIA -->

                <!-- BEGIN: GUIDE INFO -->
                <div class="s-guide-info">
                    <h3><?php the_title(); ?></h3>
                    <!-- Begin: g-paragraph-1 -->
                    <div class="g-paragraph-1">
                        <?php

                        if (has_excerpt()) {
                            the_excerpt();
                        } else {
                            echo wp_trim_words(get_the_content(), 12);
                        }

                        ?>
                    </div>
                    <!-- End: g-paragraph-1 -->
                    <!-- Begin: s-guide-social -->
                    <div class="s-guide-social">
                        <!-- Begin: s-guide-social-icon -->
                        <div class="s-guide-social-icon">
                            <i class="icon-linkedin"></i>
                        </div>
                        <!-- End: s-guide-social-icon -->
                        <!-- Begin: s-guide-social-icon -->
                        <div class="s-guide-social-icon">
                            <i class="icon-facebook"></i>
                        </div>
                        <!-- End: s-guide-social-icon -->
                        <!-- Begin: s-guide-social-icon -->
                        <div class="s-guide-social-icon">
                            <i class="icon-dribbble"></i>
                        </div>
                        <!-- End: s-guide-social-icon -->
                    </div>
                    <!-- End: s-guide-social -->
                </div>
                <!-- END: GUIDE INFO -->
            </div>
            <!-- END: GUIDE ITEM -->

        <?php endwhile ?>

    </div>
    <!-- End: g-container-md -->
</div>
<!-- END: GUIDES -->

<?php get_footer();

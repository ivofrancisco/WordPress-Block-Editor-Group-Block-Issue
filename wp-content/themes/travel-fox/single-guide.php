<?php get_header();

while (have_posts()) :
    the_post();
    pageHeader();

?>

    <!-- BEGIN: GUIDE DETAILS
    ==================================================== -->
    <div id="p-guide-details">
        <!-- Begin: g-container-md -->
        <div class="g-container-md">
            <!-- Begin: s-guide-details-media -->
            <div class="s-guide-details-media">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%; height:auto;">
            </div>
            <!-- End: s-guide-details-media -->
            <h2><?php the_title(); ?></h2>
            <!-- Begin: g-paragraph-1 -->
            <div class="g-paragraph-1">
                <?php the_content(); ?>
            </div>
            <!-- End: g-paragraph-1 -->

            <?php

            $guidePageTours = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'tour',
                'meta_query' => array(
                    array(
                        'key' => 'related_guides',
                        'compare' => 'LIKE',
                        'value' => '"' . get_the_ID() . '"'
                    )
                )
            ));

            if ($guidePageTours->have_posts()) : ?>

                <!-- Begin: g-related-types -->
                <div class="g-related-types">
                    <h4>Related Tours</h4>
                    <ul>
                        <?php while ($guidePageTours->have_posts()) :
                            $guidePageTours->the_post()  ?>

                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>

                        <?php endwhile ?>
                    </ul>
                </div>
                <!-- End: g-related-types -->
            <?php endif; ?>
        </div>
        <!-- End: g-container-md -->
    </div>
    <!-- END: GUIDE DETAILS -->

<?php endwhile;

get_footer();

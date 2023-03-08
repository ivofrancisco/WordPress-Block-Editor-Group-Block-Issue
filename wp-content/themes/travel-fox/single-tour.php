<?php get_header();

while (have_posts()) :
    the_post();
    pageHeader();
?>

    <!-- BEGIN: TOUR DETAILS
    ==================================================== -->
    <div id="p-tour-details">
        <!-- Begin: g-container-md -->
        <div class="g-container-md">
            <h2><?php the_title(); ?></h2>
            <!-- Begin: g-paragraph-1 -->
            <div class="g-paragraph-1">
                <?php the_content(); ?>
            </div>
            <!-- End: g-paragraph-1 -->

            <!-- BEGIN: TOUR OPTIONS -->
            <div class="s-tour-options">
                <i class="icon-bus"></i>
                <i class="icon-deck-chair"></i>
                <i class="icon-caravan"></i>
                <i class="icon-room-key"></i>
            </div>
            <!-- END: TOUR OPTIONS -->

            <!-- Begin: g-related-types -->
            <div class="g-related-types">

                <?php $relatedGuides = get_field('related_guides');
                if (count($relatedGuides) > 0) : ?>

                    <h4>Related Guides</h4>
                    <ul>
                        <?php
                        foreach ($relatedGuides as $guide) : ?>
                            <li>
                                <a href="<?php echo get_the_permalink($guide); ?>"><?php echo get_the_title($guide); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                <?php endif ?>

            </div>
            <!-- End: g-related-types -->
        </div>
        <!-- End: g-container-md -->
    </div>
    <!-- END: TOUR DETAILS -->

<?php endwhile;

get_footer();

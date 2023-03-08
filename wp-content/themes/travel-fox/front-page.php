<?php get_header(); ?>

<!-- BEGIN: HERO 
==================================================== -->
<div id="p-hero">
    <!-- BEGIN: HERO CONTENT -->
    <div id="s-hero-content">
        <!-- BEGIN: HERO MEDIA -->
        <div id="s-hero-media" style="
                        background-image: linear-gradient(
                                to right,
                                rgba(0, 0, 0, 0.65),
                                rgba(0, 0, 0, 0.35)
                            ),
                            url(<?php echo get_theme_file_uri('/images/tour_x.jpg'); ?>);
                    ">
            <!-- BEGIN: SECTION HEADER -->
            <div class="g-section-header leftie">
                <small>charcoal meh wayfarers</small>
                <h2>
                    La croix activated charcoal green juice artisan
                    literally.
                </h2>
            </div>
            <!-- END: SECTION HEADER -->
        </div>
        <!-- END: HERO MEDIA -->

        <!-- BEGIN: HERO INFO -->
        <div id="s-hero-info" style="display: none">
            <!-- BEGIN: SECTION HEADER -->
            <div class="g-section-header">
                <small>charcoal meh wayfarers</small>
                <h2>
                    La croix activated charcoal green juice artisan
                    literally.
                </h2>
            </div>
            <!-- END: SECTION HEADER -->
        </div>
        <!-- END: HERO INFO -->
    </div>
    <!-- END: HERO CONTENT -->
</div>
<!-- END: HERO -->

<!-- BEGIN: TOURS
==================================================== -->
<div id="p-tours">
    <!-- Begin: g-container-md -->
    <div class="g-container-md">

        <?php

        $tours = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'tour',
        ));

        while ($tours->have_posts()) :
            $tours->the_post(); ?>

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

        <?php endwhile ?>

    </div>
    <!-- End: g-container-md -->
</div>
<!-- END: TOURS -->

<!-- BEGIN: NEWSLETTER CTA
==================================================== -->
<div class="g-newsletter-cta">
    <!-- Begin: g-container-md -->
    <div class="g-container-md">
        <!-- BEGIN: NEWSLETTER CTA CONTENT -->
        <div id="s-nwsltr-cta-content">
            <!-- Begin: nwsltr-cta-info -->
            <div id="s-nwsltr-cta-info">
                <h2>Subscribe the Newsletter.</h2>
            </div>
            <!-- End: nwsltr-cta-info -->
            <!-- Begin: nwsltr-cta-action -->
            <div id="s-nwsltr-cta-action">
                <!-- Begin: s-nwsltr-cta-form -->
                <form id="p-newsletter-cta-form">
                    <!-- Begin: form-group form-inline -->
                    <div class="form-group">
                        <input type="text" class="form-control md" id="s-news-input" placeholder="Enter you email" />
                    </div>
                    <!-- End: form-group form-inline -->
                    <button type="submit" class="btn bbm btn-block">
                        Subscribe
                    </button>
                </form>
                <!-- End: s-nwsltr-cta-form -->
            </div>
            <!-- End: s-nwsltr-cta-action -->
        </div>
        <!-- END: NEWSLETTER CTA CONTENT -->
    </div>
    <!-- End: g-container-md -->
</div>
<!-- END: NEWSLETTER CTA -->

<!-- BEGIN: LATEST POSTS
==================================================== -->
<div id="s-latest-posts">
    <!-- Begin: g-container-md -->
    <div class="g-container-md">
        <!-- BEGIN: SECTION HEADER -->
        <div class="g-section-header leftie">
            <small>Fanny aleo taiyaki </small>
            <h2>
                What happened lately.
            </h2>
        </div>
        <!-- END: SECTION HEADER -->

        <!-- BEGIN: POST WRAPPER -->
        <div id="s-posts-wrapper">

            <?php

            $homePagePosts = new WP_Query(array(
                'posts_per_page' => 3,
            ));

            while ($homePagePosts->have_posts()) :
                $homePagePosts->the_post(); ?>

                <!-- BEGIN: BLOG ITEM -->
                <div class="s-blog-item">
                    <!-- BEGIN: BLOG ITEM MEDIA -->
                    <div class="s-blog-item-media">
                        <img src="<?php echo get_theme_file_uri('/images/featured_02.jpg') ?>" alt="Spacey Wordpress Theme" />
                    </div>
                    <!-- END: BLOG ITEM MEDIA -->

                    <!-- BEGIN: BLOG ITEM INFO -->
                    <div class="s-blog-item-info">
                        <!-- Begin: s-blog-item-cat -->
                        <div class="s-blog-item-cat">
                            <h6><?php echo get_the_category_list(' ,'); ?></h6>
                        </div>
                        <!-- End: s-blog-item- -->
                        <h3><?php the_title(); ?></h3>
                        <!-- Begin: g-paragraph-1 -->
                        <div class="g-paragraph-1">
                            <?php the_excerpt(); ?>
                        </div>
                        <!-- End: g-paragraph-1 -->
                        <!-- Begin: g-read -->
                        <div class="g-read">
                            <a href="<?php the_permalink(); ?>">Read more</a>
                        </div>
                        <!-- End: g-read -->
                    </div>
                    <!-- END: BLOG ITEM INFO -->
                </div>
                <!-- END: BLOG ITEM -->

            <?php endwhile; ?>

        </div>
        <!-- END: POST WRAPPER -->
    </div>
    <!-- End: g-container-md -->
</div>
<!-- END: LATEST POSTS -->

<?php get_footer();

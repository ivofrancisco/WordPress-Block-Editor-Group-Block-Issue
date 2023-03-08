<?php get_header();

while (have_posts()) :
    the_post(); ?>

    <!-- BEGIN: SINGLE POST
        ==================================================== -->
    <div class="p-single-post">
        <!-- Begin: g-container-sm -->
        <div class="g-container-sm">

            <!-- BEGIN: POST HEADER
            ==================================================== -->
            <div class="s-post-header">
                <!-- Begin: s-post-item-icon -->
                <div class="s-post-item-icon">
                    <small><?php echo get_the_category_list(', ') ?></small>
                </div>
                <!-- End: s-post-item-icon -->
                <h2>
                    <?php the_title(); ?>
                </h2>

                <!-- BEGIN: POST AUTTHOR -->
                <div class="s-post-author">
                    <!-- Begin: s-author-thumbnail -->
                    <div class="s-author-thumbnail">
                        <img src="<?php echo get_theme_file_uri('/images/author_01.jpg'); ?>" alt="Spacey Wordpress Theme" />
                    </div>
                    <!-- End: s-author-thumbnail -->
                    <h5>By <?php the_author_posts_link() ?> - <?php the_time('n F, Y'); ?> </h5>
                </div>
                <!-- END: POST AUTHOR -->
            </div>
            <!-- END: POST HEADER -->

            <!-- BEGIN: POST CONTENT
                ==================================================== -->
            <div class="s-post-content">
                <img src="<?php echo get_theme_file_uri('/images/featured_01.jpg'); ?>" class="s-intro-feat-img" alt="Spacey Wordpress Theme" />
                <!-- BEGIN: POST CONTENT TEXT -->
                <div class="s-post-content-text">
                    <!-- Begin: g-paragraph-1 -->
                    <div class="g-paragraph-1">
                        <?php the_content(); ?>
                    </div>
                    <!-- End: g-paragraph-1 -->
                </div>
                <!-- END: POST CONTENT TEXT -->
            </div>
            <!-- END: POST CONTENT -->
        </div>
        <!-- End: g-container-sm -->
    </div>
    <!-- END: SINGLE POST -->

<?php endwhile;

get_footer();

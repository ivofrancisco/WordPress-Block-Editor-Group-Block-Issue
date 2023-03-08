<?php get_header();
pageHeader(array(
    'title' => get_the_archive_title()
));

?>

<!-- BEGIN: BLOG
==================================================== -->
<div id="p-blog">
    <!-- Begin: g-container-md -->
    <div class="g-container-md">

        <?php while (have_posts()) :
            the_post(); ?>

            <!-- BEGIN: BLOG ITEM -->
            <div class="s-blog-item">
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
    <!-- End: g-container-md -->
</div>
<!-- END: BLOG -->

<?php get_footer();

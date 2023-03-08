<?php get_header();
$catName = get_the_category()[0]->cat_name;
pageHeader(array(
    'title' => $catName,
));

?>

<!-- BEGIN: GENERIC CONTENT
==================================================== -->
<div class="g-generic-content">

    <!-- Begin: g-container-md -->
    <div class="g-container-md">

        <?php while (have_posts()) :
            the_post(); ?>

            <!-- BEGIN: BLOG ITEM -->
            <div class="s-blog-item">
                <!-- Begin: href to post -->
                <a href="<?php the_permalink(); ?>">

                    <!-- BEGIN: BLOG ITEM INFO -->
                    <div class="s-blog-item-info">
                        <!-- Begin: s-blog-item-cat -->
                        <div class="s-blog-item-cat">
                            <h6><?php echo $catName; ?></h6>
                        </div>
                        <!-- End: s-blog-item- -->
                        <h3><?php the_title(); ?></h3>
                        <!-- Begin: g-paragraph-1 -->
                        <div class="g-paragraph-1">
                            <?php the_excerpt(); ?>
                        </div>
                        <!-- End: g-paragraph-1 -->
                    </div>
                    <!-- END: BLOG ITEM INFO -->

                </a>
                <!-- End: href to post -->
            </div>
            <!-- END: BLOG ITEM -->

        <?php endwhile; ?>

    </div>
    <!-- End: g-container-md -->
</div>
<!-- END: GENERIC CONTENT -->

<?php get_footer();

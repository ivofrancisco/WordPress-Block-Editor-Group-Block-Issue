<?php get_header();

while (have_posts()) :
    the_post();

    pageHeader(array(
        'title' => get_the_title(),
    ));

?>

    <!-- BEGIN: GENERIC CONTENT
        ==================================================== -->
    <div class="g-generic-content">
        <!-- Begin: g-container-md -->
        <div class="g-container-md">
            <h1><?php the_title(); ?> Page</h1>
            <?php the_content(); ?>
        </div>
        <!-- Begin: g-container-md -->
    </div>
    <!-- END: GENERIC CONTENT -->

<?php endwhile;

get_footer();

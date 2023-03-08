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
            <?php get_search_form(); ?>
        </div>
        <!-- Begin: g-container-md -->
    </div>
    <!-- END: GENERIC CONTENT -->

<?php endwhile;

get_footer();

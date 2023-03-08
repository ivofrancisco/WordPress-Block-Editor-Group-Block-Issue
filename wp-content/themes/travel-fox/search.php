<?php get_header();
pageHeader(array(
    'title' => 'Search Results',
    'subtitle' => 'You searched for &ldquo;' . esc_html(get_search_query()) . '&rdquo;'
));

?>

<!-- BEGIN: SEARCH
==================================================== -->
<div id="p-search ">
    <!-- Begin: g-container-md -->
    <div class="g-container-md">

        <?php

        if (have_posts()) {

            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', get_post_type());

            endwhile;
        } else {
            echo '<h2 class="headline headline--small-plus">No results match that search.</h2>';
        }

        get_search_form();

        ?>

    </div>
    <!-- End: g-container-md -->
</div>
<!-- END: SEARCH -->

<?php get_footer();

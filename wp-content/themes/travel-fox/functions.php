<?php

require get_theme_file_path('/inc/search-route.php');

// Customize rest API 
function fxt_custom_rest()
{
    register_rest_field(array('post', 'page'), 'authorName', array(
        'get_callback' => function () {
            return get_the_author();
        }
    ));
}
add_action('rest_api_init', 'fxt_custom_rest');

// Page headers 
function pageHeader($args = NULL)
{
    if (!isset($args['title'])) {
        $args['title'] = get_the_title();
    }

    if (!isset($args['photo'])) {
        if (get_field('page_header_background') and !is_archive() and !is_home()) {
            $args['photo'] = get_field('page_header_background')['sizes']['pageHeader'];
        } else {
            $args['photo'] = get_theme_file_uri('/images/page_header_02.jpg');
        }
    }
?>

    <div class="g-page-header" style="
                background-image: linear-gradient(
                        to bottom,
                        rgba(0, 0, 0, 0.8),
                        rgba(0, 0, 0, 0.35)
                    ),
                    url(<?php echo $args['photo']; ?>);
            ">
        <!-- Begin: g-container-lg -->

        <div class="g-container-lg">
            <!-- BEGIN: SECTION HEADER -->
            <div class="g-section-header">
                <h1><?php echo $args['title']; ?></h1>
            </div>
            <!-- END: SECTION HEADER -->
        </div>
        <!-- End: g-container-lg -->
    </div>

<?php
}

// Load CSS & Javascript files
function fxt_files()
{
    // Enqueue CSS files
    wp_enqueue_style('bootstrap-styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('fxt-main-styles', get_theme_file_uri('/build/style-index.css'));

    // Enqueue Javascript files
    wp_enqueue_script('fxt-main-js', get_theme_file_uri('/build/index.js'), ['jquery'], '1.0', true);

    wp_localize_script('fxt-main-js', 'fxtData', array(
        'root_url' => get_site_url(),
        'post_types' => get_posts()
    ));
}
add_action('wp_enqueue_scripts', 'fxt_files');

function fxt_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Locattion');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('pageHeader', 1920, 400, true);
}
add_action('after_setup_theme', 'fxt_features');

function fxt_excerpt_length()
{
    return 7;
}
add_filter('excerpt_length', 'fxt_excerpt_length');

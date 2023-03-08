<?php

function fxt_post_types()
{
    // Tours
    register_post_type('tour', array(
        'rewrite' => array(
            'slug' => 'tours'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'labels' => array(
            'name' => 'Tours',
            'add_new_item' => 'Add New Tour',
            'edit_item' => 'Edit Tour',
            'all' => 'All Tours',
            'singular_name' => 'Tour',
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));

    register_post_type('guide', array(
        'rewrite' => array(
            'slug' => 'guides'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Guides',
            'add_new_item' => 'Add New Guide',
            'edit_item' => 'Edit Guide',
            'all' => 'All Guides',
            'singular_name' => 'Guide',
        ),
        'menu_icon' => 'dashicons-universal-access'
    ));
}
add_action('init', 'fxt_post_types');

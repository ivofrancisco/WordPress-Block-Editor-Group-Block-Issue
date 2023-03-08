<?php

function fxt_register_search()
{
    register_rest_route('fxt/v1', 'search', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'fxtSearchResults'
    ));
}
add_action('rest_api_init', 'fxt_register_search');

function fxtSearchResults($data)
{
    // General search
    $mainQuery = new WP_Query(array(
        'post_type' => array('post', 'page', 'tour', 'guide'),
        's' => sanitize_text_field($data['term'])
    ));

    $results = array(
        'generalInfo' => array(),
        'tours' => array(),
        'guides' => array()
    );

    while ($mainQuery->have_posts()) {
        $mainQuery->the_post();
        switch (get_post_type()) {
            case 'post':
            case 'page':
                array_push($results['generalInfo'], array(
                    'title' => get_the_title(),
                    'permalink' => get_the_permalink(),
                    'postType' => get_post_type(),
                    'authorName' => get_the_author()
                ));
                break;
            case 'tour':
                array_push($results['tours'], array(
                    'id' => get_the_ID(),
                    'title' => get_the_title(),
                    'permalink' => get_the_permalink()
                ));
                break;
            case 'guide':
                array_push($results['guides'], array(
                    'title' => get_the_title(),
                    'permalink' => get_the_permalink()
                ));
                break;
            default:
                return [];
        }
    }

    if ($results['tours']) {
        $toursMetaQuery = array(
            'relation' => 'OR'
        );
        foreach ($results['tours'] as $item) {
            array_push(
                $toursMetaQuery,
                array(
                    'key' => 'related_tours',
                    'compare' => 'LIKE',
                    'value' => '"' . $item['id'] . '"',
                )
            );
        }

        // Tour related guides
        $tourRelationshipQuery = new WP_Query(array(
            'post_type' => 'guide',
            'relation' => 'OR',
            'meta_query' => $toursMetaQuery
        ));

        while ($tourRelationshipQuery->have_posts()) {
            $tourRelationshipQuery->the_post();

            if (get_post_type() == 'guide') {
                array_push($results['guides'], array(
                    'title' => get_the_title(),
                    'permalink' => get_the_permalink()
                ));
            }
        }

        // Avoid duplicate results
        $results['guides'] = array_values(array_unique($results['guides'], SORT_REGULAR));
    }

    return $results;
}

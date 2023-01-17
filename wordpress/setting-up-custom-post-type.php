<?php

// lets create a custom post type
// we can do this in the functions.php file or we can create a seperate file and include it in the functions.php file

// we need to hook into the wordpress action init

add_action('init', 'create_post_type');

function create_post_type() {
    register_post_type('product', [
        'labels' => [
            'name' => __('Products'),
            'singular_name' => __('Product')
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields',
            'page-attributes'
        ],
        'taxonomies' => ['category', 'post_tag'],
        'rewrite' => [
            'slug' => 'products'
        ],
        'menu_icon' => 'dashicons-cart',
        'show_in_rest' => true,
        'rest_base' => 'products',
        // 'rest_controller_class' => 'WP_REST_Posts_Controller',
        // 'show_in_graphql' => true,
        // 'graphql_single_name' => 'product',
        
    ]);
}
<?php

// this file contains cool functions that pragmatic quite often use in wordpress builds
// Here we will detail what each function does and how it's usefull.
// please test thoroughly before using in production
// please only use the functions you require in your theme

// allows you to define custom post formats your theme supports
add_theme_support('post-formats', array('aside', 'quote'));

// this allows you to specify if the theme supports post thumbnails
add_theme_support( 'post-thumbnails');

// we quite often add these in hooks which have been discussed.
// example below

function theme_setup() {
    /* post formats */
    add_theme_support('post-formats', array('aside', 'quote'));

    /* post thumbnails */
    add_theme_support('post-thumbnails', array('post', 'page'));

    /* HTML5 */
    add_theme_support('html5');

    /* automatic feed links */
    add_theme_support('automatic-feed-links');
}

add_action('after_theme_setup', 'theme_setup');

// remove function, usually used in child themes if parent has themes we don't want to support
remove_action( 'init', 'parent_function' );

// we quite often split these out and use custom incude files. For example we may have a directory that add custom post types.
// This is then where we define the custom post types in seperate files
foreach(glob(get_template_directory() . '/custom-post-types/*.php') as $file) {
    include_once $file;
}

// custom wordpress footer
function remove_footer_admin () {
    echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Extra Link: <a href="#" target="_blank">Something</a></p>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin');

// add custom message to dashboard

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
 
    wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
    echo '<p>Welcome to Custom Blog Theme! Need help? Contact the developer <a href="mailto:yourusername@gmail.com">here</a></p>';
}


// add custom image sizes
add_image_size('sidebar-thumb', 120, 120, true); // Hard Crop Mode
add_image_size('homepage-thumb', 220, 180); // Soft Crop Mode
add_image_size('singlepost-thumb', 590, 9999); // Unlimited Height Mode
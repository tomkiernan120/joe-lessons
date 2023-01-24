<?php

if (!function_exists('chld_thm_cfg_locale_css')) {
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
        $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
}


if (!function_exists('child_theme_configurator_css')) {
    function child_theme_configurator_css()
    {       
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('hello-elementor', 'hello-elementor', 'hello-elementor-theme-style'));
        wp_enqueue_style('test-theme-css', trailingslashit(get_stylesheet_directory_uri()) . 'dist/main.css', array('hello-elementor', 'hello-elementor', 'hello-elementor-theme-style'));
    }
}

add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

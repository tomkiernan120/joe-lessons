<?php
/*
   Plugin Name: Elementor Timeline
   Plugin URI: https://pragmaticdigital.co.uk
   description: >-
    A plugin for elementor to create a timeline widget
   Version: 1.0
   Author: Tom Kiernan  
   Author URI: https://pragmaticdigital.co.uk
   License: GPL2
   */

function elementor_timeline_register_widgets($widgets_manager)
{
    // include the php class file
    require_once(__DIR__ . '/widgets/timeline.php');

    // register the widget
    $widgets_manager->register(new \TimelineWidget());
}

add_action('elementor/widgets/widgets_registered', 'elementor_timeline_register_widgets');

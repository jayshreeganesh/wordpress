<?php
/*
Plugin Name: My Custom Plugin
Description: A simple custom plugin to display a message using a shortcode.
Version: 1.0
Author: Your Name
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Function to display a custom message
 */
function my_custom_message_function() {
    return "<p>Hello, this is my custom plugin message!</p>";
}

/**
 * Register the shortcode [my_custom_message]
 */
function my_custom_plugin_register_shortcodes() {
    add_shortcode('my_custom_message', 'my_custom_message_function');
}

// Hook into WordPress to register the shortcode when the plugin is initialized
add_action('init', 'my_custom_plugin_register_shortcodes');

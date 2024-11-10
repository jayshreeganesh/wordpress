<?php
/*
 Plugin Name: My Simple Plugin
 Description: A simple custom plugin for WordPress.
 Version: 1.0
 Author: Your Name
 */

// Prevent direct access
if ( !defined( 'ABSPATH' ) ) exit;

// Function to display a custom message
function my_simple_plugin_message() {
    echo '<p>Hello from My Simple Plugin!</p>';
}

// Hook into WordPress
add_action( 'the_content', 'my_simple_plugin_message' );

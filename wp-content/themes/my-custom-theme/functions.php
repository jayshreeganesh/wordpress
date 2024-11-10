<?php
// Add theme support for post thumbnails
function my_custom_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// Enqueue styles and scripts
function my_custom_theme_enqueue_assets() {
    wp_enqueue_style('my-custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_assets');

function my_enqueue_scripts() {
    wp_enqueue_script('custom-ajax-js', get_template_directory_uri() . '/js/custom-ajax.js', array('jquery'), null, true);

    // Localize the script with new data
    wp_localize_script('custom-ajax-js', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php') // URL to send the AJAX request to
    ));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function custom_ajax_action_handler() {
    // Check if the AJAX request has the correct action
    if (isset($_POST['action']) && $_POST['action'] === 'custom_ajax_action') {
        $response = array('message' => 'AJAX request received successfully!');

        // Send JSON response back to the JavaScript
        wp_send_json($response);
    } else {
        wp_send_json(array('message' => 'Invalid request'), 400);
    }
}

// Register the AJAX action for logged-in and logged-out users
add_action('wp_ajax_custom_ajax_action', 'custom_ajax_action_handler');
add_action('wp_ajax_nopriv_custom_ajax_action', 'custom_ajax_action_handler');

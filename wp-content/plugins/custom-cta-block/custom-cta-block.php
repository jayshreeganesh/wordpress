<?php
/**
 * Plugin Name: Custom CTA Block
 * Description: A custom reusable block for a call-to-action box.
 * Version: 1.0
 * Author: Your Name
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Enqueue block assets
function custom_cta_block_assets() {
    wp_enqueue_script(
        'custom-cta-block-js',
        plugins_url( 'build/index.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-i18n' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )
    );

    wp_enqueue_style(
        'custom-cta-block-editor-css',
        plugins_url( 'build/editor.css', __FILE__ ),
        array( 'wp-edit-blocks' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/editor.css' )
    );
}
add_action( 'enqueue_block_editor_assets', 'custom_cta_block_assets' );

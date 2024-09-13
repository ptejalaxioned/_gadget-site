<?php
/*
Plugin Name: My Simple Block
Description: A simple custom block for Gutenberg.
Version: 1.0
Author: Tejal Pagar
*/

function my_simple_block_register_block() {
    // Register block editor script
    wp_register_script(
        'my-simple-block-editor-script',
        plugins_url('block.js', __FILE__),
        array('wp-blocks', 'wp-element', 'wp-editor'),
        filemtime(plugin_dir_path(__FILE__) . 'block.js')
    );

    // Register block editor styles
    wp_register_style(
        'my-simple-block-editor-style',
        plugins_url('editor.css', __FILE__),
        array('wp-edit-blocks'),
        filemtime(plugin_dir_path(__FILE__) . 'editor.css')
    );

    // Register block front-end styles
    wp_register_style(
        'my-simple-block-style',
        plugins_url('style.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'style.css')
    );

    // Register the block
    register_block_type('my-simple-block/example', array(
        'editor_script' => 'my-simple-block-editor-script',
        'editor_style'  => 'my-simple-block-editor-style',
        'style'         => 'my-simple-block-style',
    ));
}
add_action('init', 'my_simple_block_register_block');

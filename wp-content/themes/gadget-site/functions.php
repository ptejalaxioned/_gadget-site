<?php
add_action('after_setup_theme', 'theme_setup');
function theme_setup()
{
  load_theme_textdomain('gadget-site');
  /* Add menu support */
  add_theme_support('menus');
  /* Add excerpt for pages */
  add_post_type_support('page', 'excerpt');
  add_theme_support('title-tag');
  /* Enable support for Post Thumbnails on posts and pages. */
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form'));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
function my_theme_enqueue_scripts()
{
  // Enqueue custom styling
  wp_enqueue_style('custom-styling', get_template_directory_uri() . '/assets/css/my-style.css', array(), '1.0', 'all');
  // Enqueue custom script
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'));
}

//Post Option Remove
function remove_posts_menu()
{
    remove_menu_page('edit.php');
}
add_action('admin_init', 'remove_posts_menu');

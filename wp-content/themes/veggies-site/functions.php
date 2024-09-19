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

  // Enqueue banner-block-styling
  wp_enqueue_style('banner-block-styling', get_template_directory_uri() . '/assets/css/banner-block.css', array(), '1.0', 'all');

  // Enqueue turnip-green-block-styling
  wp_enqueue_style('turnip-green-block-styling', get_template_directory_uri() . '/assets/css/turnip-green-block.css', array(), '1.0', 'all');

  // Enqueue specials-block-styling
  wp_enqueue_style('specials-block-styling', get_template_directory_uri() . '/assets/css/specials-block.css', array(), '1.0', 'all');

  // Enqueue about-us-block-styling
  wp_enqueue_style('about-us-block-styling', get_template_directory_uri() . '/assets/css/about-us-block.css', array(), '1.0', 'all');

  // Enqueue menu-block-styling
  wp_enqueue_style('menu-block-styling', get_template_directory_uri() . '/assets/css/menu-block.css', array(), '1.0', 'all');

   // Enqueue footer-styling
   wp_enqueue_style('footer-style-styling', get_template_directory_uri() . '/assets/css/footer-style.css', array(), '1.0', 'all');


  // Enqueue Font Awesome script
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/5edb8394fa.js', array(), null, true);

  // Localize script for AJAX
  wp_localize_script('custom-script', 'ajax_object', array(
    'ajaxurl' => admin_url('admin-ajax.php')
  ));
}

//Post Option Remove
function remove_posts_menu()
{
  remove_menu_page('edit.php');
}
add_action('admin_init', 'remove_posts_menu');

//register nav menus
register_nav_menus(
  array("primary-menu" => "Top Menu")
);

//condition for option pages
if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'Theme Settings',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Veggie Header Settings',
    'menu_title'  => 'Veggie Header',
    'parent_slug' => 'theme-general-settings',
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Veggie Footer Settings',
    'menu_title'  => 'Veggie Footer',
    'parent_slug' => 'theme-general-settings',
  ));
}

require_once 'functions/func-acf-block-register.php';

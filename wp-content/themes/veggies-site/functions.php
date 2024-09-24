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
  wp_enqueue_style('custom-styling', get_template_directory_uri() . '/assets/css/my-style-copy.css', array(), '1.0', 'all');

  // Enqueue banner-block-styling
  wp_enqueue_style('banner-block-styling', get_template_directory_uri() . '/assets/css/banner-block-copy.css', array(), '1.0', 'all');

  // Enqueue turnip-green-block-styling
  wp_enqueue_style('turnip-green-block-styling', get_template_directory_uri() . '/assets/css/turnip-green-block.css', array(), '1.0', 'all');

  // Enqueue specials-block-styling
  wp_enqueue_style('specials-block-styling', get_template_directory_uri() . '/assets/css/specials-block.css', array(), '1.0', 'all');

  // Enqueue about-us-block-styling
  wp_enqueue_style('about-us-block-styling', get_template_directory_uri() . '/assets/css/about-us-block-copy.css', array(), '1.0', 'all');

  // Enqueue menu-block-styling
  wp_enqueue_style('menu-block-styling', get_template_directory_uri() . '/assets/css/menu-block.css', array(), '1.0', 'all');

  // Enqueue footer-styling
  wp_enqueue_style('footer-style-styling', get_template_directory_uri() . '/assets/css/footer-style.css', array(), '1.0', 'all');

  // Enqueue line-style styling
  wp_enqueue_style('p-custom-styling', get_template_directory_uri() . '/assets/css/line-style.css', array(), '1.0', 'all');

  // Enqueue output.css styling
  // wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css' , array(), '1.0', 'all');

  // Enqueue Font Awesome script
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/5edb8394fa.js', array(), null);

  // Localize script for AJAX
  wp_localize_script('custom-script', 'ajax_object', array(
    'ajaxurl' => admin_url('admin-ajax.php')
  ));
}

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

function my_custom_taxonomy_menutype()
{
  $labels = array(
    'name'              => _x('Menu Types', 'taxonomy general name'),
    'singular_name'     => _x('Menu Type', 'taxonomy singular name'),
    'search_items'      => __('Search Menu Types'),
    'all_items'         => __('All Menu Types'),
    'parent_item'       => __('Parent Menu Type'),
    'parent_item_colon' => __('Parent Menu Type:'),
    'edit_item'         => __('Edit Menu Type'),
    'update_item'       => __('Update Menu Type'),
    'add_new_item'      => __('Add New Menu Type'),
    'new_item_name'     => __('New Menu Type Name'),
    'menu_name'         => __('Menu Types'),
  );

  $args = array(
    'hierarchical'      => true, // Acts like categories (set to false for tags behavior)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'menutype'),
  );

  register_taxonomy('menutype', array('post'), $args);
}
add_action('init', 'my_custom_taxonomy_menutype');


//linkAttributes Function
function linkAttributes($link, $class, $content = "")
{
  $link_url = str_replace('http://', '', $link['url']);
  $link_target = $link['target'];
  $link_title = $link['title'];

  if ($link_title == "Email" || $link_title == "Phone Number") {
    $content = $link_url;
  }

  if ($content == "") {
    $content = $link_title;
  }

  if ($link_target == "_blank") {
    $rel = "rel='noopener noreferrer'";
    $anchorTag = "<a href=\"$link_url\" 
                     target=\"$link_target\" 
                     class=\"$class\" 
                     title=\"$link_title\" 
                     $rel>
                      $content
                 </a>";
    if ($link_title == "Email") {
      $anchorTag  = substr_replace($anchorTag, "mailto:", 9, 0);
    } else if ($link_title == "Phone Number") {
      $anchorTag  = substr_replace($anchorTag, "tel:", 9, 0);
    }
  } else if ($link_target == "") {
    $link_target = "_self";
    $anchorTag = "<a href=\"$link_url\" 
                     target=\"$link_target\" 
                     class=\"$class\" 
                     title=\"$link_title\">
                     $content
                 </a>";
  }
  return $anchorTag;
}

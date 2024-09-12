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
    'page_title'  => 'Header Settings',    
    'menu_title'  => 'Header',            
    'parent_slug' => 'theme-general-settings', 
));
}

//enable classic editor and disable  gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_widgets_block_editor', '__return_false');


//category filter
function ajax_filter_posts_by_category()
{
  $data = isset($_POST['data']) ? sanitize_text_field($_POST['data']) : '';

  if ($data != "all") {
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'category',
          'field'    => 'slug',
          'terms'    =>  $data,
          'operator' => 'IN',
        ),
      ),
    );
  } else {
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'category',
          'field'    => 'slug',
          'operator' => 'Exists',
        ),
      ),
    );
  }
  $all_posts = new WP_Query($args);
  $posts_data = array();

  if ($all_posts->have_posts()) {
    while ($all_posts->have_posts()) {
      $all_posts->the_post();
      $post_data = array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'thumbnail' => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '',
        'price' => get_field('price') ? get_field('price') : ''
      );
      $posts_data[] = $post_data;
    }
    wp_reset_postdata();
  } else {
    $posts_data = array('message' => 'No posts found.');
  }
  wp_send_json($posts_data);
}
add_action('wp_ajax_filter_posts_by_category', 'ajax_filter_posts_by_category');
add_action('wp_ajax_nopriv_filter_posts_by_category', 'ajax_filter_posts_by_category');

<?php
function parent_theme_child_enqueue_styles() {
    // Enqueue parent theme's styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme's styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'parent_theme_child_enqueue_styles');

function my_custom_post_type_blog() {
    // Set up the labels for the custom post type
    $labels = array(
        'name'                  => _x('Blogs', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Blog', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Blogs', 'textdomain'),
        'name_admin_bar'        => __('Blog', 'textdomain'),
        'archives'              => __('Blog Archives', 'textdomain'),
        'attributes'            => __('Blog Attributes', 'textdomain'),
        'parent_item_colon'     => __('Parent Blog:', 'textdomain'),
        'all_items'             => __('All Blogs', 'textdomain'),
        'add_new_item'          => __('Add New Blog', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'new_item'              => __('New Blog', 'textdomain'),
        'edit_item'             => __('Edit Blog', 'textdomain'),
        'update_item'           => __('Update Blog', 'textdomain'),
        'view_item'             => __('View Blog', 'textdomain'),
        'view_items'            => __('View Blogs', 'textdomain'),
        'search_items'          => __('Search Blog', 'textdomain'),
        'not_found'             => __('Not found', 'textdomain'),
        'not_found_in_trash'    => __('Not found in Trash', 'textdomain'),
        'featured_image'        => __('Featured Image', 'textdomain'),
        'set_featured_image'    => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image'    => __('Use as featured image', 'textdomain'),
        'insert_into_item'      => __('Insert into blog', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this blog', 'textdomain'),
        'items_list'            => __('Blogs list', 'textdomain'),
        'items_list_navigation' => __('Blogs list navigation', 'textdomain'),
        'filter_items_list'     => __('Filter blogs list', 'textdomain'),
    );

    // Define the arguments for the custom post type
    $args = array(
        'label'                 => __('Blog', 'textdomain'),
        'description'           => __('A custom post type for blogs', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'            => array('category', 'post_tag'), // Add default taxonomies or custom ones
        'hierarchical'          => false, // Set to true for hierarchical post types (like pages)
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true, // Enables archive for the post type
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'rewrite'               => array('slug' => 'blog'), // Customize the slug for the custom post type
    );

    // Register the custom post type
    register_post_type('blog', $args);
}

// Hook the custom post type into the 'init' action
add_action('init', 'my_custom_post_type_blog', 0);

?>


<?php
function my_acf_init()
{
  register_acf_blocks('banner', 'banner', 'A custom banner block', '/inc/blocks/content-banner.php', 'admin-page');
  register_acf_blocks('turnip-green', 'turnip-green', 'A custom turnip-green block', '/inc/blocks/content-turnip-green.php', 'food');
  register_acf_blocks('specials', 'specials', 'A custom specials block', '/inc/blocks/content-specials.php', 'admin-comments');
  register_acf_blocks('about-us', 'about-us', 'A custom about-us block', '/inc/blocks/content-about-us.php', 'admin-comments');
  register_acf_blocks('menu', 'menu', 'A custom menu block', '/inc/blocks/content-menu.php', 'welcome-widgets-menus');
}

function register_acf_blocks($slug, $title, $description, $template_loc, $icon)
{
  if (function_exists('acf_register_block')) {
    acf_register_block(array(
      'name'              => $slug,
      'title'             => __($title),
      'description'       => __($description),
      'render_callback'   => 'my_acf_block_render_callback',
      'render_template' => get_theme_file_path() . $template_loc,
      'category'          => 'formatting',
      'icon'              => $icon,
      'keywords'          => array($slug),
    ));
  }
}
function my_acf_block_render_callback($block)
{
  // convert name ("acf/testimonial") into path friendly slug ("testimonial")
  $slug = str_replace('acf/', '', $block['name']);
  // include a template part from within the "template-parts/block" folder
  if (file_exists(get_theme_file_path("/inc/blocks/content-{$slug}.php"))) {
    include(get_theme_file_path("/inc/blocks/content-{$slug}.php"));
  }
}
add_action('acf/init', 'my_acf_init');

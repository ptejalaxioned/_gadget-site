<?php

/**
 * Template Name: HomePage
 */
?>
<?php get_header(); ?>
<?php
// Including Banner Section
$home_template_location = 'template-parts/home/content';
if (have_rows('home_page_section')):
  while (have_rows('home_page_section')) : the_row();
    switch (get_row_layout()) {
      case 'banner_section':
        get_template_part($home_template_location, 'banner');
        break;
      case 'features_section':
        get_template_part($home_template_location, 'features');
        break;
      case 'proven_product':
        get_template_part($home_template_location, 'proven-product');
        break;
      case 'reliable_suppliers':
        get_template_part($home_template_location, 'reliable-suppliers');
        break;
      case 'products':
        get_template_part($home_template_location, 'products');
        break;
      case 'mobile_section':
        get_template_part($home_template_location, 'mobile');
        break;
      case 'we_choose_section':
        get_template_part($home_template_location, 'we-choose');
        break;
      case 'sale_countdown':
        get_template_part($home_template_location, 'sale-countdown');
        break;
    }
  endwhile;
endif;
?>
<?php get_footer(); ?>


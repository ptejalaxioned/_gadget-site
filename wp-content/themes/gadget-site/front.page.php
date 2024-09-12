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
    }
  endwhile;
endif;
?>
<?php get_footer(); ?>


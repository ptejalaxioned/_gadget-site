<?php
/*
Template Name: Custom Page Template
*/
?>
<?php get_header();
?>
<main id="main-content">
  <section id="custom-page-section">
    <h1><?php the_title(); ?></h1>
    <?php
    // Display page content
    while (have_posts()) : the_post();
      the_content();
    endwhile;
    ?>
  </section>
</main>
<?php get_footer(); ?>
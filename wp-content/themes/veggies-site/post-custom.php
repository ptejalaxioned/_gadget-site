<?php
/*
Template Name: Custom Page Template
*/
get_header();
?>
<main id="main-content">
  <section id="custom-page-section">
    <?php
    // Display page content
    while (have_posts()) : the_post();
      the_content();
    endwhile;
    ?>
  </section>
</main>
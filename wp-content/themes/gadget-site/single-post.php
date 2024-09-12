<?php get_header(); ?>
<div class="single-post">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <?php if (has_post_thumbnail()) : ?>
        <figure>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
        </figure>
      <?php endif; ?>
      <span class="single-post-name">
        <?php the_title(); ?>
      </span>
      <?php if (get_field('price')) : ?>
        <span class="single-post-price"><?php the_field('price'); ?></span>
      <?php endif; ?>
  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>
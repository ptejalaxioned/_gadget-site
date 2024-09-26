<?php get_header(); ?>
<div class="blogs turnip-green-list text-darkgray py-32 w-11/12 m-auto">
<!-- custom fields for page -->
<?php
  $args = array(
    'post_type' => 'blog',
    'posts_per_page' => 10,
  );
  $custom_query = new WP_Query($args);
  if ($custom_query->have_posts()) {
    while ($custom_query->have_posts()) {
       $custom_query->the_post(); ?>
      <article id="post-<?php the_ID(); ?>" class="bg-yellowgray flex items-center flex-col text-center w-full px-8 py-4">
        <div class="blog-div">
          <h2 class="blog-title capitalize pt-4 pb-4 text-lg font-bold">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <div class="blog-content single-caps tracking-wider pt-4 pb-5 ">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </article>
    <?php }} ?>
</div>
<?php get_footer(); ?>

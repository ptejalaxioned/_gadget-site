<?php
$heading = get_sub_field('heading');
$timer = get_sub_field('timer');
$default_sorting = get_sub_field('default_sorting');
$low_high_sorting = get_sub_field('low_high_sorting');
$high_low_sorting = get_sub_field('high_low_sorting');
$best_sellers_heading = get_sub_field('best_sellers_heading');
$price_range_heading = get_sub_field('price_range_heading');
$lowest_price = get_sub_field('lowest_price');
$highest_price = get_sub_field('highest_price');
$customize_link_filter = get_sub_field('customize_link_filter');
$customize_link_show_all = get_sub_field('customize_link_show_all');
$filter_heading = get_sub_field('filter_heading');
$default_sorting_title = get_sub_field('default_sorting')['title'];
// $low_high_sorting_title = get_sub_field('low_high_sorting')['title'];
$high_low_sorting_title = get_sub_field('high_low_sorting')['title'];
$customize_link_filter_title = get_sub_field('customize_link_filter')['title'];
$customize_link_show_all_title = get_sub_field('customize_link_show_all')['title'];
?>
<?php
if (
  $heading || $timer || $default_sorting || $low_high_sorting || $high_low_sorting || $best_sellers_heading || $price_range_heading || $lowest_price ||
  $highest_price || $customize_link_filter || $customize_link_show_all ||
  $filter_heading
) {
?>
  <!--sale-countdown section start-->
  <section class="sale-countdown">
    <div class="wrapper">
      <?php if ($heading || $timer) { ?>
        <div class="sale-countdown-up">
          <?php if ($heading) { ?>
            <h3 class="first-letter-caps"><?php echo $heading ?></h3>
          <?php } ?>
          <?php
          if ($timer) { ?>
            <ul class="count-list">
              <?php
              foreach ($timer as $row) {
                $sub_field_1 = $row['count']['number'];
                $sub_field_2 = $row['count']['period'];
              ?>
                <li class="days">
                  <span class="number"><?php echo $sub_field_1  ?></span>
                  <span class="period"><?php echo $sub_field_2 ?></span>
                </li>
              <?php
              }
              ?>
            </ul>
          <?php } ?>
        </div>
      <?php } ?>
      <div class="sale-countdown-down">
        <?php if ($default_sorting || $low_high_sorting || $high_low_sorting) { ?>
          <div class="sort-buttons">
            <?php if ($default_sorting) { ?>
              <a
                href="<?php echo $high_low_sorting  ?>"
                class="button sort-button default-sort"
                target="_self"
                title="Default Sorting"><?php echo $default_sorting_title ?></a>
            <?php } ?>
            <?php if ($high_low_sorting) { ?>
              <a
                href="<?php echo $$high_low_sorting ?>"
                class="button sort-button sort-low-high"
                target="_self"
                title="Price Low To High"><?php echo $high_low_sorting_title ?></a>
            <?php } ?>
            <?php if ($high_low_sorting) { ?>
              <a
                href="<?php echo $high_low_sorting  ?>"
                class="button sort-button sort-high-low"
                target="_self"
                title="Price High To Low"><?php echo $high_low_sorting_title ?></a>
            <?php } ?>
          </div>
        <?php } ?>
        <?php if ($best_sellers_heading || $price_range_heading || $lowest_price || $highest_price || $customize_link_filter || $customize_link_show_all || $filter_heading) { ?>
          <div class="filter-range">
            <div class="filter-range-left">
              <ul class="item-list">
                <?php
                $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                );
                $all_posts = new WP_Query($args);
                if ($all_posts->have_posts()) {
                  while ($all_posts->have_posts()) {
                    $all_posts->the_post();
                ?>
                    <li class="items">
                      <?php if (has_post_thumbnail()) : ?>
                        <figure><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></figure>
                      <?php endif; ?>
                      <span class="item-name"><?php the_title(); ?></span>
                      <?php if (get_field('price')) : ?>
                        <span class="item-price"><?php the_field('price'); ?></span>
                    </li>
                  <?php endif; ?>
              <?php
                    wp_reset_postdata();
                  }
                } else {
                  echo '<p>No posts found.</p>';
                }
              ?>
              </ul>
            </div>
            <?php if ($best_sellers_heading || $price_range_heading || $lowest_price || $highest_price || $customize_link_filter || $customize_link_show_all) { ?>
              <div class="filter-range-right">
                <?php if ($best_sellers_heading) { ?>
                  <h5 class="first-letter-caps range-heading"><?php echo $best_sellers_heading  ?></h5>
                <?php } ?>
                <?php if ($price_range_heading || $lowest_price || $highest_price || $customize_link_filter || $customize_link_show_all) { ?>
                  <div class="price-range">
                    <?php if ($price_range_heading) { ?>
                      <h5 class="first-letter-caps range-heading"><?php echo $price_range_heading ?></h5>
                    <?php } ?>
                    <?php if ($lowest_price || $highest_price) { ?>
                      <ul class="low-high">
                        <?php if ($lowest_price) { ?>
                          <li class="low"><?php echo $lowest_price  ?></li>
                        <?php } ?>
                        <?php if ($highest_price) { ?>
                          <li class="high"><?php echo $highest_price  ?></li>
                        <?php } ?>
                      </ul>
                    <?php } ?>
                  <?php } ?>
                  <div class="range">
                    <input
                      type="range"
                      min="22"
                      max="98"
                      value="22"
                      class="min" />
                    <input
                      type="range"
                      min="22"
                      max="98"
                      value="98"
                      class="max" />
                  </div>
                  <div class="range-buttons">
                    <a
                      href="<?php echo $customize_link_filter  ?>"
                      class="button orange-button single-letter-caps"
                      target="_self"
                      title="Filter"><?php echo $customize_link_filter_title ?></a>
                    <a
                      href="<?php echo $customize_link_show_all ?>"
                      class="button blue-button single-letter-caps"
                      target="_self"
                      title="Show All"><?php echo $customize_link_show_all_title ?></a>
                  </div>
                  </div>
                <?php } ?>
                <?php if ($filter_heading) { ?>
                  <div class="filter">
                    <?php if ($filter_heading) { ?>
                      <h5 class="first-letter-caps range-heading"><?php echo $filter_heading  ?></h5>
                    <?php } ?>
                    <ul class="filter-list">
                      <li>
                        <a
                          href="#FIXME"
                          class="single-letter-caps all"
                          target="_self"
                          title="All">all</a>
                      </li>
                      <?php
                      $categories = get_terms(array(
                        'taxonomy'   => 'category',
                        'hide_empty' => true,
                      ));
                      ?>
                      <?php foreach ($categories as $category) { ?>
                        <li>
                          <a
                            href="#FIXME"
                            class="single-letter-caps <?php echo esc_html($category->slug); ?>"
                            target="_self"
                            title="<?php echo esc_html($category->name); ?>"> <?php echo esc_html($category->name); ?></a>
                        </li>
                      <?php } ?>
                    </ul>
                  </div>
                <?php } ?>
              </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!--sale-countdown section end-->
<?php } ?>
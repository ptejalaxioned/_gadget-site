<?php
$heading = get_field('heading');
$menu_list  = get_field('menu_list');
$menu_type  = get_field('menu_type');
?>
<?php if ($heading || $menu_list) { ?>
  <!-- menu section start-->
  <section class="menu py-20 text-lightgray">
    <div class="wrapper">
      <?php if ($heading) { ?>
        <h2 class="single-caps line-below heading2"><?php echo $heading ?></h2>
      <?php } ?>
      <?php if ($menu_type) { ?>
        <ul class="menu-name-list mt-16 mx-auto mb-11 flex justify-center">
          <?php foreach ($menu_type as $menu) {
            $term = get_term($menu);
            $term_name = $term->name;
            $term_slug = $term->slug;
          ?>
            <li>
              <a
                href="#FIXME"
                class="<?php echo $term_slug ?> first-caps py-3 px-4 text-lightgray"
                title="<?php echo  $term_name ?>"
                target="_self"><?php echo  $term_name ?></a>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
      <?php if ($menu_list) { ?>
        <ul class="main-menu-list w-full flex gap-y-12 justify-center flex-wrap">
          <?php
          foreach ($menu_list as $menu) {
            $menu_name = $menu['menu_name'];
            $ingredients = $menu['ingredients'];
            $price = $menu['price'];
          ?>
            <li class="w-6/12 flex">
              <div class="menu-div w-11/12 flex flex-col gap-y-0.5">
                <span class="dish-name all-caps flex gap-y-0.5 text-5"><?php echo $menu_name ?></span>
                <span class="ingredient"><?php echo $ingredients ?></span>
              </div>
              <span class="price pt-1"><?php echo $price ?></span>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
    </div>
  </section>
  <!-- menu section end-->
<?php } ?>
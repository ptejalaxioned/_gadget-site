<?php
$heading = get_field('heading');
$menu_list  = get_field('menu_list');
$menu_type  = get_field('menu_type');
?>
<?php if ($heading || $menu_list) { ?>
  <!-- menu section start-->
  <section class="menu">
    <div class="wrapper">
      <?php if ($heading) { ?>
          <h2 class="single-caps line-below"><?php echo $heading ?></h2>
      <?php } ?>
      <?php if ($menu_type) { ?>
        <ul class="menu-name-list">
          <?php foreach ($menu_type as $menu) {
            $term = get_term($menu); ?>
            <li>
              <a
                href="#FIXME"
                class="<?php echo $term->slug ?> first-caps"
                title="<?php echo $term->name ?>"
                target="_self"><?php echo $term->name ?></a>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
      <?php if ($menu_list) { ?>
        <ul class="main-menu-list">
          <?php
          foreach ($menu_list as $row) {
            $menu_name = $row['menu_name'];
            $ingredients = $row['ingredients'];
            $price = $row['price'];
          ?>
            <li>
              <div class="menu-div">
                <span class="dish-name all-caps"><?php echo $menu_name ?></span>
                <span class="ingredient"><?php echo $ingredients ?></span>
              </div>
              <span class="price"><?php echo $price ?></span>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
    </div>
  </section>
  <!-- menu section end-->
<?php } ?>
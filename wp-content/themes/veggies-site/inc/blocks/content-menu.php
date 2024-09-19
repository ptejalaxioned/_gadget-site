<?php
$heading = get_field('heading');
$menu_list  = get_field('menu_list');
?>
<?php if ($heading || $menu_list) { ?>
  <!-- menu section start-->
  <section class="menu">
    <div class="wrapper">
      <?php if ($heading) { ?>
        <div class="heading-span">
          <h2 class="single-caps"><?php echo $heading ?></h2>
          <span class="line-h"> line </span>
        </div>
      <?php } ?>
      <ul class="menu-name-list">
        <?php
        $menu_types = get_terms(array(
          'taxonomy'   => 'menutype',
          'hide_empty' => false,
        ));
        ?>
        <?php foreach ($menu_types as $menu_type) { ?>
          <li>
            <a
              href="#FIXME"
              class="<?php echo esc_html($menu_type->slug); ?> first-caps"
              title="<?php echo esc_html($menu_type->name); ?>"
              target="_self"><?php echo esc_html($menu_type->name); ?></a>
          </li>
        <?php } ?>
      </ul>
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
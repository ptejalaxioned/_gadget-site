<?php
$turnip_green_list = get_field('list');
?>
<?php if ($list) { ?>
  <!--turnip-green section start-->
  <section class="turnip-green">
    <div class="wrapper">
      <ul class="turnip-green-list">
        <?php
        foreach ($turnip_green_list as $list) {
          $heading = $list['heading'];
          $paragraph = $list['paragraph'];
          $image = $list['image'];
        ?>
          <li>
            <figure class="turnip-green-image">
              <?php
              echo wp_get_attachment_image($image,  [200, 200], false);
              ?>
            </figure>
            <h4 class="all-caps"><?php echo $heading ?></h4>
            <p class="single-caps">
              <?php echo $paragraph ?>
            </p>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </section>
  <!--turnip-green section end-->
<?php } ?>
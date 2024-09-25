<?php
$turnip_green_list = get_field('list');
?>
<?php if ($turnip_green_list) { ?>
  <!--turnip-green section start-->
  <section class="turnip-green bg-yellowgray text-darkgray py-32">
    <div class="wrapper">
      <ul class="turnip-green-list flex gap-y-11">
        <?php
        foreach ($turnip_green_list as $list) {
          $heading = $list['heading'];
          $paragraph = $list['paragraph'];
          $image = $list['image'];
        ?>
          <li class="flex items-center flex-col text-center">
            <figure class="turnip-green-image">
              <?php
              echo wp_get_attachment_image($image,  [200, 200], false);
              ?>
            </figure>
            <h4 class="all-caps pt-4 pb-5 text-lg font-bold"><?php echo $heading ?></h4>
            <p class="single-caps tracking-wider">
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
<?php
$image = get_sub_field('image');
$mobile_list_left = get_sub_field('mobile_list_left');
$mobile_list_right = get_sub_field('mobile_list_right');
$image_url = get_sub_field('image')['url'];
?>
<?php if ($image || $mobile_list_left || $mobile_list_right) { ?>
  <!--mobile section starts-->
  <section class="mobile">
    <div class="wrapper">
      <?php if ($mobile_list_left) { ?>
        <ul class="mobile-list-left">
          <?php
          foreach ($mobile_list_left as $row) {
            $sub_field_1 = $row['heading'];
            $sub_field_2 = $row['paragraph'];
          ?>
            <li>
              <h4 class="first-letter-caps voilet-tik"><?php echo $sub_field_1 ?></h4>
              <p class="para-for-h4">
                <?php echo $sub_field_2 ?>
              </p>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
      <?php if ($image) { ?>
        <figure class="mobile-center">
          <img src="<?php echo $image_url ?>" alt="Mobile" />
        </figure>
      <?php } ?>
      <?php if ($mobile_list_right) { ?>
        <ul class="mobile-list-right">
          <?php
          foreach ($mobile_list_right as $row) {
            $sub_field_1 = $row['heading'];
            $sub_field_2 = $row['paragraph'];
          ?>
            <li>
              <h4 class="first-letter-caps voilet-tik"><?php echo $sub_field_1 ?></h4>
              <p class="para-for-h4">
                <?php echo $sub_field_2 ?>
              </p>
            </li>
          <?php
          }
          ?>
        </ul>
      <?php } ?>
    </div>
  </section>
  <!--mobile section end-->
<?php } ?>
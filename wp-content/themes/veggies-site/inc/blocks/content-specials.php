<?php
$heading = get_field('heading');
$image_list = get_field('image_list');
?>

<?php if ($heading || $image_list) { ?>
  <!--specials section start-->
  <section class="specials">
    <div class="wrapper">
      <?php if ($heading) { ?>
        <h2 class="single-caps line-below heading2"><?php echo $heading ?></h2>
      <?php } ?>
      <?php if ($image_list) { ?>
        <ul class="img-list">
          <?php
          foreach ($image_list as $image) {
          ?>
            <li>
              <?php
              echo wp_get_attachment_image($image, [193, 189], false);
              ?>
            </li>
          <?php
          }
          ?>
        </ul>
      <?php } ?>
    </div>
  </section>
  <!--specials section end-->
<?php } ?>
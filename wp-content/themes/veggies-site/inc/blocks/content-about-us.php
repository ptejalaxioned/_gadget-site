<?php
$heading = get_field('heading');
$paragraph = get_field('paragraph');
$signature_image = get_field('signature_image');
$image = get_field('image');
?>

<?php if ($heading || $paragraph || $signature_image || $image) { ?>
  <!--about-us section start-->
  <section class="about-us">
    <div class="wrapper">
      <?php if ($heading || $paragraph || $signature_image) { ?>
        <div class="about-us-left">
          <?php if ($heading) { ?>
            <div class="heading-span">
              <h2 class="single-caps"><?php echo $heading ?></h2>
              <span class="line-h"> line </span>
            </div>
          <?php } ?>
          <?php if ($paragraph) { ?>
            <p class="single-caps">
              <?php echo $paragraph ?>
            </p>
          <?php } ?>
          <?php if ($signature_image) { ?>
            <div class="sign-div">
              <figure class="sign">
                <?php
                echo wp_get_attachment_image($signature_image, [256,147], false);
                ?>
              </figure>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if ($image) { ?>
        <div class="about-us-right">
          <figure class="green">
            <?php
            echo wp_get_attachment_image($image, [508,432], false);
            ?>
          </figure>
        </div>
      <?php } ?>
    </div>
  </section>
  <!--about-us section end-->
<?php } ?>
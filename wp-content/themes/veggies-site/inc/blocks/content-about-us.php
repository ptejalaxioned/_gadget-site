<?php
$heading = get_field('heading');
$paragraph = get_field('paragraph');
$signature_image = get_field('signature_image');
$signature_image_url = $signature_image['url'];
$signature_image_alt = $signature_image['alt'];
$image = get_field('image');
$image_url = $image['url'];
$image_alt = $image['alt'];
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
                <img src="<?php echo $signature_image_url ?>" alt="<?php echo $signature_image_alt ?>" />
              </figure>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if ($image) { ?>
        <div class="about-us-right">
          <figure class="green">
            <img src="<?php echo $image_url ?>" alt="<?php echo $image_url ?>" />
          </figure>
        </div>
      <?php } ?>
    </div>
  </section>
  <!--about-us section end-->
<?php } ?>
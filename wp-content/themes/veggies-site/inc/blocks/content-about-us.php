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

<!--about-us section start-->
<section class="about-us">
  <div class="wrapper">
    <div class="about-us-left">
      <div class="heading-span">
        <h2 class="single-caps"><?php echo $heading?></h2>
        <span class="line-h"> line </span>
      </div>
      <p class="single-caps">
      <?php echo $paragraph?>
      </p>
      <div class="sign-div">
        <figure class="sign">
          <img src="<?php echo $signature_image_url?>" alt="<?php echo $signature_image_alt?>" />
        </figure>
      </div>
    </div>
    <div class="about-us-right">
      <figure class="green">
        <img src="<?php echo $image_url?>" alt="<?php echo $image_url?>" />
      </figure>
    </div>
  </div>
</section>
<!--about-us section end-->
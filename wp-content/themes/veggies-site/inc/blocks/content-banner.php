<?php
$banner_hedaing = get_field('banner_heading');
$background_image = get_field('background_image');
?>

<?php if ($background_image || $banner_hedaing) { ?>
  <!--banner section start-->
  <section class="banner">
    <div class="wrapper">
      <?php if ($background_image) { ?>
        <figure class="banner-image">
          <?php
          echo wp_get_attachment_image($background_image,  [1165,563] , false);
          ?>
        </figure>
      <?php } ?>
      <div class="banner-content">
        <div class="heading-span">
          <?php if ($banner_hedaing) { ?>
            <h1 class="single-caps">
              <?php echo $banner_hedaing ?>
            </h1>
            <span class="line-h"> line </span>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end-->
<?php } ?>
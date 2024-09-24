<?php
$banner_hedaing = get_field('banner_heading');
$background_image = get_field('background_image');
?>
<?php if ($background_image || $banner_hedaing) { ?>
  <!--banner section start-->
  <section class="banner">
    <div class="wrapper relative w-full">
      <?php if ($background_image) { ?>
        <figure class="banner-image h-full object-cover">
          <?php
          echo wp_get_attachment_image($background_image,  [1165, 563], false);
          ?>
        </figure>
      <?php } ?>
        <?php if ($banner_hedaing) { ?>
          <h1 class="single-caps line-below">
            <?php echo $banner_hedaing ?>
          </h1>
        <?php } ?>
    </div>
  </section>
  <!--banner section end-->
<?php } ?>
<?php
$background_image = get_sub_field('background_image');
$banner_title = get_sub_field('banner_title');
$banner_discription = get_sub_field('banner_discription');
$banner_image = get_sub_field('banner_image');
$customize_links = get_sub_field('customize_links');
$about_us = $customize_links['about_us']['url'];
$about_us_title =  $customize_links['about_us']['title'];
$more_info = $customize_links['more_info']['url'];
$more_info_title =  $customize_links['more_info']['title'];
?>
<?php if ($background_image || $banner_title || $banner_discription || $banner_image || $customize_links) { ?>
  <!--banner section start-->
  <section class="banner">
    <div class="wrapper">
      <?php
      if ($background_image) { ?>
        <figure class="main-image">
          <img src="<?php echo $background_image ?>" alt="Banner" />
        </figure>
      <?php } ?>
      <?php if ($banner_title || $banner_discription || $banner_image || $customize_links) { ?>
        <div class="banner-content">
          <?php if ($banner_title) { ?>
            <h1>
              <a
                href="./index.html"
                title="Gadget Site"
                target="_self"
                class="first-letter-caps"><?php echo $banner_title ?></a>
            </h1>
          <?php } ?>
          <?php if ($banner_discription) { ?>
            <p class="first-letter-caps"><?php echo $banner_discription ?></p>
          <?php } ?>
          <?php if ($customize_links) { ?>
            <div class="banner-buttons">
              <?php if ($about_us) { ?>
                <a
                  href="<?php echo $about_us ?>"
                  class="button orange-button"
                  target="_self"
                  title="About Us"><?php echo $about_us_title ?></a>
              <?php } ?>
              <?php if ($more_info) { ?>
                <a
                  href="<?php echo $more_info ?>"
                  class="button blue-button"
                  target="_self"
                  title="More Info"><?php echo $more_info_title ?></a>
              <?php } ?>
            </div>
          <?php } ?>
          <?php if ($banner_image) { ?>
            <figure class="banner-content-image">
              <img
                src="<?php echo $banner_image ?>"
                alt="Banner Content Image" />
            </figure>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </section>
  <!--banner section ends-->
<?php } ?>
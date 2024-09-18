<?php
$banner_hedaing= get_field('banner_heading');
$background_image= get_field('background_image');
$background_image_url= $background_image['url'];
$background_image_alt= $background_image['alt'];
?>

<!--banner section start-->
<section class="banner">
          <div class="wrapper">
            <figure class="banner-image">
              <img src="<?php echo $background_image_url ?>" alt=" <?php echo $background_image_alt ?>" />
            </figure>
            <div class="banner-content">
              <div class="heading-span">
                <h1 class="single-caps">
                <?php echo $banner_hedaing ?>
                </h1>
              </div>
            </div>
          </div>
        </section>
<!--banner section end-->

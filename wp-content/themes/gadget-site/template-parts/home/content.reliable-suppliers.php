<?php
$heading = get_sub_field('heading');
$paragraph = get_sub_field('paragraph');
$customize_link = get_sub_field('customize_link');
$front_image = get_sub_field('front_image');
$back_image = get_sub_field('back_image');
$front_image_url = get_sub_field('front_image')['url'];
$back_image_url = get_sub_field('back_image')['url'];
$customize_link_title = get_sub_field('customize_link')['title'];
?>
<?php if ($heading || $paragraph || $customize_link || $front_image || $back_image) { ?>
  <!--reliable-suppliers section starts-->
  <section class="reliable-suppliers">
    <div class="wrapper">
      <?php if ($heading || $paragraph || $customize_link) { ?>
        <div class="reliable-suppliers-left">
          <?php if ($heading) { ?>
            <h2 class="first-letter-caps"><?php echo $heading ?></h2>
          <?php } ?>
          <?php if ($paragraph) { ?>
            <p class="para-for-h2 single-letter-caps">
              <?php echo $paragraph ?>
            </p>
          <?php } ?>
          <?php if ($customize_link) { ?>
            <div class="but-div">
              <a
                href=" <?php echo $customize_link ?>"
                class="button blue-button"
                target="_self"
                title="<?php echo $customize_link_title ?>">
                <?php echo $customize_link_title ?></a>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if ($front_image || $back_image) { ?>
        <div class="reliable-suppliers-right">
          <?php if ($front_image) { ?>
            <figure class="reliable-suppliers-img-down">
              <img src="<?php echo $front_image_url ?>" alt="Mobile1" />
            </figure>
          <?php } ?>
          <?php if ($back_image) { ?>
            <figure class="reliable-suppliers-img-up">
              <img src="<?php echo $back_image_url ?>" alt="Mobile2" />
            </figure>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </section>
  <!--reliable-suppliers section end-->
<?php } ?>
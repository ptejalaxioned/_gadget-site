<?php
$image = get_sub_field('image');
$heading = get_sub_field('heading');
$paragraph = get_sub_field('paragraph');
$customize_link = get_sub_field('customize_link');
$image_url = get_sub_field('image')['url'];
?>
<?php if ($image || $heading || $paragraph || $customize_link) { ?>
  <!--proven-product section starts-->
  <section class="proven-product">
    <div class="wrapper">
      <?php if ($image) { ?>
        <figure class="proven-product-left">
          <img src="<?php echo $image_url ?>" alt="Mobile" />
        </figure>
      <?php } ?>
      <?php if ($heading || $paragraph || $customize_link) { ?>
        <div class="proven-product-right">
          <?php if ($heading) { ?>
            <h2 class="first-letter-caps"> <?php echo $heading ?></h2>
          <?php } ?>
          <?php if ($paragraph) { ?>
            <p class="para-for-h2 single-letter-caps">
              <?php
              echo $paragraph
              ?>
            </p>
          <?php } ?>
          <?php if ($customize_link) { ?>
            <div class="but-div">
              <a
                href="<?php echo $customize_link ?>"
                class="button orange-button"
                target="_self"
                title="Read More"><?php echo $customize_link ?></a>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </section>
  <!--proven-product section end-->
<?php } ?>
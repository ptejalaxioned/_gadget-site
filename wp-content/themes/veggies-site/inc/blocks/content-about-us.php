<?php
$heading = get_field('heading');
$paragraph = get_field('paragraph');
$signature_image = get_field('signature_image');
$image = get_field('image');
?>
<?php if ($heading || $paragraph || $signature_image || $image) { ?>
  <!--about-us section start-->
  <section class="about-us pt-20 pb-32
      bg-gray-200 text-lightgray">
    <div class="wrapper flex gap-10 items-center">
      <?php if ($heading || $paragraph || $signature_image) { ?>
        <div class="about-us-left w-6/12 flex flex-col text-center">
          <?php if ($heading) { ?>
            <h2 class="single-caps line-below heading2"><?php echo $heading ?></h2>
          <?php } ?>
          <?php if ($paragraph) { ?>
            <p class="single-caps text-3xl tracking-wider pt-16">
              <?php echo $paragraph ?>
            </p>
          <?php } ?>
          <?php if ($signature_image) { ?>
            <figure class="sign sign-div flex justify-end w-2/5 self-end">
              <?php
              echo wp_get_attachment_image($signature_image, [256, 147], false);
              ?>
            </figure>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if ($image) { ?>
        <figure class="about-us-right green flex flex-col text-center">
          <?php
          echo wp_get_attachment_image($image, [508, 432], false);
          ?>
        </figure>
      <?php } ?>
    </div>
  </section>
  <!--about-us section end-->
<?php } ?>
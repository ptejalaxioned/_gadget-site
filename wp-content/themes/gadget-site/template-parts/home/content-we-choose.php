<?php
$heading = get_sub_field('heading');
$paragraph = get_sub_field('paragraph');
?>
<?php if ($heading || $paragraph) { ?>
  <!--we-choose section start-->
  <section class="we-choose">
    <div class="wrapper">
      <?php if ($heading) { ?>
        <h2 class="single-letter-caps">
          <?php echo $heading ?>
        </h2>
      <?php } ?>
      <?php if ($paragraph) { ?>
        <p class="single-letter-caps common-para">
          <?php echo $paragraph ?>
        </p>
      <?php } ?>
    </div>
  </section>
  <!--we-choose section end-->
<?php } ?>
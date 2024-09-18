<?php
$heading = get_field('heading');
$image_list = get_field('image_list');

?>

<!--specials section start-->
<section class="specials">
  <div class="wrapper">
    <div class="heading-span">
      <h2 class="single-caps"><?php echo $heading ?></h2>
    </div>
    <?php if ($image_list) { ?>
      <ul class="img-list">
        <?php
        foreach ($image_list as $image) {
          $image_url= $image['url'];
          $image_alt = $image['alt'];
        ?>
          <li><img src="<?php echo $image_url ?>" alt="<?php echo $image_alt ?>" /></li>
        <?php
        }
        ?>
      </ul>
    <?php } ?>
  </div>
</section>
<!--specials section end-->
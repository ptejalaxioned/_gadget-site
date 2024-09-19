<?php
$list = get_field('list');
?>
<?php if ($list) { ?>
<!--turnip-green section start-->
<section class="turnip-green">
  <div class="wrapper">
  <ul class="turnip-green-list">
    <?php
    foreach ($list as $row) {
      $heading= $row['heading'];
      $paragraph = $row['paragraph'];
    ?>
      <li>
        <span class="bowl">bowl</span>
        <h4 class="all-caps"><?php echo $heading?></h4>
        <p class="single-caps">
        <?php echo $paragraph?>
        </p>
      </li>
    <?php
    }
    ?>
  </ul>
  </div>
</section>
<!--turnip-green section end-->
<?php } ?>

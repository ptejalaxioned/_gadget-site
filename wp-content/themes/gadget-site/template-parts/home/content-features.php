<?php
$features_list = get_sub_field('features_list');
?>
<?php if ($features_list) { ?>
  <!--features section starts-->
  <section class="features">
    <div class="wrapper">
      <ul class="features-list">
        <?php
        foreach ($features_list as $row) {
          $sub_field_1 = $row['heading'];
          $sub_field_2 = $row['paragraph'];
        ?>
          <li>
            <h4 class="first-letter-caps voilet-tik"><?php echo $sub_field_1 ?></h4>
            <p class="para-for-h4">
              <?php echo $sub_field_2 ?>
            </p>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </section>
  <!--features section end-->
<?php } ?>
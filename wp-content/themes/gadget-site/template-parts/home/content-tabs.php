<?php
$tabs = get_sub_field('tabs');
?>
<?php if ($tabs) { ?>
  <!--tabs section end-->
  <section class="tabs">
    <div class="wrapper">
      <ul class="tab-list">
        <?php
        foreach ($tabs  as $row) {
          $sub_field_1 = $row['tab_list'];
        ?>
          <li>
            <a
              href="#FIXME"
              class="single-letter-caps programming technology-span"
              target="_self"
              title="Programming"><?php echo $sub_field_1 ?></a>
          </li>
        <?php
        }
        ?>
      </ul>
      <div class="data">
        <?php
        foreach ($tabs  as $row) {
          $sub_field_1 = $row['paragraph'];
        ?>
          <p class="single-letter-caps common-para">
            <?php echo $sub_field_1  ?>
          </p>
        <?php break;
        } ?>
      </div>
    </div>
  </section>
  <!--tabs section end-->
<?php } ?>
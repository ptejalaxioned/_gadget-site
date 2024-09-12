<?php
$left_paragraph = get_sub_field('left_paragraph');
$right_paragraph = get_sub_field('right_paragraph');
$images = get_sub_field('images');

if ($left_paragraph || $right_paragraph || $images) { ?>
  <!--products section starts-->
  <section class="products">
    <div class="wrapper">
      <?php if ($left_paragraph || $right_paragraph) { ?>
        <div class="product-up">
          <?php if ($left_paragraph) { ?>
            <p class="single-letter-caps common-para">
              <?php echo $left_paragraph ?>
            </p>
          <?php } ?>
          <?php if ($right_paragraph) { ?>
            <p class="single-letter-caps common-para">
              <?php echo $right_paragraph ?>
            </p>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if ($images) { ?>
        <div class="product-down">
          <ul class="product-list">
            <?php
            if ($images) {
              foreach ($images as $image) {
                $image_url = $image['url'];
                $image_alt = $image['alt'];
            ?>
                <li><img src="<?php echo $image_url ?>" alt="<?php echo  $image_alt ?>" /></li>
            <?php
              }
            } else {
              echo 'No images found.';
            }
            ?>
          </ul>
        </div>
      <?php } ?>
    </div>
  </section>
  <!--products section end-->
<?php } ?>
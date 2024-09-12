<?php
$image = get_sub_field('image');
$heading = get_sub_field('heading');
$paragraph = get_sub_field('paragraph');
$person_image = get_sub_field('person_image');
$person_name = get_sub_field('person_name');
$person_designation = get_sub_field('person_designation');
$image_url = get_sub_field('image')['url'];
$person_image_url = get_sub_field('person_image')['url'];
?>
<?php
if ($image || $heading || $paragraph || $person_image || $person_name || $person_designation) { ?>
  <!--about-us section start-->
  <section class="about-us">
    <div class="wrapper">
      <?php if ($image) { ?>
        <figure class="background-image">
          <img src="<?php echo $image_url ?>" alt="Laptop Image" />
        </figure>
      <?php } ?>
      <?php
      if ($heading || $paragraph || $person_image || $person_name || $person_designation) { ?>
        <div class="about-us-content">
          <?php if ($heading) { ?>
            <h3 class="single-letter-caps"><?php echo $heading  ?></h3>
          <?php } ?>
          <?php if ($paragraph) { ?>
            <p class="para-for-h3 single-letter-caps">
              <?php echo $paragraph ?>
            </p>
          <?php } ?>
          <?php if ($person_image || $person_name || $person_designation) { ?>
            <div class="content-down">
              <?php if ($person_image) { ?>
                <figure>
                  <img src="<?php echo $person_image_url ?>" alt="Mark Strong" />
                </figure>
              <?php } ?>
              <?php if ($person_name) { ?>
                <span class="person-name first-letter-caps"><?php echo $person_name ?></span>
              <?php } ?>
              <?php if ($person_designation) { ?>
                <span class="role all-caps"><?php echo $person_designation ?></span>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </section>
  <!--about-us section end-->
<?php } ?>
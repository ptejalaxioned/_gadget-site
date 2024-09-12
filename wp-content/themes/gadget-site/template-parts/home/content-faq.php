<?php
$heading = get_sub_field('heading');
$question_list = get_sub_field('question_list');
?>
<?php
if ($heading || $question_list) { ?>
  <!--faq section start-->
  <section class="faq">
    <div class="wrapper">
      <?php
      if ($heading) { ?>
        <h2 class="all-caps"><?php echo $heading ?></h2>
      <?php } ?>
      <?php if ($question_list) { ?>
        <ul class="accordion">
          <?php
          foreach ($question_list  as $row) {
            $sub_field_1 = $row['question'];
            $sub_field_2 = $row['paragraph'];
          ?>
            <li>
              <div class="accordion-up">
                <span class="question single-letter-caps"><?php echo $sub_field_1 ?></span>
                <span class="arrow-down">arrow</span>
              </div>
              <div class="accordion-down single-letter-caps">
              </div>
            </li>
          <?php
          }
          ?>
        </ul>
      <?php } ?>
    </div>
  </section>
  <!--faq section end-->
<?php } ?>
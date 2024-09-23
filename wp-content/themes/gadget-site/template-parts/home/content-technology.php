<?php
  $upper_image = get_sub_field('upper_image');
  $upper_heading = get_sub_field('upper_heading');
  $upper_paragraph = get_sub_field('upper_paragraph');
  $upper_link_customize = get_sub_field('upper_link_customize');
  $down_heading = get_sub_field('down_heading');
  $upper_heading = get_sub_field('upper_heading');
  $down_sub_heading = get_sub_field('down_sub_heading');
  $down_image = get_sub_field('down_image');
  $upper_image_url = get_sub_field('upper_image')['url'];
  $down_image_url = get_sub_field('down_image')['url'];
  ?>
 <?php if (
    $upper_image || $upper_heading || $upper_paragraph || $upper_link_customize ||
    $down_heading || $down_sub_heading || $down_image
  ) { ?>
   <!--technology section start-->
   <section class="technology">
     <div class="wrapper">
       <?php if (
          $upper_image || $upper_heading || $upper_paragraph || $upper_link_customize
        ) { ?>
         <div class="innovative-technology">
           <?php if ($upper_image) { ?>
             <figure class="innovative-technology-left">
               <img src="<?php echo $upper_image_url  ?>" alt="Mobile" />
             </figure>
           <?php } ?>
           <?php if ($upper_heading || $upper_paragraph || $upper_link_customize) { ?>
             <div class="innovative-technology-right">
               <?php if ($upper_heading) { ?>
                 <h2 class="first-letter-caps"><?php echo $upper_heading ?></h2>
               <?php } ?>
               <?php if ($upper_paragraph) { ?>
                 <p class="para-for-h2 single-letter-caps">
                   <?php echo $upper_paragraph ?>
                 </p>
               <?php } ?>
               <?php if ($upper_link_customize) { ?>
                 <div class="but-div">
                   <a
                     href="<?php echo $upper_link_customize ?>"
                     class="button orange-button"
                     target="_self"
                     title="Read More"><?php echo $upper_link_customize ?></a>
                 </div>
               <?php } ?>
             </div>
           <?php } ?>
         </div>
       <?php } ?>
       <?php if ($down_heading || $down_sub_heading || $down_image) { ?>
         <div class="technical-features">
           <?php if ($down_heading || $down_sub_heading) { ?>
             <div class="technical-features-left">
               <?php if ($down_heading) { ?>
                 <h2 class="first-letter-caps"><?php echo $down_heading ?></h2>
               <?php } ?>
               <?php
                if ($down_sub_heading) { ?>
                 <ul class="progress-list">
                   <?php
                    foreach ($down_sub_heading  as $row) {
                      $sub_field_1 = $row['sub_headings'];
                      $sub_field_2 = $row['percentages'];
                    ?>
                     <li>
                       <div class="span-percentage">
                         <span class="technology-span first-letter-caps"><?php echo $sub_field_1 ?></span>
                         <span class="percertage"><?php echo $sub_field_2 ?></span>
                       </div>
                       <span class="progress-bar">
                         <span class="progress-line-inner">line</span>
                         <span class="progress-line-outer sky-blue">line</span>
                       </span>
                     </li>
                   <?php } ?>
                 </ul>
               <?php } ?>
             </div>
           <?php } ?>
           <?php if ($down_image) { ?>
             <figure class="technical-features-right">
               <img src="<?php echo $down_image_url ?>" alt="Mobile" />
             </figure>
           <?php } ?>
         </div>
       <?php } ?>
     </div>
   </section>
   <!--technology section end-->
 <?php } ?>
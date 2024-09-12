<?php
  $image = get_sub_field('image');
  $paragraph = get_sub_field('paragraph');
  $image_url = get_sub_field('image')['url'];
  ?>
 <?php if ($image || $paragraph) { ?>
   <!--watch section start-->
   <section class="watch">
     <div class="wrapper">
       <?php if ($paragraph) { ?>
         <p class="common-para single-letter-caps">
           <?php echo $paragraph  ?>
         </p>
       <?php } ?>
       <?php if ($image) { ?>
         <figure>
           <img src="<?php echo $image_url ?>" alt="Watch" />
         </figure>
       <?php } ?>
     </div>
   </section>
   <!--watch section end-->
 <?php } ?>
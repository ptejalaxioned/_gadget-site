<?php
$block_customize_link = get_field('block_customize_link');
$block_heading = get_field('block_heading');
$block_paragraph = get_field('block_paragraph');
$block_image = get_field("block_image");
$block_image_url = $block_image['url'];
$block_image_alt = $block_image['alt'];
$customize_link_title = get_field('block_customize_link')['title'];

?>
<div class="wrapper">
  <div class="innovative-technology">
    <figure class="innovative-technology-left">
      <img src="<?php echo $block_image_url ?>" alt="<?php echo $block_image_alt ?>" />
    </figure>
    <div class="innovative-technology-right">
      <h2 class="first-letter-caps"><?php echo $block_heading ?></h2>
      <p class="para-for-h2 single-letter-caps">
        <?php echo $block_paragraph ?>
      </p>
      <div class="but-div">
        <a
          href="#FIXME"
          class="button orange-button"
          target="_self"
          title="Read More"> <?php echo $customize_link_title ?></a>
      </div>
    </div>
  </div>
</div>
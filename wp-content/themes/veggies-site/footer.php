<?php
$contact_heading = get_field("contact_heading", 'option');
$veggies_heading = get_field("veggies_heading", 'option');
$address = get_field("address", 'option');
$reservations_heading = get_field("reservations_heading", 'option');
$email = get_field("email", 'option');
$phone_number = get_field("phone_number", 'option');
$contact_form_heading = get_field("contact_form_heading", 'option');
$name_placeholder = get_field("name_placeholder", 'option');
$email_placeholder = get_field("email_placeholder", 'option');
$textarea_placeholder = get_field("textarea_placeholder", 'option');
$button_text = get_field("button_text", 'option');
$footer_left_text = get_field("footer_left_text", 'option');
$bootstrap_theme_link = get_field("bootstrap_theme_link", 'option');
$copyright_text = get_field("copyright_text", 'option');
$facebook_icon = get_field("facebook_icon", 'option');
$facebook_icon_image = $facebook_icon['image'];
$facebook_icon_link = $facebook_icon['link'];
$linkdin_icon = get_field("linkdin_icon", 'option');
$linkdin_icon_image = $linkdin_icon['image'];
$linkdin_icon_link = $linkdin_icon['link'];
$backgroud_image = get_field("backgroud_image", 'option');

function linkAttributes($link)
{
  $link_url = str_replace('http://', '', $link['url']);
  $link_target = $link['target'];
  $link_title = $link['title'];
  if ($link_target == "_blank") {
    $rel = "rel='noopener noreferrer'";
    $link_array = array($link_url, $link_target, $link_title, $rel);
  } else {
    $link_array = array($link_url, $link_target, $link_title);
  }
  return $link_array;
}
?>
</main>
<!--main section end-->
<?php if (
  $contact_heading || $veggies_heading || $address || $reservations_heading ||
  $email || $phone_number || $contact_form_heading || $name_placeholder || $email_placeholder ||
  $textarea_placeholder || $button_text || $bootstrap_theme_link || $copyright_text ||
  $facebook_icon_image || $facebook_icon_link || $linkdin_icon_image || $linkdin_icon_link
  || $backgroud_image
) { ?>
  <!--footer section start-->
  <footer>
    <div class="wrapper">
      <?php
      if ($backgroud_image) { ?>
        <figure class="veggies">
          <?php
          echo wp_get_attachment_image($backgroud_image, [1279, 852], false);
          ?>
        </figure>
      <?php } ?>
      <?php
      if (
        $contact_heading || $veggies_heading || $address || $reservations_heading ||
        $email || $phone_number || $contact_form_heading || $name_placeholder || $email_placeholder ||
        $textarea_placeholder || $button_text
      ) { ?>
        <div class="contact">
          <!-- <div class="contact-content"> -->
          <?php
          if ($contact_heading) { ?>
            <h2 class="single-caps line-below heading2"><?php echo $contact_heading ?></h2>
          <?php } ?>
          <?php
          if ($veggies_heading || $address || $reservations_heading || $email || $phone_number) { ?>
            <ul class="contact-info-list">
              <?php if ($veggies_heading || $address) { ?>
                <li>
                  <?php if ($veggies_heading) { ?>
                    <h3 class="all-caps"><?php echo $veggies_heading ?></h3>
                  <?php } ?>
                  <?php if ($address) { ?>
                    <address class="first-caps">
                      <?php echo $address ?>
                    </address>
                  <?php } ?>
                </li>
              <?php } ?>
              <?php if ($reservations_heading || $email || $phone_number) { ?>
                <li>
                  <?php if ($reservations_heading) { ?>
                    <h3 class="all-caps"><?php echo $reservations_heading ?></h3>
                    <?php if ($email) {
                      $link_array = linkAttributes($email);
                    ?>
                      <a
                        href="mailto:<?php echo $link_array[0]; ?>"
                        target="<?php echo $link_array[1];  ?>"
                        class="email"
                        title="<?php echo $link_array[2];  ?>"
                        <?php echo $link_array[3]; ?>><?php echo $link_array[0]; ?></a>
                    <?php } ?>
                    <?php if ($phone_number) {
                      $link_array = linkAttributes($phone_number);
                    ?>
                      <a
                        href="tel:<?php echo $link_array[0]; ?>"
                        target="<?php echo $link_array[1]; ?>"
                        class="phone-number"
                        title="<?php echo $link_array[2]; ?>"
                        <?php echo $link_array[3]; ?>><?php echo $link_array[0]; ?></a>
                    <?php } ?>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
          <?php
            if (
              $contact_form_heading || $name_placeholder || $email_placeholder ||
              $textarea_placeholder || $button_text
            ) { ?>
            <div class="contact-form">
              <?php
              if ($contact_form_heading) { ?>
                <h3 class="all-caps"><?php echo $contact_form_heading ?></h3>
              <?php } ?>
              <?php
              if (
                $name_placeholder || $email_placeholder ||
                $textarea_placeholder || $button_text
              ) { ?>
                <form action="#FIXME" method="post">
                  <?php if ($name_placeholder || $email_placeholder) { ?>
                    <div class="name-email">
                      <?php if ($name_placeholder) { ?>
                        <div class="first-name">
                          <input type="text" placeholder="<?php echo $name_placeholder ?>" id="fname" />
                        </div>
                      <?php } ?>
                      <?php if ($email_placeholder) { ?>
                        <div class="email-div">
                          <input type="email" placeholder="<?php echo $email_placeholder ?>" id="email" />
                        </div>
                      <?php } ?>
                    </div>
                  <?php } ?>
                  <?php if ($textarea_placeholder) { ?>
                    <div class="textarea">
                      <textarea placeholder="<?php echo $textarea_placeholder ?>" id="textarea"></textarea>
                    </div>
                  <?php } ?>
                  <?php if ($button_text) { ?>
                    <div class="send-button">
                      <button type="submit" class="first-caps" formnovalidate>
                        <?php echo $button_text ?>
                      </button>
                    </div>
                  <?php } ?>
                </form>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
    </div>
  <?php } ?>
  <?php if ($footer_left_text || $bootstrap_theme_link || $copyright_text || $facebook_icon_image_url || $facebook_icon_link || $linkdin_icon_image_url || $linkdin_icon_link) { ?>
    <div class="footer-down">
      <?php if ($footer_left_text || $bootstrap_theme_link || $copyright_text) { ?>
        <p>
          <?php if ($footer_left_text) { ?>
            <span class="single-caps made-with"><?php echo $footer_left_text ?></span>
          <?php } ?>
          <?php if ($bootstrap_theme_link) {
              $link_array = linkAttributes($bootstrap_theme_link);
          ?>
            <a
              href="<?php echo $link_array[0]; ?>"
              class="bootstrap first-caps"
              target="<?php echo $link_array[1]; ?>"
              title="<?php echo $link_array[2]; ?>"
              <?php echo $link_array[3]; ?>><?php echo $link_array[2]; ?></a>
          <?php } ?>
          <?php if ($copyright_text) { ?>
            <?php echo $copyright_text ?>
          <?php } ?>
        </p>
      <?php } ?>
      <?php if ($facebook_icon_image || $facebook_icon_link || $linkdin_icon_image || $linkdin_icon_link) { ?>
        <ul class="icon-list">
          <?php if ($facebook_icon_image || $facebook_icon_link) {
              $link_array = linkAttributes($facebook_icon_link);
          ?>
            <li class="icon">
              <a
                href="<?php echo $link_array[0] ?>"
                target="<?php echo $link_array[1] ?>"
                class="facebook social-media"
                title="<?php echo $link_array[2] ?>"
                <?php echo $link_array[3] ?>>
                <?php
                echo wp_get_attachment_image($facebook_icon_image, 'thumbnail', false);
                ?>
              </a>
            </li>
          <?php } ?>
          <?php if ($linkdin_icon_image || $linkdin_icon_link) {
              $link_array = linkAttributes($linkdin_icon_link);
          ?>
            <li class="icon">
              <a
                href="<?php echo $link_array[0]  ?>"
                target="<?php echo $link_array[1] ?>"
                class="linkdin social-media"
                title="<?php echo $link_array[2] ?>"
                <?php echo $link_array[3] ?>>
                <?php
                echo wp_get_attachment_image($linkdin_icon_image, 'thumbnail', false);
                ?>
              </a>
            </li>
          <?php } ?>
        <?php } ?>
        </ul>
      <?php } ?>
    </div>
  <?php } ?>
  </div>
  </footer>
  <!--footer section end-->
<?php } ?>
</div>
<!--container end-->
<?php wp_footer(); ?>
</body>

</html>
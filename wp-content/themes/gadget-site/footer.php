<?php
$icon_url = get_field("icon", 'option')['url'];
$left_para = get_field("left_side_paragraph", 'option');
$right_para = get_field("right_side_paragraph", 'option');
$twitter_icon = get_field("twitter_icon", 'option');
$facebook_icon = get_field("facebook_icon", 'option');
$youtube_icon = get_field("youtube_icon", 'option');
$twitter_icon_blue = get_field("twitter_icon_blue", 'option');
$app_store = get_field("app_store", 'option');
$google_play = get_field("google_play", 'option');
$support_heading = get_field("support_heading", 'option');
$contact_info_heading = get_field("contact_info_heading", 'option');
$location = get_field("location", 'option');
$address = get_field("address", 'option');
$email = get_field("email", 'option');
$phone = get_field("phone", 'option');
$additional_para = get_field("additional_para", 'option');
$twitter_icon_image = $twitter_icon['image']['url'];
$facebook_icon_image = $facebook_icon['image']['url'];
$youtube_icon_image = $youtube_icon['image']['url'];
$twitter_icon_image_link = $twitter_icon['link'];
$facebook_icon_image_link = $facebook_icon['link'];
$youtube_icon_image_link = $youtube_icon['link'];
$app_store_image = $app_store['image']['url'];
$google_play_image = $google_play['image']['url'];
$app_store_link = $app_store['link'];
$google_play_link = $google_play['link'];
?>
</main>
<!--main section end-->
<?php
if (
  $icon_url || $left_para || $right_para || $twitter_icon || $facebook_icon || $youtube_icon || $app_store || $google_play || $support_heading || $contact_info_heading ||
  $location || $address || $email || $phone || $additional_para ||
  $twitter_icon_blue
) {
?>
  <!--footer section start-->
  <footer>
    <div class="wrapper">
      <?php if ($icon_url || $left_para  || $twitter_icon || $facebook_icon || $youtube_icon) { ?>
        <div class="footer-left">
          <?php if ($icon_url) { ?>
            <figure>
              <img src="<?php echo $icon_url ?>" alt="Logo" />
            </figure>
          <?php } ?>
          <?php if ($left_para) { ?>
            <p class="single-letter-caps footer-para">
              <?php echo $left_para ?>"
            </p>
          <?php } ?>
          <?php if ($twitter_icon || $facebook_icon || $youtube_icon) { ?>
            <ul class="social-media-icons">
              <?php if ($twitter_icon) { ?>
                <li>
                  <a
                    href="<?php echo $twitter_icon_image_link ?>"
                    title="Twitter"
                    target="_blank"
                    class="twitter"
                    rel="noopener noreferrer">
                    <img src="<?php echo $twitter_icon_image ?>" alt="Twitter">
                  </a>
                </li>
              <?php } ?>
              <?php if ($facebook_icon) { ?>
                <li>
                  <a
                    href="<?php echo $facebook_icon_link ?>"
                    title="Facebook"
                    target="_blank"
                    class="facebook"
                    rel="noopener noreferrer">
                    <img src="<?php echo $facebook_icon_image ?>" alt="Facebook">
                  </a>
                </li>
              <?php } ?>
              <?php if ($youtube_icon) { ?>
                <li>
                  <a
                    href="<?php echo $youtube_icon_link ?>"
                    title="Youtube"
                    target="_blank"
                    class="youtube"
                    rel="noopener noreferrer">
                    <img src="<?php echo $youtube_icon_image ?>" alt="Youtube">
                  </a>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if ($contact_info_heading || $location || $address || $email || $phone) { ?>
        <div class="footer-center-left">
          <h5 class="first-letter-caps"><?php echo $contact_info_heading ?></h5>
          <?php if ($location || $address || $email || $phone) { ?>
            <ul class="contact-detailes">
              <?php if ($location) { ?>
                <li>
                  <a
                    href="#FIXME"
                    class="location address first-letter-caps"
                    title="Street Name"
                    target="_blank"
                    rel="noopener noreferrer">
                    <?php echo $location ?>
                  </a>
                </li>
              <?php } ?>
              <?php if ($address) { ?>
                <li>
                  <a
                    href="#FIXME"
                    class="pin address"
                    title="City"
                    target="_blank"
                    rel="noopener noreferrer"><?php echo $address ?></a>
                </li>
              <?php } ?>
              <?php if ($email) { ?>
                <li>
                  <a
                    href="mailto:support@mobirise.com"
                    class="email-icon address"
                    title="Email"
                    target="_blank"
                    rel="noopener noreferrer"><?php echo $email ?></a>
                </li>
              <?php } ?>
              <?php if ($phone) { ?>
                <li>
                  <a
                    href="tel:+1(0)000-0000-001"
                    class="phone-number address"
                    title="Phone Number"
                    target="_blank"
                    rel="noopener noreferrer"><?php echo $phone ?></a>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if ($additional_para || $twitter_icon) { ?>
        <div class="footer-center-right">
          <?php if ($additional_para) { ?>
            <div class="popuptext">
              <?php echo $additional_para ?>
            </div>
          <?php } ?>
          <?php if ($additional_para) { ?>
            <a href="#FIXME" target="self" title="TechM4 Theme" class="theme">
              <img src="<?php echo $twitter_icon_image ?>" alt="Twitter">
            </a>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if ($app_store || $google_play || $support_heading || $right_para) { ?>
        <div class="footer-right">
          <?php if ($support_heading) { ?>
            <h5 class="first-letter-caps"><?php echo $support_heading ?></h5>
          <?php } ?>
          <?php if ($right_para) { ?>
            <p class="single-letter-caps footer-para">
              <?php echo $right_para ?>
            </p>
          <?php } ?>
          <?php if ($app_store || $google_play) { ?>
            <div class="apple-google">
              <?php if ($app_store) { ?>
                <a
                  href="<?php echo $app_store_link ?>"
                  target="_blank"
                  title="App Store"
                  class="download-app app-store first-letter-caps apple"
                  rel="noopener noreferrer">
                  <img src="<?php echo $app_store_image ?>" alt="Google Play">
                </a>
              <?php } ?>
              <?php if ($google_play) { ?>
                <a
                  href="<?php echo $google_play_link ?>"
                  target="_blank"
                  title="Google Play"
                  class="download-app google-play first-letter-caps google"
                  rel="noopener noreferrer">
                  <img src="<?php echo $google_play_image ?>" alt="Google Play">
                </a>
              <?php } ?>
            </div>
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
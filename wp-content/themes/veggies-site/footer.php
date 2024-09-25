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
$backgroud_image = get_field("backgroud_image", 'option');
$social_media_icons = get_field("social_media_icons", 'option');
?>
</main>
<!--main section end-->
<?php if (
  $contact_heading || $veggies_heading || $address || $reservations_heading ||
  $email || $phone_number || $contact_form_heading || $name_placeholder || $email_placeholder ||
  $textarea_placeholder || $button_text || $bootstrap_theme_link || $copyright_text || $backgroud_image
  || $social_media_icons
) { ?>
  <!--footer section start-->
  <footer class="m-auto relative text-darkgray">
    <div class="wrapper w-full">
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
        <div class="contact text-lightgray absolute z-2 left-2/4 top-0 w-4/12 mt-12 mx-auto mb-auto flex flex-col">
          <?php
          if ($contact_heading) { ?>
            <h2 class="single-caps line-below heading2"><?php echo $contact_heading ?></h2>
          <?php } ?>
          <?php
          if ($veggies_heading || $address || $reservations_heading || $email || $phone_number) { ?>
            <ul class="contact-info-list mt-20 mb-14 flex justify-between">
              <?php if ($veggies_heading || $address) { ?>
                <li class="w-5/12">
                  <?php if ($veggies_heading) { ?>
                    <h3 class="all-caps  mb-4 text-5 font-bold"><?php echo $veggies_heading ?></h3>
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
                    <h3 class="all-caps  mb-4 text-5 font-bold"><?php echo $reservations_heading ?></h3>
                    <?php if ($email) {
                      echo linkAttributes($email, 'email');
                    } ?>
                    <?php if ($phone_number) {
                      echo linkAttributes($phone_number, 'phone-number');
                    } ?>
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
                <h3 class="all-caps mb-4 text-5 font-bold"><?php echo $contact_form_heading ?></h3>
              <?php } ?>
              <?php
              if (
                $name_placeholder || $email_placeholder ||
                $textarea_placeholder || $button_text
              ) { ?>
                <form action="#FIXME" method="post">
                  <?php if ($name_placeholder || $email_placeholder) { ?>
                    <div class="name-email flex justify-between">
                      <?php if ($name_placeholder) { ?>
                        <div class="first-name">
                          <input type="text" placeholder="<?php echo $name_placeholder ?>" id="fname" 
                          class="w-full py-2 px-3 border-none border-b-1 border-b-whitegray bg-transparent text-4"
                          />
                        </div>
                      <?php } ?>
                      <?php if ($email_placeholder) { ?>
                        <div class="email-div">
                          <input type="email" placeholder="<?php echo $email_placeholder ?>" id="email" 
                          class="w-full py-2 px-3 border-none border-b-1 border-b-whitegray bg-transparent text-4"
                          />
                        </div>
                      <?php } ?>
                    </div>
                  <?php } ?>
                  <?php if ($textarea_placeholder) { ?>
                    <div class="textarea">
                      <textarea placeholder="<?php echo $textarea_placeholder ?>" id="textarea" class="h-52 w-full py-2 px-3 border-none
              border-b-1 border-b-whitegray bg-transparent text-4 resize-none"></textarea>
                    </div>
                  <?php } ?>
                  <?php if ($button_text) { ?>
                    <div class="send-button mt-7 text-center">
                      <button type="submit" class="first-caps py-4 px-7 border border-black bg-transparent text-lightgray text-4 font-bold" formnovalidate>
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
  <?php if ($footer_left_text || $bootstrap_theme_link || $copyright_text || $social_media_icons) { ?>
    <div class="footer-down w-10/12 absolute z-4 left-4 bottom-0 flex justify-between items-center py-8 border border-t-2 border-t-whitegray">
      <?php if ($footer_left_text || $bootstrap_theme_link || $copyright_text) { ?>
        <p class="pl-20">
          <?php if ($footer_left_text) { ?>
            <span class="single-caps made-with text-lightgray"><?php echo $footer_left_text ?></span>
          <?php } ?>
          <?php if ($bootstrap_theme_link) {
              echo linkAttributes($bootstrap_theme_link, 'bootstrap first-caps');
            } ?>
          <?php if ($copyright_text) { ?>
            <?php echo $copyright_text ?>
          <?php } ?>
        </p>
      <?php } ?>
      <?php if ($social_media_icons) { ?>
        <ul class="icon-list flex gap-y-1">
          <?php
            foreach ($social_media_icons as $icon) {
              $image = $icon['image'];
              $link = $icon['link'];
          ?>
            <li class="icon">
              <?php echo linkAttributes($link, 'social-media', wp_get_attachment_image($image, 'thumbnail', false)); ?>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
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
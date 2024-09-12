<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="shortcut icon" href="favicon.ico" />
  <?php wp_head(); ?>
</head>

<body>
  <!--container start-->
  <div class="container">
    <!--header section start-->
    <header>
      <div class="wrapper">
        <?php wp_nav_menu(array("theme_location" => "primary-menu", "menu_class" => "nav-list"))
        ?>
        <?php
        $customize_link = get_field("customize_link", 'option');
        $customize_link_title = get_field("customize_link", 'option')['title'];
        ?>
        <?php if ($customize_link) { ?>
          <div class="header-center">
            <a href="<?php echo $customize_link ?>" class="button" target="_self"><?php echo  $customize_link_title  ?></a>
          </div>
        <?php } ?>
        <?php
        $cart = get_field("cart", 'option');
        $search = get_field("search", 'option');
        $globe = get_field("globe", 'option');
        $cart_link = $cart['icon_link'];
        $cart_image = $cart['icon_image'];
        $search_link =  $search['icon_link'];
        $search_image =  $search['icon_image'];
        $globe_link = $globe['icon_link'];
        $globe_image =  $globe['icon_image'];
        ?>
        <div class="header-right">
          <?php if ($cart || $search || $globe) { ?>
            <ul class="icons-list">
              <?php if ($cart) { ?>
                <li>
                  <a href="<?php echo $cart_link ?>" title="Cart" target="_self" class="cart">
                    <img src="<?php echo  $cart_image ?>" alt="">
                  </a>
                </li>
              <?php } ?>
              <?php if ($search) { ?>
                <li>
                  <a href="<?php echo $search_link ?>" title="Cart" target="_self" class="">
                    <img src=" <?php echo $search_image ?>" alt="">
                  </a>
                </li>
              <?php } ?>
              <?php if ($globe) { ?>
                <li>
                  <a href="<?php echo  $globe_link ?>" title="Globe" target="_self" class="globe">
                    <img src=" <?php echo $globe_image ?>" alt="">
                  </a>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
        </div>
      </div>
    </header>
    <!--header section end-->
    <!--main section start-->
    <main>
      
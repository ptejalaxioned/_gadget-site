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
        <div class="header-center">
          <a href="<?php echo get_field("header_button",'option') ?>" class="button" target="_self"><?php echo get_field("header_button_text",'option') ?></a>
        </div>
        <div class="header-right">
          <ul class="icons-list">
            <li>
              <a href="#FIXME" title="Cart" target="_self" class="cart"><img src="<?php echo get_field("header_button",'option') ?>" alt=""></a>
            </li>
            <li>
              <a href="#FIXME" title="Search" target="_self" class="search">search</a>
            </li>
            <li>
              <a href="#FIXME" title="Earth" target="_self" class="earth">earth</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!--header section end-->
    <!--main section start-->
    <main>
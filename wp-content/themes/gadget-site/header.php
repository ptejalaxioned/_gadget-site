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
          <a href="#FIXME" class="button" target="_self">contact us</a>
        </div>
        <div class="header-right">
          <ul class="icons-list">
            <li>
              <a href="#FIXME" title="Cart" target="_self" class="cart">cart</a>
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
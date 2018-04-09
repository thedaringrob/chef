<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="/script.js"></script>

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header>
      <div class="nav_left">
        <h1><a href="<?php echo home_url(); ?>"></a> <?php bloginfo('name'); ?></h1>
        <h3 class="logo"><?php bloginfo('description'); ?></h3>
      </div>
        <div class="nav_right">
          <?php wp_nav_menu(); ?>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
      </nav>
    </header>
    <div class="clear">
</div>

    <div class="container">

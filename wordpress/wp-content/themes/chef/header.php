<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header>
      <nav>
        <div class="">
          <h1> <a href="<?php echo home_url(); ?>"></a> <?php bloginfo('name'); ?></h1>
          <h3><?php bloginfo('description'); ?></h3>
        </div>
        <div class="">
          <?php wp_nav_menu(); ?>
        </div>
      </nav>
    </header>

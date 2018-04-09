<?php

function theme_resources(){
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('script', get_template_directory_uri(),'/script.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'theme_resources');
 ?>

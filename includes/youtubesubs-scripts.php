<?php
  // Add scripts
  function yts_add_scripts(){
    // Add Main CSS
    wp_enqueue_style('yts-main-style', plugins_url().'/youtube-subs/css/style.css');
    // Add Main JS
    wp_enqueue_style('yts-main-style', plugins_url().'/youtube-subs/js/main.js');

    // Add Google Script
    wp_register_style('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_style('google');



  }

  add_action('wp_enqueue_scripts', 'yts_add_scripts');

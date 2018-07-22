<?php
  // Add scripts
  function yts_add_scripts(){
    // Add Main CSS
    wp_enqueue_style('yts-main-style', plugins_url().'/youtube-subs/css/style.css');
    // Add Main JS
    wp_enqueue_style('yts-main-style', plugins_url().'/youtube-subs/js/main.js');
  }

  add_action('wp_enqueue_scripts', 'yts_add_scripts');

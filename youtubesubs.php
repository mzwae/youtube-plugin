<?php
/*
Plugin Name: YouTube Subs
Description: Display YouTube subscribe button and count subscribers
Version: 1.0.0
Author: MZ
*/
if (!defined('ABSPATH')) {
  exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

// Register widget
function register_youtubesubs(){
  register_widget('Youtube_subs_Widget');
}

// Hook in function.
add_action('widgets_init', 'register_youtubesubs');

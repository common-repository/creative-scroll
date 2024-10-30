<?php
/*
Plugin Name: Creative Scroll
Plugin URI: http://learn-with-mnaopu.blogspot.com
Description: This is a simple wordpress creative scroll plugin. This plugin allows you to reach from bottom to top. If there is no scroll in your theme just install and active it.
Version: 2.0
Author: Md. Naeem Ahmed Opu
Author URI: https://profiles.wordpress.org/mnaopu
License: GPL2
*/

define ('plugin_directory', WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__)) . '/' );

function creative_scroll_style(){

	wp_enqueue_script('jquery');
	
	//CSS and JS File
	
	wp_register_style('cs-scroll',plugin_directory.'css/scroll.css');
	wp_register_style('cs-fa',plugin_directory.'css/font-awesome.min.css');
	wp_register_script('cs-jeasing',plugin_directory.'js/jquery.easing.1.3.js', 'jquery');
	wp_register_script('cs-jscroll',plugin_directory.'js/scroll.js', 'jquery');
	
	wp_enqueue_style('cs-scroll');
	wp_enqueue_style('cs-fa');
	wp_enqueue_script('cs-jeasing');
	wp_enqueue_script('cs-jscroll');
}

// Register Style

add_action('wp_enqueue_scripts', 'creative_scroll_style');

add_filter('wp_head', function($creative){
	echo $creative.'<a class="creative-scroll" href="#"><i class="fa fa-chevron-up"></i></a>';
});

?>
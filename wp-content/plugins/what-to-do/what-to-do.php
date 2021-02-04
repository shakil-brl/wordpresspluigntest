<?php
/**
* Plugin Name: What to do.
* Description: Simple todo list plugin
* Version: 1.0
* Author: Shakil Hosain
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/what-todo-list-scripts.php');

// Load Shortcodes
require_once(plugin_dir_path(__FILE__) . '/includes/what-todo-list-shortcodes.php');

// Check if admin
if(is_admin()){
	// Load Custom Post Type
	require_once(plugin_dir_path(__FILE__) . '/includes/what-todo-list-cpt.php');

	// Load Custom Fields
	require_once(plugin_dir_path(__FILE__) . '/includes/what-todo-list-fields.php');
}
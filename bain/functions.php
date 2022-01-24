<?php


require_once('includes/theme-support.php');// Done


//Setup

//Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));

//Hooks
add_action('wp_enqueue_scripts', 'bain_enqueue');
add_action('after_setup_theme', 'bain_setup_theme');

//Shortcodes

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

?>
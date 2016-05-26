<?php

function carlozaharStyleResources(){
	wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}

//Theme setup
function carlozaharSetup(){

	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
	));

	add_theme_support( 'post-thumbnails' ); 
}


add_action('after_setup_theme', 'carlozaharSetup');
add_action('wp_enqueue_scripts', 'carlozaharStyleResources');
add_filter('show_admin_bar', '__return_false');



?>
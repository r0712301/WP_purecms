<?php

function customtheme_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'customtheme-style', get_stylesheet_uri(), $dependencies ); 
}

function customtheme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}
function get_current_site() {
	global $current_site;
	return $current_site;
}

add_action( 'wp_enqueue_scripts', 'customtheme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'customtheme_enqueue_scripts' );

?>
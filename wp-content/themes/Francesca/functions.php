<?php 
function enqueue_css() ?> {
	wp_enqueue_style ('bs',get_template_directory_uri().'Vendors/css/bootstrap.min.css' );
	wp_enqueue_style ('bs',get_template_directory_uri().'style.css' );
}
add.action('wp_enqueue_scripts', enqueue.css');
function enqueue_js () {
	wp_enqueue_scripts ('bv',get_template_directory_uri) ().'Vendors/js/bootsstrapValidator.min.js', array ('jquery'), '', true);
	wp_enqueue_scripts ('bv',get_template_directory_uri) ().'/js/main.js', array ('jquery'), '', true);
}
add.action('wp_enqueue_scripts', enqueue.js');
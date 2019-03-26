<?php
/* Custom JS by Zmes
=============================================== */
function zmes_enqueue_scripts() {
	wp_register_script( 'maskinput', get_stylesheet_directory_uri() . '/js/jquery.mask.min.js', array( 'jquery' ), false, true );
    wp_register_script( 'zmes', get_stylesheet_directory_uri() . '/js/zmes.custom.js', array( 'jquery', 'maskinput'), false, true );

    wp_enqueue_script('zmes');
}
add_action( 'wp_enqueue_scripts', 'zmes_enqueue_scripts');
?>
<?php
/**
 * Zero functions and definitions.
 *
 * Add your custom PHP in this file. 
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

function generatepress_child_enqueue_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'generatepress_child_enqueue_scripts', 100 );
add_action( 'after_setup_theme', 'tu_add_comment_url_filter' );
function tu_add_comment_url_filter() {
    add_filter( 'comment_form_default_fields', 'tu_disable_comment_url', 20 );
}

function tu_disable_comment_url($fields) {
    unset($fields['url']);
    return $fields;
}
?>

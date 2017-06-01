<?php
/**
 * Lataa toiminnallisuuksia.
 *
 */
function testi_scripts() {
	// Lataa style.css tiedosto.
	wp_enqueue_style( 'testi-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'testi_scripts' );

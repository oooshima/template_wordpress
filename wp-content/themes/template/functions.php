<?php

/**
 * This is function.php
 *
 * @package template
 */

/**
 * Styleの読み込み
 */
function enqueue_style()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('global-styles');
	wp_dequeue_style('twentytwentytwo-style');
	wp_dequeue_style('twentytwentytwo-style-inline');

	wp_enqueue_style(
		'style',
		get_stylesheet_directory_uri() . '/dist/css/style.css',
		array(),
		filemtime(get_stylesheet_directory() . '/dist/css/style.css')
	);
}

add_action('wp_enqueue_scripts', 'enqueue_style', 11);

<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function theme_cluster_assets() {
	wp_enqueue_style(
		'theme-cluster',
		THEME_URI . '/style.css',
		[],
		THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'theme_cluster_assets' );

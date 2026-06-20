<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function theme_cluster_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'primary' => __( 'header', THEME ),
			'mobile' => __( 'mobile', THEME ),
			'footer' => __( 'footer', THEME ),
		)
	);
}
add_action( 'after_setup_theme', 'theme_cluster_setup' );

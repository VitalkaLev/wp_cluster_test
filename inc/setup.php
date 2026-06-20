<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function theme_cluster_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'theme_cluster_admin_thumb', 60, 60, true );

	register_nav_menus(
		array(
			'header' => __( 'header', THEME ),
			'mobile' => __( 'mobile', THEME ),
			'footer' => __( 'footer', THEME ),
		)
	);
}
add_action( 'after_setup_theme', 'theme_cluster_setup' );

function theme_cluster_admin_thumbnail_post_types() {
	return array( 'post', 'project' );
}

function theme_cluster_admin_thumbnail_column( $columns ) {
	$new_columns = array();

	foreach ( $columns as $key => $label ) {
		if ( 'title' === $key ) {
			$new_columns['thumbnail'] = __( 'Image', THEME );
		}

		$new_columns[ $key ] = $label;
	}

	return $new_columns;
}

function theme_cluster_admin_thumbnail_column_content( $column, $post_id ) {
	if ( 'thumbnail' !== $column ) {
		return;
	}

	if ( has_post_thumbnail( $post_id ) ) {
		echo get_the_post_thumbnail(
			$post_id,
			'theme_cluster_admin_thumb',
			array(
				'style' => 'width:60px;height:60px;object-fit:cover;border-radius:4px;',
			)
		);
		return;
	}

	echo '<span aria-hidden="true">—</span><span class="screen-reader-text">' . esc_html__( 'No image', THEME ) . '</span>';
}

function theme_cluster_admin_thumbnail_column_styles() {
	$screen = get_current_screen();

	if ( ! $screen || ! in_array( $screen->post_type, theme_cluster_admin_thumbnail_post_types(), true ) ) {
		return;
	}

	echo '<style>.column-thumbnail{width:80px;}.column-thumbnail img{display:block;}</style>';
}

foreach ( theme_cluster_admin_thumbnail_post_types() as $post_type ) {
	add_filter( "manage_{$post_type}_posts_columns", 'theme_cluster_admin_thumbnail_column' );
	add_action( "manage_{$post_type}_posts_custom_column", 'theme_cluster_admin_thumbnail_column_content', 10, 2 );
}

add_action( 'admin_head', 'theme_cluster_admin_thumbnail_column_styles' );

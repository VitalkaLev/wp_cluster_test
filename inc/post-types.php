<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function theme_cluster_register_post_types() {
	register_post_type(
		'project',
		array(
			'labels'              => array(
				'name'               => __( 'Проекти', THEME ),
				'singular_name'      => __( 'Проект', THEME ),
				'menu_name'          => __( 'Проекти', THEME ),
				'add_new'            => __( 'Додати новий', THEME ),
				'add_new_item'       => __( 'Додати новий проект', THEME ),
				'edit_item'          => __( 'Редагувати проект', THEME ),
				'new_item'           => __( 'Новий проект', THEME ),
				'view_item'          => __( 'Переглянути проект', THEME ),
				'search_items'       => __( 'Шукати проекти', THEME ),
				'not_found'          => __( 'Проекти не знайдено', THEME ),
				'not_found_in_trash' => __( 'У кошику проектів немає', THEME ),
				'all_items'          => __( 'Усі проекти', THEME ),
			),
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'publicly_queryable'  => false,
			'exclude_from_search' => true,
			'has_archive'         => false,
			'rewrite'             => false,
			'query_var'           => false,
			'menu_icon'           => 'dashicons-portfolio',
			'supports'            => array( 'title', 'thumbnail',  ),
			'show_in_rest'        => false,
			'menu_position'       => 5,
		)
	);
}
add_action( 'init', 'theme_cluster_register_post_types' );

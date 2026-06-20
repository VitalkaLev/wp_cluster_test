<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function theme_cluster_register_taxonomies() {
	register_taxonomy(
		'project-category',
		array( 'project' ),
		array(
			'labels'              => array(
				'name'              => __( 'Категорії проектів', THEME ),
				'singular_name'     => __( 'Категорія проекту', THEME ),
				'menu_name'         => __( 'Категорії', THEME ),
				'all_items'         => __( 'Усі категорії', THEME ),
				'edit_item'         => __( 'Редагувати категорію', THEME ),
				'view_item'         => __( 'Переглянути категорію', THEME ),
				'update_item'       => __( 'Оновити категорію', THEME ),
				'add_new_item'      => __( 'Додати категорію', THEME ),
				'new_item_name'     => __( 'Назва нової категорії', THEME ),
				'parent_item'       => __( 'Батьківська категорія', THEME ),
				'parent_item_colon' => __( 'Батьківська категорія:', THEME ),
				'search_items'      => __( 'Шукати категорії', THEME ),
				'not_found'         => __( 'Категорії не знайдено', THEME ),
			),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_admin_column'   => true,
			'publicly_queryable'  => true,
			'rewrite'             => true,
			'query_var'           => true,
			'show_in_rest'        => true,
		)
	);
}
add_action( 'init', 'theme_cluster_register_taxonomies' );

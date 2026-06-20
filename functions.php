<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('THEME_VERSION', '1.0.0');
define('THEME_PATH', get_template_directory());
define('THEME_URI', get_template_directory_uri());
define('THEME', 'theme-cluster');

// theme setup and configuration
$theme_core = [
	'setup',
	'enqueue',
	'acf',
	'post-types',
	'taxonomies',
];

foreach ( $theme_core as $file ) {
	require_once THEME_PATH .'/inc/' . $file . '.php';
}

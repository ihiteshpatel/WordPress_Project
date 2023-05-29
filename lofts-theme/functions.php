<?php
/**
 * Theme Functions.
 *
 * @package lofts-theme
 */

if ( ! defined( 'LOFTS_THEME_THEME_VERSION' ) ) {
	define( 'LOFTS_THEME_THEME_VERSION', '1.0' );
}

if ( ! defined( 'LOFTS_THEME_THEME_PATH' ) ) {
	define( 'LOFTS_THEME_THEME_PATH', __DIR__ );
}

if ( ! defined( 'LOFTS_THEME_THEME_URL' ) ) {
	define( 'LOFTS_THEME_THEME_URL', get_template_directory_uri() );
}

if ( ! defined( 'LOFTS_THEME_BUILD_URI' ) ) {
	define( 'LOFTS_THEME_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'LOFTS_THEME_BUILD_PATH' ) ) {
	define( 'LOFTS_THEME_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'LOFTS_THEME_BUILD_CSS_URI' ) ) {
	define( 'LOFTS_THEME_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'LOFTS_THEME_BUILD_CSS_DIR_PATH' ) ) {
	define( 'LOFTS_THEME_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'LOFTS_THEME_BUILD_JS_URI' ) ) {
	define( 'LOFTS_THEME_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'LOFTS_THEME_BUILD_JS_DIR_PATH' ) ) {
	define( 'LOFTS_THEME_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'LOFTS_THEME_CSS_URI' ) ) {
	define( 'LOFTS_THEME_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/src/css' );
}

if ( ! defined( 'LOFTS_THEME_CSS_DIR_PATH' ) ) {
    define( 'LOFTS_THEME_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/src/css' );
}

if ( ! defined( 'LOFTS_THEME_JS_URI' ) ) {
	define( 'LOFTS_THEME_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/src/js' );
}

if ( ! defined( 'LOFTS_THEME_JS_DIR_PATH' ) ) {
 	define( 'LOFTS_THEME_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/src/js' );
}

/**
 * Load up the class autoloader.
 */
require_once LOFTS_THEME_THEME_PATH . '/inc/helpers/autoloader.php';

/**
 * Theme Init
 *
 * Sets up the theme.
 *
 * @return void
 * @since 1.0.0
 */
function lofts_theme_get_theme_instance() {
	\LOFTS_THEME\Inc\Lofts_Theme::get_instance();
}

lofts_theme_get_theme_instance();

<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'GILB_DIR_URI' ) ) {
	define( 'GILB_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'GILB_DIR_ASSETS_URI' ) ) {
	define( 'GILB_DIR_ASSETS_URI', GILB_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'GILB_DIR_CSS_URI' ) ) {
	define( 'GILB_DIR_CSS_URI', GILB_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'GILB_DIR_JS_URI' ) ) {
	define( 'GILB_DIR_JS_URI', GILB_DIR_ASSETS_URI . 'js/' );
}

// Icon Images
if ( ! defined( 'GILB_DIR_ICON_IMG_URI' ) ) {
	define( 'GILB_DIR_ICON_IMG_URI', GILB_DIR_URI . 'img/core-img/' );
}

// Base Directory
if ( ! defined( 'GILB_DIR_PATH' ) ) {
	define( 'GILB_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'GILB_DIR_PATH_INC' ) ) {
	define( 'GILB_DIR_PATH_INC', GILB_DIR_PATH . 'inc/' );
}

//Gilb Libraries Folder Directory
if ( ! defined( 'GILB_DIR_PATH_LIBS' ) ) {
	define( 'GILB_DIR_PATH_LIBS', GILB_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'GILB_DIR_PATH_CLASSES' ) ) {
	define( 'GILB_DIR_PATH_CLASSES', GILB_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'GILB_DIR_PATH_HOOKS' ) ) {
	define( 'GILB_DIR_PATH_HOOKS', GILB_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function gilb_admin_script(){
    wp_enqueue_style( 'gilb-admin', get_template_directory_uri().'/assets/css/gilb_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'gilb_admin', get_template_directory_uri().'/assets/js/gilb_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'gilb_admin_script' );



/**
 * Include File
 *
 */
require_once( GILB_DIR_PATH_INC . 'gilb-breadcrumbs.php' );
require_once( GILB_DIR_PATH_INC . 'gilb-widgets-reg.php' );
require_once( GILB_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( GILB_DIR_PATH_INC . 'post-like.php' );
require_once( GILB_DIR_PATH_INC . 'gilb-functions.php' );
require_once( GILB_DIR_PATH_INC . 'gilb-commoncss.php' );
require_once( GILB_DIR_PATH_INC . 'support-functions.php' );
require_once( GILB_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( GILB_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( GILB_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( GILB_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( GILB_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( GILB_DIR_PATH_HOOKS . 'hooks.php' );
require_once( GILB_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( GILB_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( GILB_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Gilb object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Gilb = new Gilb();
<?php // (C) Copyright Bobbing Wide 2013, 2019

/**
 * Function to invoke when functions.php has been loaded
 */
function oobit_functions_loaded() {
  add_theme_support( 'woocommerce' );
  add_theme_support( 'title-tag' );
  add_action( "oik_admin_menu", "oobit_admin_menu" );
  add_action( 'wp_enqueue_scripts', 'oobit_enqueue_styles' );
  add_action( 'oik_fields_loaded', 'oobit_fields_loaded');
}
  
/**
 * Implement "oik_admin_menu" action
 *
 * - Remove menus for users who shouldn't see jetpack
 * - Register this theme as an oik theme
 * 
 */
function oobit_admin_menu() {
  oobit_remove_menus();
  oik_register_theme_server( __FILE__ );
}

/**
 * Remove unwanted menu items for users who shouldn't see them
 */
function oobit_remove_menus() {
  if( !current_user_can( 'add_users' ) ){
    remove_menu_page( 'jetpack' );
  }
}


function oobit_enqueue_styles() {
	$parent_style = 'twenty-eleven-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'oobit-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}

/**
 * Implement `oik_fields_loaded`
 *
 * Enables the functions used by the [bw_fields] and [bw_field] shortcodes
 */
function oobit_fields_loaded() {
	oik_require( 'shortcodes/oik-fields.php', 'oik-fields' );
	oik_require( 'shortcodes/oik-field.php', 'oik-fields' );
}

/**
 * Display a field or fields without labels
 * @param $fields
 */
function oobit_field( $fields ) {
	if ( function_exists( 'bw_field')) {
		$post = get_post();
		if ( $post ) {
			$value = bw_field( [ 'fields' => $fields, 'id' => $post->ID ] );
			echo $value;
		}
	}
}

/**
 * Display a field or fields with labels
 *
 * @param $fields
 */
function oobit_fields( $fields ) {
	if ( function_exists( 'bw_metadata' ) ) {
		$post = get_post();
		if ( $post ) {
			$value = bw_metadata( [ 'fields' => $fields, 'id' => $post->ID ] );
			echo $value;
		}
	}
}
 
oobit_functions_loaded();


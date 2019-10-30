<?php // (C) Copyright Bobbing Wide 2013, 2019

/**
 * Function to invoke when functions.php has been loaded
 */
function oobit_functions_loaded() {
  add_theme_support( 'woocommerce' );
  add_action( "oik_admin_menu", "oobit_admin_menu" );
  add_action( 'wp_enqueue_scripts', 'oobit_enqueue_styles' );
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
 
oobit_functions_loaded();


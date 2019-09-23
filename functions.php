<?php // (C) Copyright Bobbing Wide 2013

/**
 * Function to invoke when functions.php has been loaded
 */
function oobit_functions_loaded() {
  add_theme_support( 'woocommerce' );
  add_action( "oik_admin_menu", "oobit_admin_menu" );
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
 
oobit_functions_loaded();


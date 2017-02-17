<?php
/*
Plugin Name: Nuno Sarmento Social Icons
Description: Create a nice float vertical social media icons
Plugin URI: https://www.nuno-sarmento.com
Version: 1.0.1
Author: Nuno Sarmento
Author URI: https://www.nuno-sarmento.com
Text Domain: nuno-sarmento-socialicons
Domain Path: /languages
License:     GPL2

Nuno Sarmento Social Icons is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Nuno Sarmento Social Icons is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

*/

defined('ABSPATH') or die('°_°’');

/* ------------------------------------------
// Constants ---------------------------
--------------------------------------------- */

/* Set plugin version constant. */

if( ! defined( 'NUNO_SARMENTO_SOCIALICONS_VERSION' ) ) {
	define( 'NUNO_SARMENTO_SOCIALICONS_VERSION', '1.0.1' );
}

/* Set plugin name. */

if( ! defined( 'NUNO_SARMENTO_SOCIALICONS_NAME' ) ) {
	define( 'NUNO_SARMENTO_SOCIALICONS_NAME', 'Nuno Sarmento - Social Icons' );
}

/* Set constant path to the plugin directory. */

if ( ! defined( 'NUNO_SARMENTO_SOCIALICONS_PATH' ) ) {
	define( 'NUNO_SARMENTO_SOCIALICONS_PATH', plugin_dir_path( __FILE__ ) );
}

/* ------------------------------------------
// CSS Options   ----------------------------
--------------------------------------------- */

if ( ! @include( 'nuno-sarmento-socialicons-styling.php' ) ) {
	require_once( NUNO_SARMENTO_SOCIALICONS_PATH . 'assets/css/nuno-sarmento-socialicons-styling.php' );
}

/* ------------------------------------------
// functions Class---------------------------
--------------------------------------------- */

if ( ! @include( 'nuno-sarmento-socialicons-settings.php' ) ) {
	require_once( NUNO_SARMENTO_SOCIALICONS_PATH . 'admin/nuno-sarmento-socialicons-settings.php' );
}

/* ------------------------------------------
// i18n ----------------------------
--------------------------------------------- */

load_plugin_textdomain( 'nuno-sarmento-socialicons', false, basename( dirname( __FILE__ ) ) . '/languages' );

/* ------------------------------------------
// Enqueue CSS & JS---------------------------
--------------------------------------------- */

function nuno_sarmento_socialicons_add_css() {

	wp_enqueue_style( 'nuno-sarmento-socialicons', plugins_url( 'assets/css/nuno-sarmento-socialicons.css', __FILE__ ) );
	wp_enqueue_style( 'nuno-sarmento-socialicons' );

	wp_register_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'fontawesome' );

	wp_register_script('nuno-sarmnto-si-popup', plugins_url('assets/js/nuno-sarmento-si-popup.js', __FILE__));
	wp_enqueue_script('nuno-sarmnto-ss-popup');


}
add_action('wp_enqueue_scripts', 'nuno_sarmento_socialicons_add_css', 100);

/* ------------------------------------------
// Enqueue JS Color Picker-------------------
--------------------------------------------- */

function nuno_sarmento_socialicons_admin_enqueue_scripts() {

	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'wp-color-picker');
	wp_enqueue_script( 'nuno-sarmento-socialicons-picker', plugins_url( 'assets/js/nuno-sarmento-socialicons-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );

}

add_action( 'admin_enqueue_scripts', 'nuno_sarmento_socialicons_admin_enqueue_scripts' );

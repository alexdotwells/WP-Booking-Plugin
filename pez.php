<?php

/**
 * @wordpress-plugin
 * Plugin Name:        Custom Booking
 * Version:           2.5.0
 * Author:            AWells
 * Description:        Custom Booking Plugin. Style, script, and markup changes to extend the Woocommerce Bookings process.
 * Text Domain:       pez
 */

/* If this file is called directly, abort. */
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'includes/class-pez.php';

function run_pez() {
	$plugin = new Pez();
	$plugin->run();
}

run_pez();

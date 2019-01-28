<?php

/**
 * @worpress-plugin
 * Plugin Name: SP-Core
 * Description: Provides various wordpress-specific debugging tools
 * Version:     1.0.0
 * Author:      Chris McCluskey
 * Author URI:  http://mccluskey.us
 */

// Prevent file from being called directly
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

require_once plugin_dir_path( __FILE__ ) . 'includes/class-configuration.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-logger.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-service.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-service_registry.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-core.php';

function sp_get_core() {
	global $sp_global_core;

	if(!isset($sp_global_core)) {
		$sp_global_core = new \SP\Core();
	}

	return $sp_global_core;
}

function sp_register_service($service) {
	$core = sp_get_core();
	$service_registry = $core->get_service_registry();
	$service_registry->register($service);
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-tracer.php';
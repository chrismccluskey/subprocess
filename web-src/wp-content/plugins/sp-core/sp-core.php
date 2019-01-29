<?php

/**
 * @worpress-plugin
 * Plugin Name: SP-Core
 * Description: Provides various wordpress-specific debugging tools and core functionality for SP family of plugins
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
require_once plugin_dir_path( __FILE__ ) . 'includes/class-filelogger.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-tracelogger.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-service.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-serviceregistry.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-core.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-tracer.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/api.php';

sp_register_service('\SP\Tracer');
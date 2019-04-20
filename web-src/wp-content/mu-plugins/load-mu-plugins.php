<?php

/**
 * @worpress-plugin
 * Plugin Name: SP Must Use Plugin Loader
 * Description: Loads "must use" plugins
 * Version:     1.0.0
 * Author:      Chris McCluskey
 * Author URI:  http://mccluskey.us
 */

// Prevent file from being called directly
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! file_exists( __DIR__ . '/../../vendor/autoload.php' ) ) {
	wp_die("Could not load composer dependencies.");
}

require_once( __DIR__ . '/../../vendor/autoload.php' );

#require_once( __DIR__ . '/sp-core/sp-core.php' );
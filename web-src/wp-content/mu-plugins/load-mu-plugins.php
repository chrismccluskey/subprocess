<?php

if ( ! file_exists( __DIR__ . '/../../vendor/autoload.php' ) ){
	wp_die("Could not load composer dependencies.");
}

require_once( __DIR__ . '/../../vendor/autoload.php' );

require_once( __DIR__ . '/sp-core/sp-core.php' );
<?php

namespace {

	function sp_register_service($service) {
		$core = sp_get_core();
		$service_registry = $core->get_service_registry();
		$service_registry->register($service);
	}

	function sp_get_core() {
		global $sp_global_core;

		if(!isset($sp_global_core)) {
			$sp_global_core = new \SP\Core();
		}

		return $sp_global_core;
	}

	function sp_get_default_config($key=NULL, $default=NULL) {
		if(NULL === $key) {
			return new \SP\DefaultConfiguration();
		} else {
			return (new \SP\DefaultConfiguration())->get($key, $default);
		}
	}

	function sp_get_config($key, $config) {
		return $config->get($key, sp_get_default_config($key));
	}
}
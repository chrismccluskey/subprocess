<?php

namespace SP;

abstract class Configuration {

	protected $map;

	abstract public function __construct();

	public function set($key, $value) {
		$this->map[$key] = $value;
	}

	public function get($key, $default_value=NULL) {
		return array_key_exists($key, $this->map) ? $this->map[$key] : $default_value;
	}

}

class DefaultConfiguration extends Configuration {

	public function __construct() {
		$this->map = [
			'log.directory'  => '/var/log/sp/',
			'log.filename'   => 'default.log',
			'log.filemode'   => 'a',
			'log.level'      => \SP\Logger::DEBUG,
			'tracer.enabled' => true,
		];
	}

}
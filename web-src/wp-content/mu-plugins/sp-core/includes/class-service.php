<?php

namespace SP;

abstract class Service {

	protected $logger;
	protected $config;
	protected $name;

	public function __construct(Logger $logger, Configuration $config) {

		$this->log = $logger;
		$this->log->set_location($this->get_name());

		$this->config = $config;

		$this->init();
	}

	public function get_name() {
		return $this->name;
	}

	public abstract function init();

}
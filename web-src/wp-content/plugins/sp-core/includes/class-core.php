<?php

namespace SP {

	class Core {

		protected $name = 'core';
		protected $config;
		protected $log;
		protected $service_registry;
		public $magic; //TODO: remove

		public function __construct() {

			$this->magic = rand(0,99999999); //TODO: remove
			$this->config = new \SP\DefaultConfiguration();
			$this->log = new \SP\FileLogger($this->config);
			$this->service_registry = new \SP\ServiceRegistry($this->log, $this->config);
			$this->log->debug("Core Magic: ".$this->magic." __construct()"); //TODO: remove

		}

		public function get_service_registry() {
			$this->log->debug("Core Magic: ".$this->magic." get_service_registry()"); //TODO: remove
			return $this->service_registry;
		}

	}

}
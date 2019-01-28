<?php

namespace SP {

	class Core {

		protected $name = 'core';
		protected $config;
		protected $logger;
		protected $service_registry;

		public function __construct() {

			$this->config = new \SP\DefaultConfiguration();
			$this->logger = new \SP\FileLogger($this->config);
			$this->service_registry = new \SP\ServiceRegistry($this->logger, $this->config);

		}

		public function get_service_registry() {
			return $this->service_registry;
		}

	}

}
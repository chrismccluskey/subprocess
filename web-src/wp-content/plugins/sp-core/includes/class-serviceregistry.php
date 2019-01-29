<?php

namespace SP {

	class ServiceRegistry extends Service {

		protected $name = 'service registry';
		protected $map = [];

		public function register($service_name) {
			if(!array_key_exists($service_name, $this->map)) {
				$this->map[$service_name] = new $service_name($this->log, $this->config);
			}
		}

		public function get($service_name) {
			return $this->map[$service_name];
		}

		public function init() {}

	}

}
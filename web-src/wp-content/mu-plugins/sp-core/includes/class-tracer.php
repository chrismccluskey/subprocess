<?php

namespace SP;

class Tracer extends Service {

	protected $name = 'wp_trace';

	protected $report;

	protected function is_enabled() {
		return sp_get_config('tracer.enabled', $this->config);
	}

	public function init() {

		if($this->is_enabled()) {
			add_filter('all', [&$this, 'trace_filter']);
		}

	}

	private function begin_report($report) {
		$timestamp = time();
		$report->write(PHP_EOL);
		$report->write(PHP_EOL);
		$report->write(sprintf("Trace started @ %s (%s)%s", date('r', $timestamp), $timestamp, PHP_EOL));
		return $report;
	}

	public function get_report() {

		if(!isset($this->report)) {
			$this->report = $this->begin_report(new \SP\TraceLogger($this->config));
		}

		return $this->report;

	}

	public function trace_filter() {
		if(doing_filter()) {
			$this->trace(current_filter());
		}
	}

	private function trace($name) {
		if($this->is_enabled()) {
			global $wp_filter;

			$filter = $wp_filter[$name];
			$report = $this->get_report();
			$timestamp = microtime();

			if(NULL !== $filter) {
				$callbacks = $filter->current();

				$report->write(sprintf('[%s] %s%s', $timestamp, $name, PHP_EOL));

				foreach($callbacks as $callback => $callback_details) {
					if(is_array($callback_details['function'])) {
						
						foreach($callback_details['function'] as $function) {
							if(is_object($function)) {
								$function_name = get_class($function);
							}
							$report->write(sprintf('[%s] |- function: %s%s', $timestamp, $function_name, PHP_EOL));
						}
					} else {
						$report->write(sprintf('[%s] |- callback: %s with %d arg(s)%s', $timestamp, $callback_details['function'], $callback_details['accepted_args'], PHP_EOL));
					}
				}
			}
		}
	}
}
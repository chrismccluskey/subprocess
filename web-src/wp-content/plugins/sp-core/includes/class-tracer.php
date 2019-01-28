<?php

namespace SP;

class Tracer extends Service {

	protected $name = 'wp_trace';

	public function init() {
		$this->log->debug('WP_Trace initialized');
	}

}
sp_register_service('\SP\Tracer');
/*
function spd_trace_action() {
	if(doing_action()) {
		spd_trace('action', current_action());
	}
}
add_action('all', 'spd_trace_action');

function spd_trace_filter() {
	if(doing_filter()) {
		spd_trace('filter', current_filter());
	}
}
add_filter('all', 'spd_trace_filter');

function spd_trace($type, $name) {
	global $wp_filter;

	$filter = $wp_filter[$name];
	if(NULL !== $filter) {
		$callbacks = $filter->current();

		$filename = join([SPD_LOG_FILE_DIRECTORY, SPD_TRACE_FILE_NAME]);

		spd_file_write($filename, sprintf('[%s] %s%s', $type, $name, PHP_EOL));

		foreach($callbacks as $callback => $callback_details) {
			if(is_array($callback_details['function'])) {
				
				foreach($callback_details['function'] as $function) {
					if(is_object($function)) {
						$function_name = get_class($function);
					}
					spd_file_write($filename, sprintf(' |- function: %s%s', $function_name, PHP_EOL));
				}
			} else {
				spd_file_write($filename, sprintf(' |- callback: %s with %d arg(s)%s', $callback_details['function'], $callback_details['accepted_args'], PHP_EOL));
			}
		}

		spd_file_write($filename, PHP_EOL);
	}

}
*/
/*
public function init() {

	add_action('plugins_loaded', [&$this, 'start_up'], 0, 1);
	add_action('shutdown', [&$this, 'shut_down'], 0, 1);

}

public function start_up() {

	$this->log->debug('initialized');

}

public function shut_down() {

	$this->log->debug('shut down');

}
*/

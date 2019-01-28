<?php

namespace SP;

abstract class Logger {

	public const DEBUG = 100;
	public const INFO = 200;
	public const WARNING = 300;
	public const ERROR = 400;
	public const FATAL = 500;

	private $log_level_names = [
		self::DEBUG   => 'debug',
		self::INFO    => 'info',
		self::WARNING => 'warning',
		self::ERROR   => 'error',
		self::FATAL   => 'fatal',
	];

	private $log_level;
	private $location;

	public function __construct(Configuration $config) {

		$this->config = $config;
		$this->log_level = $this->config->get('log.level', 0);

	}

	public function set_location($location) {
		$this->location = $location;
	}

	public function get_location() {
		return $this->location;
	}

	public function get_level_name($level) {
		return $this->log_level_names[$level];
	}

	public function get_log_level() {
		return $this->log_level;
	}

	private function write_log($message, $location, $level=self::DEBUG) {
		if(NULL === $location) {
			$location = $this->get_location();
		}
		if($this->log_level <= $level) {
			$level_name = strtoupper($this->get_level_name($level));
			$timestamp = date('Y-m-d H:i:s');

			$line = sprintf('[%s] %s: %s (%s)%s', $timestamp, $location, $message, $level_name, PHP_EOL);
			$this->write($line);
		}
	}

	public function debug($message, $location=NULL) {
		$this->write_log($message, $location, self::DEBUG);
	}

	public function info($message, $location=NULL) {
		$this->write_log($message, $location, self::INFO);
	}

	public function warning($message, $location=NULL) {
		$this->write_log($message, $location, self::WARNING);
	}

	public function error($message, $location=NULL) {
		$this->write_log($message, $location, self::ERROR);
	}

	public function fatal($message, $location=NULL) {
		$this->write_log($message, $location, self::FATAL);
	}

	abstract public function write($contents);

}

class FileLogger extends Logger {

	protected $config;
	protected $file_pointer;

	public function __construct(Configuration $config) {

		parent::__construct($config);

		$filename = join([$this->config->get('log.directory'), $this->config->get('log.filename')]);
		$this->file_pointer = fopen($filename, $this->config->get('log.filemode'));

	}

	public function __destruct() {

		fclose($this->file_pointer);
		
	}

	public function write($contents) {

		fwrite($this->file_pointer, $contents);

	}

}
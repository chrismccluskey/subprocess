<?php

namespace SP;

class FileLogger extends Logger {

	protected $config;
	protected $file_pointer;

	public function __construct(Configuration $config) {

		parent::__construct($config);

		$filename = join([sp_get_config('log.directory', $this->config), sp_get_config('log.filename', $this->config)]);
		$this->file_pointer = fopen($filename, sp_get_config('log.filemode', $this->config));

	}

	public function __destruct() {

		fclose($this->file_pointer);
		
	}

	public function write($contents) {

		fwrite($this->file_pointer, $contents);

	}

}
<?php

namespace SP;

class TraceLogger extends FileLogger {

	public function __construct(Configuration $config) {

		parent::__construct($config);

		$filename = join([sp_get_config('tracer.directory', $this->config), sp_get_config('tracer.filename', $this->config)]);
		$this->file_pointer = fopen($filename, sp_get_config('tracer.filemode', $this->config));

	}


}
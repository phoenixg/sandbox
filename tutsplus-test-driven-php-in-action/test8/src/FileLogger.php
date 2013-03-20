<?php

class FileLogger
{
	protected $path;

	public function __construct($path)
	{
		$this->path = $path;
	}

	public function write($message)
	{
		$message = sprintf("%s : %s\n", date('r', 0), $message);
		file_put_contents($this->path, $message, FILE_APPEND);
	}
}
<?php

namespace Enlog;
use \Enlog\Handler\HandlerInterface;
class Logger
{
	protected $handler = array();
	
	public function registerHandler($name, HandlerInterface $handler)
	{
		$this->handler[$name] = $handler;
	}

	public function getHandler($name)
	{
		return $this->handler[$name];
	}

	public function log($message)
	{
		$date = date('r');
		foreach($this->handler as $hdl){
			$hdl->write($date, $message);
		}
	}
}
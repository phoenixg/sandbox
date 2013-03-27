<?php

class WebService
{
	public function rotate($param)
	{
		return strrev($param);
	}

	public function length($param)
	{
		return strlen($param);
	}

	public function __call($methodName, $params)
	{
		return 'method not found';
	}
}
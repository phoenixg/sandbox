<?php

interface HandlerInterface
{
	public function write($timestamp, $message);
}
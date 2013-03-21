<?php

interface TaskInterface
{
	public function execute(array $options, $order);
}
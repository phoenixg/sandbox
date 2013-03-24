<?php

class Calculator
{
	public function add($a , $b)
	{
		return $a + $b;
	}

	public function sub($a, $b)
	{
		return $a - $b;
	}

	public function multiply($a, $b)
	{
		return $a * $b;
	}

	public function divide($a, $b, $throwsExceptionOnZero = false)
	{
		if ($throwsExceptionOnZero && $b === 0){
			throw new InvalidArgumentException('Can not divide by 0');
		}
		return $a / $b;
	}
}
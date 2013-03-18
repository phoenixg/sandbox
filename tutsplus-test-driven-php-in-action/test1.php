<?php
// phpunit test1.php

class SomeTest extends PHPUnit_Framework_TestCase
{
	public function testSomething()
	{
		//$this->assertTrue(false);// 这样就测试失败
		$this->assertTrue(true);	
	}
}

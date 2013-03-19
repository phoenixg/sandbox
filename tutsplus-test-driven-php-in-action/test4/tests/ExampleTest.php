<?php
// phpunit --colors ExampleTest.php

class ExampleTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @expectedException PHPUnit_Framework_Error_Warning
	 */
	public function testWarning()
	{
		include 'some.file.which.dont.exists';
	}

	/**
	 * @expectedException PHPUnit_Framework_Error_Notice
	 */
	public function testNotice()
	{
		$_GET[THIS_CONSTANT_IS_NOT_DEFINED];
	}
}
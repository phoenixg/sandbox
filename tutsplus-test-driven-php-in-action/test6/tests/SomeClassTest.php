<?php
// phpunit --colors SomeClassTest.php
class SomeClassTest extends PHPUnit_Framework_TestCase
{
	public function testSomethingThatDontExistsNow()
	{
		$this->markTestIncomplete('Waiting for implementation');
	}

	public function testSomethingOptional()
	{
		if(!extension_loaded('libevent')) {
			$this->markTestSkipped('Install libevent');
		}
	}
}
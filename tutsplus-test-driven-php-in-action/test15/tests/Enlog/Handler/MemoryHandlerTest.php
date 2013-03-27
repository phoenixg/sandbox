<?php

use \Enlog\Handler\MemoryHandler;

class MemoryHandlerTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var $handler \Enlog\Handler\MemoryHandler
	 */
	protected $handler;

	public function setUp()
	{
		$this->handler = new MemoryHandler();
	}

	public function testImplementsHandlerInterface()
	{
		$this->assertInstanceOf('\Enlog\Handler\HandlerInterface', $this->handler);
	}

	public function testWriteToInternal()
	{
		$this->handler->write('Fri, 14 Sep 2012 20:52:34 +0200', 'Hello World');
		$this->assertInternalType('array', $this->handler->getEntries());
		$this->assertCount(1, $this->handler->getEntries());
		$this->assertEquals(array('[Fri, 14 Sep 2012 20:52:34 +0200] Hello World'), $this->handler->getEntries());
	}
}

<?php

class LoggerTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @var $logger \Enlog\Logger
	 */
	protected $logger;

	
	public function setUp()
	{
		$this->logger = new \Enlog\Logger();
	}

	public function testFoo()
	{
		$this->assertTrue(true);
	}

	public function testInstance()
	{
		$this->assertInstanceOf('\Enlog\Logger', $this->logger);
	}

	public function testRegistersHandlerCorrectly()
	{
		$handler = $this->getHandlerMock();

		$this->logger->registerHandler('memory', $handler);
		$this->assertSame($handler, $this->logger->getHandler('memory'));
	}

	public function testRegistersMoreThanOneHandlerCorrectly()
	{
		$handler = $this->getHandlerMock();
		var_dump($handler instanceof \Enlog\Handler\HandlerInterface);
		$handler2 = $this->getHandlerMock();

		$this->logger->registerHandler('memory', $handler);
		$this->logger->registerHandler('memory2', $handler2);

		$this->assertSame($handler, $this->logger->getHandler('memory'));
		$this->assertSame($handler2, $this->logger->getHandler('memory2'));
	}

	public function testPassingCallsToHandlers()
	{
		$mock = $this->getHandlerMock();
		$mock->expects($this->exactly(2)) // 即下面调用了两次
		     ->method('write')
		     ->with(
		     	$this->isType('string'),
		     	$this->equalTo('Hello!')
		     );

		$this->logger->registerHandler('memory',  $mock);
		$this->logger->registerHandler('memory2', $mock);
		$this->logger->log('Hello!');
	}

	protected function getHandlerMock()
	{
		return $this->getMock('\Enlog\Handler\HandlerInterface');
	}
}
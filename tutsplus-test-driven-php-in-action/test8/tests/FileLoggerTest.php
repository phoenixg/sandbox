<?php
require '../src/FileLogger.php';

class FileLoggerTest extends PHPUnit_Framework_TestCase
{
	const FILENAME = './log.txt';

	protected $logger;

	public function setUp()
	{
		$handle = fopen('php://memory', 'a+');
		$this->logger = new FileLogger(self::FILENAME);
	}

	public function testCreatingLogFile()
	{
		$this->logger->write('Hello World');
		$this->assertFileExists(self::FILENAME);
	}

	public function testCreatingFileOnFirstWrite()
	{
		$this->assertFileNotExists(self::FILENAME);
		$this->logger->write('Hello World');
		$this->assertCount(1, file('./log.txt'));
		$this->assertFileExists(self::FILENAME);
	}

	public function testAppendingToFile()
	{
		$this->logger->write('Hello World');
		$this->logger->write('Hello World');
		$this->logger->write('Hello World');
		$this->assertCount(3, file('./log.txt'));
	}

	public function tearDown()
	{
		// 传统的做法是需要手动删除测试文件，否则测试会失败
		// 此处如果把if语句注释掉，测试就会失败
		// 还可以使用作者介绍的vfsStream代替
		if(file_exists(self::FILENAME)){
			unlink(self::FILENAME);
		}
		
		$this->logger = null;
	}
}
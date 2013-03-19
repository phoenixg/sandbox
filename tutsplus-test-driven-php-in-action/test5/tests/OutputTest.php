<?php
class Command
{
	const VERSION = '0.0.1';

	public function printVersion()
	{
		echo 'Version is : '.self::VERSION;
	}
}


class OutputTest extends PHPUnit_Framework_TestCase
{
	// 利用输出缓冲
	public function testOutputHello1()
	{
		ob_start();
		$command = new Command();
		$command->printVersion();
		$txt = ob_get_clean();
		$this->assertEquals('Version is : 0.0.1', $txt);
	}

	// 利用内置方法，更简单！
	public function testOutputHello2()
	{
		//$this->expectOutputString('Version is : 0.0.1');
		$this->expectOutputRegex('/Version is/');
		$command = new Command();
		$command->printVersion();
	}
}
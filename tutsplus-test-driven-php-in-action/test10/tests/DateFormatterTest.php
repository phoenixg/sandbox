<?php

require '../src/DateFormatter.php';
require '../src/Config.php';

class DateFormatterTest extends PHPUnit_Framework_TestCase
{
	public function testFormattingDatesBasedOnConfig()
	{
		$stub = $this->getMock('Config');
		//var_dump($stub);
		$stub->expects($this->any())
		     ->method('get')
		     ->with('date.format')
		     ->will($this->returnValue('c')); // 伪造返回值用来测试?
		    
		$formatter = new DateFormatter($stub);
		//var_dump($formatter->getFormattedDate(0));die;
		$this->assertEquals($formatter->getFormattedDate(0), '2013-03-21T19:51:36+08:00');
	}
}
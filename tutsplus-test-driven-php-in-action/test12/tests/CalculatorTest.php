<?php
require '../src/Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	protected $calc;

	protected function setUp()
	{
		$this->calc = new Calculator();
	}

	public function testAdd()
	{
		$this->assertEquals(4, $this->calc->add(1, 3));
	}

	public function testSub()
	{
		$this->assertEquals(-2, $this->calc->sub(1, 3));

		// 这里实际上调用了add，所以会触发针对add的测试，查看浏览器的报告
		$this->assertEquals(4, $this->calc->add(1, 3));
	}

	// 这个部分应该要测试multiply的，但是却没有写对应的测试（注释掉了），
	// 所以报告会显示红色提醒你，这部分没有执行
	// public function testMultiply()
	// {
	//  	$this->assertEquals(60, $this->calc->multiply(20, 3));
	// }

	public function testDivide()
	{
		$this->assertEquals(3, $this->calc->divide(12, 4));
	}

	// 如果没有这个方法，那么生成的报告就会有部分项目没有被执行的显示
	/*
	public function testDivideByZeroThrowsAnException1()
	{
		$this->assertEquals(3, $this->calc->divide(12, 0, true));
	}
	*/

	// 上面这个方法也可以写成这样，且推荐！
	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testDivideByZeroThrowsAnException2()
	{
		$this->assertEquals(3, $this->calc->divide(12, 0, true));
	}
}






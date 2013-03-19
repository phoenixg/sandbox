<?php

class AssertionsTest extends PHPUnit_Framework_TestCase
{
	public function testBasicAssertion()
	{
		//$this->assertTrue( 1 + 1 === 3, 'It should be 2' );
		//$this->assertEquals( 1 + 1, 2 );
		//$this->assertTrue(new DateTime() instanceof DateTime);
		//$this->assertInstanceOf('DateTime', new DateTime());

		/*
		$arr = array();
		$this->assertCount(0, $arr);
		$arr[] = 'a';
		$this->assertCount(1, $arr);
		$this->assertContains('a', $arr);
		$this->assertNotContains('b', $arr);
		array_pop($arr);
		$this->assertCount(0, $arr);
		*/
		
	}

	public function testException1()
	{
		try {
			//throw new LogicException('Foo', 1234);
			//$this->fail('We should not be here');
		} catch (LogicException $e) {
			$this->assertEquals($e->getMessage(), 'Foo');
			$this->assertEquals($e->getCode(), 1234);
		}
	}

	/**
	 * @expectedException        LogicException
	 * @expectedExceptionMessage Foo
	 * @expectedExceptionCode    1234
	 */
	public function testException2()
	{
		throw new LogicException('Foo', 1234);
	}

}
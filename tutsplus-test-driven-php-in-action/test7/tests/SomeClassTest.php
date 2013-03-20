<?php

class SomeClassTest extends PHPUnit_Framework_TestCase
{
	protected $data;
	protected static $dbh;

	public static function setUpBeforeClass()
	{
		echo 'once at the beginning';
		self::$dbh = new PDO("sqlite:memory");
	}

	public function setUp()
	{
		echo 'a';
		$this->data = array(1,2,3);
	}

	public function testPushingToArray()
	{
		array_push($this->data, 5);

		$this->assertCount(4, $this->data);
		$this->assertContains(1, $this->data);
		$this->assertContains(2, $this->data);
		$this->assertContains(3, $this->data);
		$this->assertContains(5, $this->data);
	}

	public function testPopFromArray()
	{
		array_pop($this->data);

		$this->assertCount(2, $this->data);
		$this->assertContains(1, $this->data);
		$this->assertContains(2, $this->data);
		$this->assertNotContains(3, $this->data);
	}

	public function testShiftFromArray()
	{
		array_shift($this->data);

		$this->assertCount(2, $this->data);
		$this->assertContains(2, $this->data);
		$this->assertContains(3, $this->data);
		$this->assertNotContains(1, $this->data);
	}

	public function tearDown()
	{
		echo 'b';
		$this->data = null;
	}

	public static function tearDownAfterclass()
	{
		echo 'once at the end';
		self::$dbh = null;
	}
}
<?php
// 用这个命令行命令来执行单元测试：
// vendor/EHER/PHPUnit/bin/phpunit test/calculator_test.php
require 'calculator.php';
use App\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
  public function testAdd()
  {
    $c = new Calculator;
    $result = $c->add(5, 10);
    $this->assertEquals(15, $result);
  }

  public function testSubtract()
  {
    $c = new Calculator;
    $result = $c->subtract(20, 8);
    $this->assertEquals(12, $result);
  }
}

<?php

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

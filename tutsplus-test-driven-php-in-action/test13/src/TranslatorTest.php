<?php


require './Translator.php';

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-26 at 21:08:37.
 */
class TranslatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Translator
     */
    // 可以把$object修改为$translator等更适合的名称
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        // 这里我也修改过，造了点数据
        $this->object = new Translator(array(
            'key' => 'value'
        ));
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Translator::getCount
     * @todo   Implement testGetCount().
     */
    public function testGetCount()
    {
        // Remove the following lines when you implement this test.
        /* 这里是用命令生成的，可改成自己的
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
        */
        $this->assertEquals(1, $this->object->getCount());
        
    }

    /**
     * @covers Translator::translate
     * @todo   Implement testTranslate().
     */
    public function testTranslate()
    {
        // Remove the following lines when you implement this test.
        /* 同上
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
        */
        $this->assertEquals('value', $this->object->translate('key'));
        
    }
}

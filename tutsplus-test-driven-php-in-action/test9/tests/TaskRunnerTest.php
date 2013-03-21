<?php
require '../src/TaskRunner.php';

class TaskRunnerTest extends PHPUnit_Framework_TestCase
{
	public function testRunAllPassesParamsCorrectly()
	{
		$mock = $this->getMock('TaskInterface', array('execute'));
		$mock->expects($this->exactly(2))
			 ->method('execute')
			 ->with(
			 	$this->equalTo(array('foo')),
			 	$this->greaterThanOrEqual(0)
			 );

		$runner = new TaskRunner();
		$runner->registerTask($mock);
		$runner->registerTask($mock);
		$runner->runAll(array('foo'));
	}
}
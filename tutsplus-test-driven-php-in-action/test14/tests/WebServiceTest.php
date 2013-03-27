<?php

class WebServiceTest extends PHPUnit_Framework_TestCase
{
	public function testRotate()
	{
		$this->assertEquals('cba', $this->makeRequest('rotate', 'abc'));
	}

	public function testLength()
	{
		$this->assertEquals(3, $this->makeRequest('length', 'abc'));
	}

	public function testNotExistingMethod()
	{
		$this->assertEquals('method not found', $this->makeRequest('foo', 'bar'));
	}

	protected function makeRequest($action, $param)
	{
		$curl = curl_init();
		$url  = sprintf('http://localhost/sandbox/tutsplus-test-driven-php-in-action/test14/?action=%s&param=%s', $action, $param);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($curl);

		curl_close($curl);
		return $data;
	}
}
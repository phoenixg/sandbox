<?php 

class Translator
{
	protected $data;

	public function __construct($data)
	{
		$this->data = $data;
	}

	public function getCount()
	{
		return count($this->data);
	}

	public function translate($key)
	{
		if(!isset($this->data[$key])) {
			return null;
		}
		return $this->data[$key];
	}
}
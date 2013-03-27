<?php
namespace Enlog\Handler;

// 因为可能是命名空间有点问题，所以我把interface的代码移到这里
interface HandlerInterface
{
	public function write($timestamp, $message);
}

class MemoryHandler implements HandlerInterface
{
	protected $store = array();

	public function write($timestamp, $message)
	{
		$this->store[] = sprintf('[%s] %s',$timestamp, $message);
	}
	
	public function getEntries()
	{
		return $this->store;
	}
}
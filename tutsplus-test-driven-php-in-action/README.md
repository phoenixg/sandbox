说明
===


### 安装PHPUnit

确保安装了PHP和PEAR，在shell中输入php和pear来验证是否已安装

安装PHPUnit： http://www.phpunit.de/manual/current/en/installation.html#installation.pear

我的安装方法：

	pear channel-discover pear.phpunit.de
	pear channel-discover components.ez.no
	pear install phpunit/PHP_CodeCoverage
	sudo pear uninstall phpunit/PHPUnit
	sudo pear install phpunit/PHPUnit


### 普通编程方式：

编写程序 -> 出现bug -> 修改程序

### TDD编程方式： 

编写测试 -> 失败 -> 编写程序直到测试通过 -> 清理









确保安装了PHP和PEAR，在shell中输入php和pear来验证是否已安装

安装PHPUnit： http://www.phpunit.de/manual/current/en/installation.html#installation.pear

我的安装方法：

	pear channel-discover pear.phpunit.de
	pear channel-discover components.ez.no
	pear install phpunit/PHP_CodeCoverage
	sudo pear uninstall phpunit/PHPUnit
	sudo pear install phpunit/PHPUnit

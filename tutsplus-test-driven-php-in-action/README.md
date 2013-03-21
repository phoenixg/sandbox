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


## 运行测试
### 命令行

完整的命令行选项见：phpunit --help

比如slim项目，有phpunit.xml.dist文件，可以直接运行phpunit

可以把测试报告输出成各种格式，比如: phpunit --log-junit test.xml

### Bootstrap






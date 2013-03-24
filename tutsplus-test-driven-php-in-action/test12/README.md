# 编码覆盖范围

测试程序的各项地方是否都被完整地写了测试案例，如果程序中有部分没有相应的测试，那么生成的报告就会在相应处显示红色,
对于检查还有哪个地方没有进行测试很有帮助。

	# 首先要安装xdebug才行
	sudo apt-get install php5-xdebug

	# 然后就可以输出测试结果
    phpunit --colors --coverage-html myfolder CalculatorTest.php

用浏览器打开 `myfolder` 查看结果


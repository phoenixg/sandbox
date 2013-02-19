Let’s TDD a Simple App in PHP
=========================

教程地址：http://net.tutsplus.com/tutorials/php/lets-tdd-a-simple-app-in-php/


TDD三大核心法则：
- 你不被允许编写任何生产性代码，除非测试失败，你便不得不修改代码
- 除了严格、必要地让单元测试失败的代码，你都不被允许编写。失败的意思是指编译或运行失败
- 除了严格、必要地让失败的测试变为成功的代码，你都不被允许编写


可以用newbie2-PHPUnit-composer的方法安装（http://net.tutsplus.com/tutorials/php/test-driven-development-in-php-first-steps/），也可以用下面的方法安装PHPUnit：

    `become root or use sudo`
    `pear upgrade PEAR`
    `enable auto discovery: pear config-set auto_discover 1`
    `install PHPUnit: pear install pear.phpunit.de/PHPUnit`

更多信息，参考：http://www.phpunit.de/manual/3.6/en/installation.html

这里就直接复制了newbie2-PHPUnit-composer的安装好的PHPUnit了。


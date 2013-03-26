# skeleton-generator

类似脚手架的东西，用命令生成测试文件。
    
    # 安装
    sudo pear install phpunit/PHPUnit_SkeletonGenerator

    # 如果出现Attempting fallback to https instead of http on channel phpunit的错误，则
    sudo pear channel-discover pear.phpunit.de

    # 使用
    cd src/
    phpunit-skelgen --test Translator

此时，生成了一个测试模板文件`TranslatorTest.php`，编辑它，添加：

    require './Translator.php';

此时，就可以运行测试了，根据实际需要修改测试文件。

## TDD

那么什么是TDD呢？ 此时，把`Translator.php`删除，我们通过`TranslatorTest.php`来反过来生成`Translator.php`，执行：
	
	# 这条命令不知道为什么不行，前面都可以的，不过反正这条命令不重要
    phpunit-skelgen --class TranslatorTest

这就是TDD编程方式。


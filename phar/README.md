# 使用Phar打包你的应用

教程来自于：http://phpmaster.com/packaging-your-apps-with-phar/

Phar（Php ARchive），类似于Java的JAR，PHP 5.3以上默认开启Phar extension。

默认地，Phar文件是只读的，但是要创建Phar文件，必须修改 `php.ini` 文件：

    phar.readonly = 0

将其设置成可写。

`src` 目录是程序的文件，`build` 目录是编译后的内容

## 创建PHAR文件

首先创建一个`create-phar.php`文件，然后使用命令`php create-phar.php`

TODO

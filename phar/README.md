# 使用Phar打包你的应用

教程来自于：http://phpmaster.com/packaging-your-apps-with-phar/

Phar（Php ARchive），类似于Java的JAR，PHP 5.3以上默认开启Phar extension。

默认地，Phar文件是只读的，但是要创建Phar文件，必须修改 `php.ini` 文件：

    phar.readonly = 0

将其设置成可写。特别注意，命令行的`php.ini`可能是另外一个，比如

    /etc/php5/cli/php.ini
    /etc/php5/apache2/php.ini

`src` 目录是程序的文件，`build` 目录是编译后的内容

## 创建PHAR文件

首先创建一个`create-phar.php`文件，然后使用命令`php create-phar.php`（似乎要在`myapp`目录下运行才行）。
该命令的脚本会创建`myapp.phar`和`config.ini`两个文件到`build`文件夹中。

这两个文件我现在移动到`production`目录中，然后`run.php`加载phar文件：
    
    require 'myapp.phar';

然后运行：

    # 必须在当前目录也就是`production`目录运行
    php run.php


综上，`src`里的东西是我要打包的应用程序，`build`是我打包后生成的东西（比如phar文件），`production`是部署的生产环境。

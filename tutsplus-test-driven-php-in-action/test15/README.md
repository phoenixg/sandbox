# 实战项目（Enlog）

注意：可以让`.gitignore`忽略下面这些东西，编辑该文件如下：

    vendor
    composer.phar

首先，安装`composer`。在创建完`composer.json`后，运行`php composer.phar install`，让它创建出`vendor`目录。

然后，创建一个`src`目录，继续在里面创建`Enlog`目录，创建一个`Logger.php`文件。
同样，创建一个`tests`目录，并在里面创建`Enlog`目录，创建一个`LoggerTest.php`文件。

这时，可以运行一下测试看看。

然后，到这里`http://www.phpunit.de/manual/current/en/appendixes.configuration.html`复制PHPUnit
的配置文件，将内容保存进`phpunit.xml.dist`文件，并作相应修改。

这时，可以运行一下测试看看，这次只需要运行`phpunit`即可。

然后，编辑`LoggerTest.php`测试文件的内容。为了不使用`require`，我们需要使用`bootstrap`，创建一个`bootstrap.php`文件，用它来加载`vendor`下面的`autoload.php`。然后，编辑`phpunit.xml.dist`文件，补充`bootstrap`的信息进去。

这时，可以运行一下测试看看，同样只需要运行`phpunit`即可。

继续编辑我们的测试文件。先创建两个对称的`Handler`目录和里面的文件。先写测试文件，再写类，这是TDD开发。一边写测试，一边写类，一边执行测试。

最后，写`index.php`。

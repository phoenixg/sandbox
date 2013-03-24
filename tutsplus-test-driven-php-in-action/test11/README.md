# bootstrap

以slim框架为例， slim/tests 文件夹里有一个bootstrap.php文件。
这样，就无需在每个测试类文件前require要加载的文件了，因为bootstrap会自动autoload依赖类库。

    phpunit RouteTest.php 会出错
    phpunit --bootstrap bootstrap.php RouteTest.php 现在应该这样来运行

每个项目的bootstrap文件内容都不同，需要根据项目情况自己写自动加载器(autoload或SPL之类的)，可以看看其他开源项目的bootstrap测试引导文件是怎么写的（比如monolog）。

# phpunit.xml.dist

在这个文件所在文件夹下直接运行`phpunit`，就会对该文件中的配置的路径下的所有测试文件进行测试。


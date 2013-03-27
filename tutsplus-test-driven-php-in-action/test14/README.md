# 测试web services

访问：

    # 输出 cba
    localhost/?action=rotate&param=abc

    # 输出 3
    localhost/?action=length&param=abc

其实就是测试的时候利用curl来请求而已。

运行测试：

    phpunit --colors tests/WebServiceTest.php


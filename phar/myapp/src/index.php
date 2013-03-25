<?php
// 程序访问入口
require_once "phar://myapp.phar/common.php";
$config = parse_ini_file("config.ini");
AppManager::run($config);

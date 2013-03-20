<?php
// 这个文件只是用于介绍 php:// 这个wrapper
// 作者介绍了一种不需要手动删除文件的测试类库：vfsStream

$handle = fopen('php://memory', 'a+');
fwrite($handle, 'some data');
fseek($handle, 0);
var_dump(fread($handle, 1024)); // 输出 some data
fclose($handle);







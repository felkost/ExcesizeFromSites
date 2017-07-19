<?php
//Узнайте каков объем памяти выделяется PHP-скрипту. Примечание: задание нужно сделать двумя способами —
// посмотреть в конфигурационном файле или получить параметр из php-функции.
//https://habrahabr.ru/post/161629/

$startMemory = 0;
$startMemory = memory_get_usage();

// Измеряемое
$testfile = "testScript.php";
include $testfile;

echo (memory_get_usage() - $startMemory) . ' bytes' . PHP_EOL;
?>
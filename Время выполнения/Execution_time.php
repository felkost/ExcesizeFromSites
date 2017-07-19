<?php
$start = microtime(true);
// тело скрипта
include '..\Обсяг памяті\testScript.php';
echo 'Время выполнения скрипта: '.(microtime(true) - $start).' сек.';
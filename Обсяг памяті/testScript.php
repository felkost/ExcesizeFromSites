<?php
//echo "Start\n";
function memoryUsage($usage, $base_memory_usage) {
    printf("Bytes diff: %d\n", $usage - $base_memory_usage);
}
function someBigValue() {
    return str_repeat('SOME BIG STRING', 1024);
}

$array = range(1, 100000);
?>
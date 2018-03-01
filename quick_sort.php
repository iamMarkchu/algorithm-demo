<?php
require_once './data.php';
$arr = generate_array(30, 100);
$loop_count = 1;
result_dump($loop_count, $arr);
$loop_count++;

$arr = quick_sort($arr);
result_dump($loop_count, $arr);

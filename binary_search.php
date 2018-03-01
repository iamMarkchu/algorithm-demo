<?php
require_once './data.php';
$arr = generate_array(3000, 10000);
$arr[] = 66;
$arr = quick_sort($arr);
result_dump(1, $arr);

$num = 66;
print_r(binary_search(66, $arr));

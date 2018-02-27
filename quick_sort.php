<?php
require_once './data.php';
$arr = generate_array(30, 100);
$loop_count = 1;
result_dump($loop_count, $arr);
$loop_count++;

$arr = quick_sort($arr);
result_dump($loop_count, $arr);

function quick_sort($arr) {
    $count = count($arr);
    if(1 >= $count) {
        return $arr;
    }

    $base_num = $arr[0]; //选择标的
    $left_array = array();//小于标的
    $right_array = array();//大于标的

    for($i = 1; $i < $count; $i++) {
        if($base_num > $arr[$i]) {
            $left_array[] = $arr[$i];
        } else {
            $right_array[] = $arr[$i];
        }
    }
    //再分别对左边和右边的数组，进行相同的排序处理方式
    $left_array = quick_sort($left_array);
    $right_array = quick_sort($right_array);
    echo '----'. PHP_EOL;
    //最终合并
    return array_merge($left_array, array($base_num), $right_array);
}

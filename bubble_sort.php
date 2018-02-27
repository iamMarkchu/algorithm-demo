<?php
/**
 * 冒泡排序
 */
require_once './data.php';
$arr = generate_array(30, 100);
$loop_count = 1;
result_dump($loop_count, $arr);
$loop_count++;

$arr = bubble_sort($arr);
result_dump($loop_count, $arr);


// 传入必须是 只包含整整数的数组
function bubble_sort($num_arr)
{
    global $loop_count;
    if(count($num_arr) == 0)
        return false;
    $count = count($num_arr);
    for ($i=0; $i < $count; $i++) {
        for ($j=0; $j < $count - 1 - $i; $j++) {
            if($num_arr[$j] > $num_arr[$j+1])
            {
                $tmp = $num_arr[$j];
                $num_arr[$j] = $num_arr[$j+1];
                $num_arr[$j+1] = $tmp;
            }
            result_dump($loop_count, $arr);
            // echo '-----' .PHP_EOL;
            $loop_count++;
        }
    }

    return $num_arr;
}


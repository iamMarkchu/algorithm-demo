<?php

// 生成一个仅包含数字的数组
function generate_array($count, $max_num)
{
  if(!is_numeric($count) || !$count)
    return false;
  if($count > $max_num)
    die('can\'t greater than '. $max_num);

  $get_count = 0;
  $arr = [];
  do {
    $num = mt_rand(0, $max_num);
    if(!in_array($num, $arr))
    {
      $arr[] = $num;
      $get_count++;
    }
  }while ($get_count < $count);

  return $arr;
}

// 导出排序结果
function result_dump($num, $arr)
{
    echo '第'. $num. '次：'. implode(' ', $arr). PHP_EOL;
}

// 冒泡排序
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
            // result_dump($loop_count, $arr);
            // echo '-----' .PHP_EOL;
            $loop_count++;
        }
    }

    return $num_arr;
}

// 快速排序
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
    // echo '----'. PHP_EOL;
    //最终合并
    return array_merge($left_array, array($base_num), $right_array);
}

// 二分法查找
function binary_search($num, $sorted_arr)
{
    $count = count($sorted_arr);
    if($count <= 1)
        return $sorted_arr;

    $start_index = 0;
    $end_index = $count - 1;
    while ($start_index <= $end_index) {
        echo '----'. PHP_EOL;
        // 查找中间值
        $test = $start_index + $end_index;
        if($test % 2)
            $mid_index = ($test - 1)/2;
        else
            $mid_index = $test/2;
        $mid_num = $sorted_arr[$mid_index];
        echo $mid_num . PHP_EOL;
        if($num > $mid_num)
        {
            $start_index = $mid_index + 1;
        }elseif ($num < $mid_num) {
            $end_index = $mid_index - 1;
        }else{
            return $mid_index;
        }
    }
    return false;
}

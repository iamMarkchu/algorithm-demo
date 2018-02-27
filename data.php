<?php
// 生成一个
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

function result_dump($num, $arr)
{
    echo '第'. $num. '次：'. implode(' ', $arr). PHP_EOL;
}

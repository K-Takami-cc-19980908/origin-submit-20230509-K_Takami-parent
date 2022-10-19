<?php

/*
問題1
for文、while文、foreach文を使用して、リスト内の数字の合計を計算する3つの関数を完成させてください。

$list1 = array(1,91,111,201);
$list2 = array(1,100,101,301);
$list3 = array(2000,2010,2030,2040);
*/

$list1 = array(1,91,111,201);
echo '<pre>';
print_r(getSumByFor($list1));
echo '<br>';
$list2 = array(1,100,101,301);
print_r(getSumByWhile($list2));
echo '<br>';
$list3 = array(2000,2010,2030,2040);
print_r(getSumByRecursive(0, $list3));
echo '</pre>';

function getSumByFor($list) {
  $sum = 0;  
  for($i=0; $i < count($list); $i++){
    $sum = $sum + $list[$i];
  }
  return $sum;
}

function getSumByWhile($list) {
  $sum = 0;
  $counter = 0;
  while($counter < count($list)){
    $sum = $sum + $list[$counter];
    $counter++;
  }
  return $sum;
}

function getSumByRecursive($sum, $list) {
  foreach($list as $num){
    $sum = $sum + $num;
  }
  return $sum;
}
<?php
/*
フィボナッチ数列の最初の100個を合計した数を表示してください。
フィボナッチ数列は、1つ目の数が0、2つ目の数が1、で3つ目からは前の2つの数を足した値になります。
例えばはじめの10個は0,1,1,2,3,5,8,13,21,34です。
*/
  $fibo = [0,1];
  for($i = 2; $i < 100; $i++){
    $fibo[] = $fibo[$i-2] + $fibo[$i-1];
  }
  print_r($fibo);
  echo "<br>";
  echo array_sum($fibo);
  var_dump(123);
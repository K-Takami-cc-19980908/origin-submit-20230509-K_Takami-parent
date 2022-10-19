<?php

/* 
問題2
配列dataとループを使って以下を表示してください。
名前は中村です。年齢は27歳です。
名前は田中です。年齢は25歳です。
名前は高橋です。年齢は29歳です。
名前は佐藤です。年齢は21歳です。
名前は鈴木です。年齢は31歳です。

$data = [
  ['name' => '中村', 'age' => 27],
  ['name' => '田中', 'age' => 25],
  ['name' => '高橋', 'age' => 29],
  ['name' => '佐藤', 'age' => 21],
  ['name' => '鈴木', 'age' => 31]
];

 */

$data = [
  ['name' => '中村', 'age' => 27],
  ['name' => '田中', 'age' => 25],
  ['name' => '高橋', 'age' => 29],
  ['name' => '佐藤', 'age' => 21],
  ['name' => '鈴木', 'age' => 31]
];

function selfIntroduction($data) {
  $text = '';
  foreach($data as $person){
    $text = $text . "名前は${person['name']}です。年齢は${person['age']}です。<br>";
  }
  return $text;
}

echo selfIntroduction($data) . "<br>";

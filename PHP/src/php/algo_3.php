<?php
 /*
 配列infoを使って以下の表示を実現してください。
 
フォーマット
□□さんの試験結果は以下になります。
国語は〇〇点で、成績は△△です。
数学は〇〇点で、成績は△△です。
英語は〇〇点で、成績は△△です。
理科は〇〇点で、成績は△△です。
社会は〇〇点で、成績は△△です。

評価基準
80点以上=優
60点以上=良
30点以上=可
30点未満=不可

落第
・不可の数が2個以上ある場合は、最後の一文に以下を追加してください。
「不可がXつあるので、落第です。」

・不可が1個以下かつ合計点数が200点未満の場合は、最後の一文に以下を追加してください。
「合計点数がZZ点なので、落第です。」


 */
$info = [
  [
    'name' => '米田',
    'point' => [
      '国語' => 40,
      '数学' => 30,
      '英語' => 30,
      '理科' => 20,
      '社会' => 30,
    ]
  ],
  [
    'name' => '麦田',
    'point' => [
      '国語' => 40,
      '数学' => 20,
      '英語' => 10,
      '理科' => 100,
      '社会' => 70,
    ]
  ],
  [
    'name' => '肉倉',
    'point' => [
      '国語' => 80,
      '数学' => 90,
      '英語' => 70,
      '理科' => 100,
      '社会' => 70,
    ]
  ]
];

function examEvaluation($info){
  $sentence = '';  
  foreach($info as $result){
    $sentence = "${result['name']}さんの試験結果は以下になります。<br>";
    $count_fall = 0;
    $sum = 0;
    foreach($result['point'] as $subject => $point){
      if($point >= 80){
        $evaluate = '優';
      }elseif($point >= 60){
        $evaluate = '良';
      }elseif($point >= 30){
        $evaluate = '可';
      }else{
        $evaluate = '不可';
        $count_fall++;
      }
      $sum = $sum + $point;
      $sentence = $sentence . "${subject}は${point}点で、成績は${evaluate}です。<br>";
    }
    if($count_fall >= 2){
        $sentence = $sentence . "不可が${count_fall}つあるので、落第です。<br>";
    }
    if($count_fall < 2 && $sum < 200){
        $sentence = $sentence . "合計点数が${sum}点なので、落第です。<br>";
    }
    echo $sentence . "<br>";
  }
}

examEvaluation($info);

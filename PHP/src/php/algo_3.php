 <!-- 
 配列infoを使って、以下の表示を実現してください。
 
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

米田さんの試験結果は以下になります。
国語は40点で、成績は可です。
数学は30点で、成績は可です。
英語は30点で、成績は可です。
理科は20点で、成績は不可です。
社会は30点で、成績は可です。
合計点数が150点なので、落第です。

麦田さんの試験結果は以下になります。
国語は40点で、成績は可です。
数学は20点で、成績は不可です。
英語は10点で、成績は不可です。
理科は100点で、成績は優です。
社会は70点で、成績は良です。
不可が2つあるので、落第です。

肉倉さんの試験結果は以下になります。
国語は80点で、成績は優です。
数学は90点で、成績は優です。
英語は70点で、成績は良です。
理科は100点で、成績は優です。
社会は70点で、成績は良です。

評価基準
80点以上=優
60点以上=良
30点以上=可
30点未満=不可

前提条件
各強化の点数は0~100点とする。

落第
・不可の数が2個以上ある場合は、最後の一文に以下を追加してください。
「不可がXつあるので、落第です。」

・不可が1個以下かつ合計点数が200点未満の場合は、最後の一文に以下を追加してください。
「合計点数がZZ点なので、落第です。」


-->
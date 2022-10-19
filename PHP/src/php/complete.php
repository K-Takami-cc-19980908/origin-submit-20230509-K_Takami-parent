<?php
  if($_SERVER["REQUEST_METHOD"] != "POST"){    
    header('Location: /php/index.php#inquiry_link');
  }
  $disp_age = [
    '20歳未満',
    '20~29歳',
    '30~39歳',
    '40~49歳',
    '50~59歳',
    '60~69歳',
    '70歳以上'
  ];
  $disp_gender = [
    '女性',
    '男性'
  ];

?>

<html>
  <head>
    <title>お問い合わせ-確認画面</title>
    <link rel="stylesheet" href="../CSS/lesson.css">
  </head>
  <body>
    <h2 class="sub_title" style="margin-top: 50px;">お問い合わせいただき、誠にありがとうございました。</h2>

          <a href="/php/index.php">トップへ戻る</a>

      </div>
  </body>
</html>
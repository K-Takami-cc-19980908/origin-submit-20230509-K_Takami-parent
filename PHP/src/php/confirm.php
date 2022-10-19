<?php
  if($_SERVER["REQUEST_METHOD"] != "POST"){    
    header('Location: /php/index.php#inquiry_link');
  }

  $disp_age = [
    0 => '20歳未満',
    1 => '20~29歳',
    2 => '30~39歳',
    3 => '40~49歳',
    4 => '50~59歳',
    5 => '60~69歳',
    6 => '70歳以上'
  ];

  $disp_gender = [
    '女性',
    '男性'
  ];

  // セッション開始
  session_start();
  $errors = [];
  $required = 'この項目は必須です。';
  $wrong_value = '値が不正です。';

  if(empty($_POST['name'])){
    $errors['name'] = $required;
  }

  if(mb_strlen($_POST['name']) > 30){
    $errors['name'] = '30文字以内で入力してください。';
  }

  if(!isset($_POST['age']) || $_POST['age'] === ''){
    $errors['age'] = $required;
  }

  if(!empty($_POST['age']) && !array_key_exists($_POST['age'], $disp_age)){
    $errors['age'] = $wrong_value;
  }

  if(!isset($_POST['gender']) || $_POST['gender'] === ''){
    $errors['gender'] = $required;
  }

  if(!empty($_POST['gender']) && !array_key_exists($_POST['gender'], $disp_gender)){
    $errors['gender'] = $wrong_value;
  }

  if(empty($_POST['content'])){
    $errors['content'] = $required;
  }

  if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    header('Location: /php/index.php#inquiry_link');
  }

?>

<html>
  <head>
    <title>お問い合わせ-確認画面</title>
    <link rel="stylesheet" href="../CSS/lesson.css">
  </head>
  <body>
    <div class="inquiry">
        <form id="main_form" method="post" action="/php/complete.php">
          <div class="form_contents">

            <!-- 名前 -->
            <div class="form_row">
              <div class="form_item">
                <strong class="form_item_text">お名前</strong>
              </div>
              <div class="form_content">
                <input type="hidden" name="name" value="<?= $_POST['name'] ?>">
                <p class=""><?= $_POST['name'] ?></p>
              </div>
            </div>
  
            <!-- 年齢 -->
            <div class="form_row">
              <div class="form_item">
                <strong class="form_item_text">ご年齢</strong>
              </div>
              <div class="form_content">
                <input type="hidden" name="age" value="<?= $_POST['age'] ?>">
                <p class=""><?= $disp_age[$_POST['age']] ?></p>
              </div>
            </div>
  
            <!-- 性別 -->
            <div class="form_row">
              <div class="form_item">
                <strong class="form_item_text">性別</strong>
              </div>
              <div class="form_content">
                <input type="hidden" name="gender" value="<?= $_POST['gender'] ?>">
                <p class=""><?= $disp_gender[$_POST['gender']] ?></p>
              </div>
            </div>
  
            <!-- 問い合わせ -->
            <div class="form_row">
              <div class="form_item">
                <strong class="form_item_text">お問い合わせ内容</strong>
              </div>
              <div class="form_content">
                <input type="hidden" name="content" value="<?= $_POST['content'] ?>">
                <p class=""><?= $_POST['content'] ?></p>
              </div>
            </div>
          </div>

          <p class="to_complete">上記の内容でお間違いなければ、送信ボタンを押してください。</p>

          <div class="button_div">
            <input class="form_button" type="submit" value="送信">
            <input class="form_button" type="button" onclick=history.back() value="戻る">
          </div>
        </form>
      </div>
  </body>
</html>
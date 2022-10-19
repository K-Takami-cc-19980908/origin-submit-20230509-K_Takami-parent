<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/system.ini');
  $title = 'PHP LESSON';  
  $disp_age = [
    0 => '20歳未満',
    1 => '20~29歳',
    2 => '30~39歳',
    3 => '40~49歳',
    4 => '50~59歳',
    5 => '60~69歳',
    6 => '70歳以上'
  ];

  $errors = '';
  // セッション開始
  session_start();
  if(!empty($_SESSION)){
    $errors = $_SESSION['errors'];
  }  
  // セッション終了
  session_destroy();

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>株式会社LWF</title>
    <link rel="stylesheet" href="../CSS/lesson.css">
    <!----- ビューポート---------->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  </head>
  <body>
    <!-- グローバルナビ -->
    <nav id="global_nav">
      <div class="logo_div">
        <p class="company_name">株式会社LWF</p>  
      </div>
      <div class="inner_grobal_nav">  
        <ul class="link_collection">
          <li class="grobal_link"><a href="#lwf_link" class="grobal_anchor">果物のある生活</a></li>
          <li class="grobal_link"><a href="#introduction_link" class="grobal_anchor">果物紹介</a></li>
          <li class="grobal_link"><a href="#inquiry_link" class="grobal_anchor">お問い合わせ</a></li>
        </ul>
      </div>  
    </nav>

    <!-- ハンバーガー -->
    <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <ul class="link_collection">
          <li class="grobal_link"><a href="#lwf_link" class="grobal_anchor">果物のある生活</a></li>
          <li class="grobal_link"><a href="#introduction_link" class="grobal_anchor">果物紹介</a></li>
          <li class="grobal_link"><a href="#inquiry_link" class="grobal_anchor">お問い合わせ</a></li>
        </ul>
      </div>
    </div>

    <!-- メインコンテンツ -->
    <div id="main"> 
      <!-- トップの画像とテキスト入るとこ -->
      <div class="top_area">
        <div class="text_box">
          <p class="top_text top_text_before">果物のある生活を</p>
        </div>
      </div>

      <!-- 健康・美容・贈品のセクション -->

      <h2 id="lwf_link" class="sub_title">果物のある生活</h3>

      <div class="content_1">
        <!-- 健康 -->
        <div class="content_child">
          <div class="title_bg">
            <h2 class="circle_title">健康</h2>
          </div>
          <div>
            <div class="explain_area">
              <h3 class="content_h3">健康的な生活の助けに</h3>
              <p class="content_text">いつの時代も、健康の悩みは尽きないものです。</p>
              <p class="content_text">食事、運動、睡眠などに気を遣っても、日々の生活に追われてなかなかリズムを守れないという方も多いのではないでしょうか。</p>
              <p class="content_text">そんなあなたにおススメしたいのが、食事に果物を一品足す習慣です。</p>
              <p class="content_text">認知機能を向上させる<strong>プラム</strong>、がんを抑える<strong>柑橘類</strong>、胃腸の不快感を和らげる<strong>キウイ</strong>など挙げればきりがないほどです。</p>
            </div>
          </div>
        </div>  
        <!-- 美容 -->
        <div class="content_child">
          <div class="title_bg">
            <h2 class="circle_title">美容</h2>
          </div>
          <div>
            <h3 class="content_h3">内側からキレイに</h3>
            <div class="explain_area">
              <p class="content_text">果物には美容効果もあります。</p>
              <p class="content_text">酸化はシミ・シワ・たるみの原因になりますが、<strong>ぶどう</strong>に含まれるアントシアンは体の酸化を防ぎます。</p>
              <p class="content_text">ビタミンCたっぷりの<strong>柿</strong>は、肌ツヤをよくするコラーゲンを作りやすくします。</p>
              <p class="content_text">知る人ぞ知る<strong>カムカム</strong>には、美白効果があるエラグ酸が含まれています。</p>
              <p class="content_text">色々な果物を調べてみるのも楽しめるかもしれません。</p>
            </div>
          </div>
        </div>
        <!-- 贈品 -->
        <div class="content_child">
          <div class="title_bg">
            <h2 class="circle_title">贈品</h2>
          </div>
          <div>
            <div class="explain_area">
              <h3 class="content_h3">友達から大切な人まで</h3>
              <p class="content_text">最近果物を食べましたか？</p>
              <p class="content_text">お祝い事や自分へのご褒美以外に、果物を食べる機会はあまりないと思います。</p>
              <p class="content_text">日常的に買う人でない限り、果物には少し特別感があるでしょう。</p>
              <p class="content_text">そんな果物を、あなたの友人や大切な人に贈ってみてはいかがですか。</p>
              <p class="content_text">何気ない日常でも、特別なお祝いでも、きっと喜ばれるでしょう。</p>
            </div>  
          </div>
        </div>
      </div> 

      <!-- みょーんって出るやつ、取り入れるかは未定 -->
      <!-- <div class="side_box"></div> -->

      <h2 id="introduction_link" class="sub_title">果物紹介</h3>

      <div class="gallery">

        <!-- オレンジ -->
        <div class="slider_div">
          <div class="photo_div">
            <img class="photo" src="../img/orange.jpg">
          </div>
          <div class="slider_content slider_content_1">
            <h3 class="content_title">オレンジ</h3>
            <h4 class="content_subtitle">効能</h4>
            <ul class="content_ul">
              <li class="slider_text">豊富なビタミンCには美容効果がある</li>
              <li class="slider_text">ビタミンの1種であるヘスペリジンは血液の流れを良くし、むくみを抑え代謝を良くする</li>
              <li class="slider_text">抗酸化作用のあるβカロテンを多く含み、がん予防効果がある</li>
            </ul>
            <h4 class="content_subtitle">良いオレンジの選び方</h4>
            <ul class="content_ul">
              <li class="slider_text">濃いオレンジ色でツヤがある</li>
              <li class="slider_text">持つと重量感がある</li>
              <li class="slider_text">皮が薄めでなめらか</li>
            </ul>
          </div>
        </div>

        <!-- ブドウ -->
        <div class="slider_div slider_div_hide">
          <div class="photo_div">
            <img class="photo" src="../img/grape.jpg">
          </div>
          <div class="slider_content slider_content_2">
            <h3 class="content_title">ブドウ</h3>
            <h4 class="content_subtitle">効能</h4>
            <ul class="content_ul">
              <li class="slider_text">眼精疲労に効果があるアントシアンを多く含む</li>
              <li class="slider_text">赤ブドウに含まれるレスベラトロールは発がん抑制作用があるとされる</li>
              <li class="slider_text">果実に多く含まれるブドウ糖には疲労回復効果がある</li>
            </ul>
            <h4 class="content_subtitle">良いブドウの選び方</h4>
            <ul class="content_ul">
              <li class="slider_text">軸がきれいな緑色をしている</li>
              <li class="slider_text">皮にブルーム(白い粉)がついている</li>
              <li class="slider_text">ハリがある</li>
            </ul>
          </div>
        </div>

        <!-- いちご -->
        <div class="slider_div slider_div_hide">
          <div class="photo_div">
            <img class="photo" src="../img/strawberry.jpg">
          </div>
          <div class="slider_content slider_content_3">
            <h3 class="content_title">イチゴ</h3>
            <h4 class="content_subtitle">効能</h4>
            <ul class="content_ul">
              <li class="slider_text">豊富なビタミンCには美容効果がある</li>
              <li class="slider_text">貧血予防になる葉酸を含む</li>
              <li class="slider_text">血糖値の上昇やコレステロールの吸収を抑えるペクチンを含む</li>
            </ul>
            <h4 class="content_subtitle">良いイチゴの選び方</h4>
            <ul class="content_ul">
              <li class="slider_text">ヘタがピンとしている</li>
              <li class="slider_text">果実の先端まで赤い</li>
              <li class="slider_text">甘い香りがする</li>
            </ul>
          </div>
        </div>

      </div>
      <!-- ギャラリーここまで -->

      <!-- ギャラリー選択エリア -->
      <div class="select_area">
        <div class="button_cover">
          <div class="select_button select_1"></div>
        </div>
        <div class="button_cover">
          <div class="select_button select_2"></div>
        </div>
        <div class="button_cover">  
          <div class="select_button select_3"></div>
        </div>  
      </div>
        
      <!-- お問い合わせハリボテ -->
      <h2 id="inquiry_link" class="sub_title">お問い合わせ</h3>

      <div class="inquiry">
        <form id="main_form" method="post" action="/php/confirm.php">
          <div class="form_contents">

            <!-- 名前 -->
            <div class="form_row">
              <div class="form_item">
                <strong class="form_item_text">お名前</strong>
              </div>
              <div class="form_content">
                <input class="form_input" type="text" name="name" required maxlength="30">
                <?php if(isset($errors['name'])) : ?>
                  <p class="error_msg"><?= $errors['name'] ;?></p>
                <?php endif; ?>
              </div>
            </div>
  
            <!-- 年齢 -->
            <div class="form_row">
              <div class="form_item">
                <strong class="form_item_text">ご年齢</strong>
              </div>
              <div class="form_content">
                <select class="form_select" type="select" name="age" required>
                  <?php foreach($disp_age as $key => $age) : ?>
                  <option value="<?= $key ?>"><?= $age ?></option>
                  <?php endforeach; ?>
                </select>  
                <?php if(isset($errors['age'])) : ?>
                  <p class="error_msg"><?= $errors['age'] ;?></p>
                <?php endif; ?>
              </div>
            </div>
  
            <!-- 性別 -->
            <div class="form_row">
              <div class="form_item">
                <strong class="form_item_text">性別</strong>
              </div>
              <div class="form_content">
                <input class="form_radio" id="radio1" type="radio" name="gender" value="1" required><label for="radio1">男性</label></radio>
                <br>
                <input class="form_radio" id="radio2" type="radio" name="gender" value="0"><label for="radio2">女性</label></radio>
                <?php if(isset($errors['gender'])) : ?>
                  <p class="error_msg"><?= $errors['gender'] ;?></p>
                <?php endif; ?>
              </div>
            </div>
  
            <!-- 問い合わせ -->
            <div class="form_row">
              <div class="form_item">
                <strong class="form_item_text">お問い合わせ内容</strong>
              </div>
              <div class="form_content">
                <textarea class="form_textarea" name="content" required></textarea>
                <?php if(isset($errors['content'])) : ?>
                  <p class="error_msg"><?= $errors['content'] ;?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <p class="confirm_text">上記の内容でお間違いなければ、送信ボタンを押してください。</p>

          <div class="button_div">
            <input class="form_button" type="submit" value="送信"> 
          </div>
        </form>
      </div>

      <footer>
        <p class="footer_text">2022 ©Carecon</p>
      </footer>
    </div>

    <script src="../JS/lesson.js"></script>
  </body>
</html>
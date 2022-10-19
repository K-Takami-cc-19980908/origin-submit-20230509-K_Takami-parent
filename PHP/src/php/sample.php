<?php
  const TAX = 0.08;
  $price1 = 100 * (1 + TAX);
  $price2 = 200 * (1 + TAX);
  $price3 = 300 * (1 + TAX);
  
  function sayHello(){
    echo 'hello!';
  }
  
  echo "金額は{$price3}円です。";
  
  echo PHP_VERSION;
  echo sayHello();
?>

<html>
  <p>今のPHPのバージョンは<?php echo PHP_VERSION ?>です。</p>
</html>

<?php
  $var_a = 'sample';
  $var_b = 'test';
  function printVarA(){
    echo $var_a;
  }
  function printVarB(){
    $var_b = 'test_function';
    echo $var_b;
  }
  function printVarC(){
      $var_c = 'example';
      echo $var_c;
  }
  
  echo $var_a;
  echo $var_b;
  echo printVarA();
  echo printVarB();
  echo printVarC();
  
  $array = [
    '名前' => '田中',
    '年齢' => '22',
    '趣味' => '散歩'  
  ];
  
  foreach($array as $key => $value){
    echo "{$key}は{$value}です。";
    echo '<br>'; 
  }
  
  for($i = 1; $i <= 100; $i++){
    if($i%2 !== 0){
      if($i%3 === 0){
        echo "{$i}!";
        echo '<br>';
      }else{
        echo $i;
        echo '<br>';
      }
    }
  }
  
  $array_people = [
    'tanaka' => [
      'age' => 25,
      'email' => 'tanaka@mail.com'
    ],
    'nakamura' => [
      'age' => 27,
      'email' => 'nakamura@mail.com'
    ],
    'takahashi' => [
      'age' => 29,
      'email' => 'takahashi@mail.com'
    ],
  ];
  
  foreach($array_people as $name => $person){
    if($name !== 'tanaka'){
      echo "年齢は{$person['age']}歳、メールアドレスは{$person['email']}です。";
      echo '<br>';
    }
  }
  
  class personClass{
    public $name;
    public $age;
  
    function __construct($name,$age){
      $this->name = $name;
      $this->age = $age;
    }
  
    public function selfIntroduction(){
      echo "私の名前は{$this->name}です。";
      echo "<br>";
      echo "年齢は{$this->age}です。";
    }
  }
  
  class sportsman extends personClass{
    public $sport;
  
    function __construct($name,$age,$sport){
      $this->name = $name;
      $this->age = $age;
      $this->sport = $sport;
    }
    public function selfIntroduction(){
      echo "<br>";
      echo "私の名前は{$this->name}です。";
      echo "<br>";
      echo "年齢は{$this->age}です。";
      echo "<br>";
      echo "競技は{$this->sport}";
    }
  }
  
  $nakamura = new personClass('中村',27);
  $nakamura->selfIntroduction();
  echo "<br>" . $nakamura->name;
  
  $sports = new sportsman('田中',25,'サッカー');
  $sports->selfIntroduction();
  
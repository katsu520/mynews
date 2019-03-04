<?php
//PHPの型と基本的な式を理解しよう
 $a = 3;
 $b = 7;

 echo $a + $b;

?>

<?php

  $array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];

  echo $array_month[7];

?>

<?php

  $hello = "Hello,";
  $name = "Katsuhiro";
  $world = "'s World!";

  echo $hello . $name . $world;

?>

<?php

  $tech_boost = "tech";
  $tech_boost . "boost";

  echo $tech_boost;

?>

<?php

  $calendar_2018 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
    ];

 echo $calendar_2018["December"];

?>

<?php
//プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう
  $name = "katsuhiro";
  if ($name == "katsuhiro"){
    echo "私は" . $name . "です";
  }else{
    echo "あなたの名前ではありません";
  }
?>

<?php
  for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
  }
    echo $total;
?>

<?php
   $fruits = array("grape", "banana", "orange", "lemon", "peach");
    foreach ($fruits as $fruit) {
      echo "要素は" . $fruit;
      echo "\n";
    }
?>

<?php
   $start = 1;
   $end = 100;
    for ($i=1; $i <= 100; $i++) {
      if ($i % 5 == 0) {
        echo $i;
        echo "\n";
      }
    }

?>


<?php
//関数を理解しよう
    function sum($max){
    $result = 0;
      for ($i = 0; $i <= $max; $i++) {
         $result *= 2;
      }
      return $result;
    }
    echo sum($max);
?>

<?php
    function f($a, $b){
    $result = 0;
      for ($i = 1; $i <= 10 ; $i++) {
        $result += $i;
      }
      return $a + $b;
    }
    echo f($a,$b);
?>

<?php
    function outputMultiplication($arr){
      $result = 1;
      foreach($arr as $a){
        $result *=  $a;
      }
      echo $result;
    }
      outputMultiplication(array(1, 3, 5, 7, 9));
      echo "\n";
 ?>

<?php
    function max_array($arr){
    $max_number = $arr[0];
      foreach ($arr as $a){
        echo $a;
      }
      return $max_number;
    }
      max_array(array(0,13));
?>

<?php
    $str = "<h1>strip_tags私は</h1>"."<p>将弘です</p>";
    //strip_tagsは文字列からタグ（HTML,PHP）を取り除く
      echo strip_tags($str);
?>

<?php
    $fruits = ['banana', 'grape'];
    //array_pushは配列に要素を追加する
    array_push($fruits, 'orange', 'lemon');

    print_r($fruits);
?>



<?php
    $fruits = ['banana', 'grape'];
    //array_mergeは連想配列を追加する
    $vegetables = array_merge($fruits,array('cabbage', 'cucumber'));

    print_r($vegetables);
?>

<?php
    echo '現在のUnixタイムスタンプ:'.time();
    //timeは現在の日時のUnixタイムスタンプを取得できる
?>

<?php
    $timestamp = mktime(0, 0, 0, 8, 1, 2017);
    //mktimeは指定した日時のUNIXタイムスタンプを取得できる
    echo $timestamp;
?>

<?php
    echo date('Y年m月d日 H時i分s秒');
    //dateは指定された日時を任意の形式でフォーマットし、日付文字列を返す
?>

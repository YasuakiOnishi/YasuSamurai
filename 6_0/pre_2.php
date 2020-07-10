<pre>
<?php
  $students[class1][0] = "はるき";
  $students[class1][1] = "かおる";
  $students[class1][2] = "はじめ";
  $students[class2][0] = "やすあき";
  $students[class2][1] = "ひかる";
  var_dump($students);

$students[class1][0] = array(
    "数学" => 90,
    "英語" => 80,
    "日本語" => 75
  );
  print_r($array);

$students[class1][1] = array(
    "数学" => 95,
    "英語" => 85,
    "日本語" => 100
  );
  print_r($array);

$students[class1][2] = array(
    "数学" => 60,
    "英語" => 90,
    "日本語" => 80
  );
  print_r($array);

$students[class2][0] = array(
    "数学" => 100,
    "英語" => 100,
    "日本語" => 100
  );
  print_r($array);

$students[class2][1] = array(
    "数学" => 90,
    "英語" => 50,
    "日本語" => 100
  );
  print_r($array);
  
  var_dump($students);  //結果を確認
?>
</pre>
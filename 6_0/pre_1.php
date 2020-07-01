<pre>
<?php
  $class1 = array("はるき", "かおる", "はじめ");
  $class2 = array("やすあき", "ひかる");
  $students = array($class1, $class2);

  $result = array(
      "数学" => 90,
      "英語" => 80,
      "日本語" => 75
    );
    print_r($array);

  $students = array(
      "はるき" => $result,
    );
    print_r($array);

  $students["かおる"] = array(
      "数学" => 95,
      "英語" => 85,
      "日本語" => 100
    );
    print_r($array);

  $students["はじめ"] = array(
      "数学" => 60,
      "英語" => 90,
      "日本語" => 80
    );
    print_r($array);

  $students["やすあき"] = array(
      "数学" => 100,
      "英語" => 100,
      "日本語" => 100
    );
    print_r($array);

  $students["ひかる"] = array(
      "数学" => 90,
      "英語" => 50,
      "日本語" => 100
    );
    print_r($array);
    
    var_dump($students);  //結果を確認
?>
</pre>
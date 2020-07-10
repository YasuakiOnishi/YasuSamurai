<pre>
<?php
//テスト結果
$result = array("math" => 90, "english" => 80);

//連想配列$friendsにテスト結果の連想配列を代入
$friends = array(
    "Haruki" => $result,
);
var_dump($friends); //結果を確認

//連想配列にキーを指定して追加し、値として連想配列を代入
$friends["Kaoru"] = array("math" => 95, "english" => 85);
var_dump($friends); //結果を確認
?>
</pre>
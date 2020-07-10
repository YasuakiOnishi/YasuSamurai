<pre>
<?php
//連想配列の作成
$result = array(
    "japanese" => 80,
    "math" => 75,
    "science" => 90,
    "history" => 85,
    "english" => 80,
);
var_dump($result); //連想配列の確認

//mathの点数を上書き
$result["math"] = 85;
var_dump($result);//連想配列の確認

//musicの点数を追加
$result["music"] = 90;
var_dump($result);//連想配列の確認
?>
</pre>
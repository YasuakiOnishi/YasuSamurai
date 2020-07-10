<pre>
<?php
  //配列の作成
  $friends = array("はるき", "かおる", "ひでと", "まさとし", "たかのり");
  array_push($friends, "ともゆき");
  var_dump($friends);//配列の中身を確認

  //キーが飛び飛びの値でもOK!
  array_push($friends, "ゆうた", "てつや");
  var_dump($friends);//配列の中身を確認
?>
</pre>
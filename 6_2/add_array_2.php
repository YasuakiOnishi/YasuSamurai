<pre>
<?php
  //配列の作成
  $friends = array("はるき", "かおる", "ひでと", "まさとし", "たかのり");
  $friends[5] = "ともゆき";//$friends[5]に「ともゆき」が代入される

  //キーが飛び飛びの値でもOK!
  $friends[8] = "ゆうた";
  var_dump($friends);//配列の中身を確認
?>
</pre>
<?php
  $fp = fopen("test.txt", "w");
  if ($fp){
      fwrite($fp, "書き込みテスト");
      fclose($fp);
      echo '書き込みました';
  } else {
        //ファイルがうまく作成できない等のエラー時、ここへ来る
  }
?>
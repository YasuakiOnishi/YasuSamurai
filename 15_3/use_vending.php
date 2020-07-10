<?php
  include 'vending_machine.php';//クラスの読み込み
  $vendor = new VendingMachine();
  echo $vendor->buy(180);//お買い上げありがとうございます
?>
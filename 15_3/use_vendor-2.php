<?php
  include 'vending_machine-2.php';//クラスの読み込み
  $vendor = new VendingMachine();
  echo $vendor->buy(180);
?>
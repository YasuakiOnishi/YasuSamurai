<?php
  echo vending_machine (120, "オレンジジュース");
  echo vending_machine (90, "アップルジュース");

  function vending_machine ($price, $juice_name){
      if ($price >= 120){
          return $juice_name . "のお買い上げありがとうございます！<br>";
      } else {
          return $juice_name . "の購入金額が不足しています…<br>";
      }
  }
?>
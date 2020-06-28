<?php
  function get_price($price){
      $price = $price * 1.08;
      return $price; //return $price*1.08としても良い
  }
  echo get_price(300); //324と表示される
?>
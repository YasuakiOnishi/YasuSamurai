<?php
  function default_demo($age, $name = "太朗", $sex ="男性"){
      echo "名前は" . $name . "です。年齢は" . $age . "です。性別は" . $sex . "です。";
  }

  default_demo(20);
  ?>
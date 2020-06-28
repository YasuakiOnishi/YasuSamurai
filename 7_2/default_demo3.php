<?php
  //順序は左からデフォルト値のない引数、デフフォルト値のある引数
  function default_demo($age, $name = "太朗"){
      echo "名前は" . $name . "です。年齢は" . $age . "です。";
  }

  default_demo(20);
  ?>
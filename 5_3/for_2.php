<?php
  $blog = mktime(15,30,0,2,10,2014);
  $blog = mktime(15,30,0,2,11,2014);
  $blog = mktime(15,30,0,2,12,2014);
  $blog = mktime(15,30,0,2,13,2014);
  $blog = mktime(15,30,0,2,14,2014);
  $blog = mktime(15,30,0,2,15,2014);
  $blog = mktime(15,30,0,2,16,2014);
  $blog = mktime(15,30,0,2,17,2014);
  $blog = mktime(15,30,0,2,18,2014);
  $blog = mktime(15,30,0,2,19,2014);

  for ($blog = mktime(15,30,0,2,10,2014); $blog = mktime(15,30,0,2,19,2014); $blog = $blog + 86400){
      echo $i . "<br>";
  }
?>
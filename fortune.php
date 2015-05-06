<?php

$filename = "fortune.txt";

$file = file($filename);

  srand((double)microtime()*1000000);
  
  while ($RandomRotator == "") 
  
  {
  
  $RandomRotator = ereg_replace("\n","",$file[rand(0,count($file))]);
  
  }

  print "$RandomRotator";
  
?>

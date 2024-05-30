<?php
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];
  $val=(array_change_key_case(array_flip($friends),CASE_LOWER));
  //array_reverse($val);
  //$rep=array_pop($val);
  
  echo "<pre>";
  print_r($val);
  echo "<pre>";
  
  
  /* Output
  Array
  (
    [as] => Ahmed Samy
    [mg] => Mahmoud Gamal
    [om] => Osama Mohamed
    [ag] => Ahmed Gamal
  )*/
?>
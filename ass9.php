<?php

$nums = [1, 2, 3, 4, 5, 6];



$nums=array_splice($nums,-5,-2);
echo "<pre>";
print_r($nums);
echo "<pre>";
/* Output
Array
(
  [0] => 2
  [1] => 3
  [2] => 4
)*/

?>
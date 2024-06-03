<?php
$chars = ["A", "B", "C"];

/* Output
Array
(
  [0] => A
  [1] => B
  [2] => C
  [3] => D
)*/

//METHODE1:

array_push($chars,"D");
echo "<pre>";
print_r($chars);
echo "<pre>";

//METHODE2:

$chars=array_merge($chars,array("D"));

echo "<pre>";
print_r($chars);
echo "<pre>";
//METHODE3:

$chars[] = "D";
echo "<pre>";
print_r($chars);
echo "<pre>";
//METHODE4:
array_splice($chars,count($chars),0,"D");//commencer par 3 
echo "<pre>";
print_r($chars);
echo "<pre>";

//mm le array_pad
// array_pad($letters, count($letters) + 1, "D");



?>
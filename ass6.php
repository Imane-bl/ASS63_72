<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

$merging=array_merge($chars,array_fill($zero,count($chars),$char[$zero]
/*,$char[$zero]
,$char[$zero]
,$char[$zero]*/
));


//$cinq=array($char);

echo count($chars);
echo "<pre>"; 
print_r($merging);
echo "<pre>";

/* Output
Array
(
  [0] => A
  [1] => B
  [2] => C
  [3] => D
  [4] => E
  [5] => @
  [6] => @
  [7] => @
  [8] => @
  [9] => @
)*/
?>
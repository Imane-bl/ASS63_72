<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

foreach($mix as $m){
    if(is_string($m)){ 
        array_shift($mix);
  
} };
  

    $mix=array_filter($mix,function($m){
    return $m % 2 !== 0;});
    $mix = array_values($mix); 

echo "<pre>";
print_r($mix);
echo "<pre>";

/* Output
Array
(
  [0] => 1
  [1] => 3
  [2] => 5
  [3] => 7
)*/

?>
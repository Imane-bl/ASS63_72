<?php 
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
$val=array_filter($mix,function($n){
    return  is_integer($n);
});

   $mix= array_merge($mix,$nums);
    print_r($mix);
    
//array_replace($nums,$val);

echo "<pre>";
print_r($mix);
echo "<pre>";

/* Output
Array
(
  [0] => 1
  [1] => 2
  [2] => 3
  [3] => 4
  [4] => 5
  [5] => 6
  [6] => 7
  [7] => 8
  [8] => 9
)*/
?>
<?php
$nums = [1, 2, 3, 4, 5, 6];

// Output
// Every Time The Array Elements Will Be Shuffled

for($i=0;$i<count($nums);$i++){
$rondo=rand(0,count($nums)-1);


$temp=$nums[$i];
$nums[$i]=$nums[$rondo];
$nums[$rondo]=$temp;
}

echo "<pre>";
print_r(($nums));
echo "<pre>";


/* Example 1
Array
(
  [0] => 5
  [1] => 1
  [2] => 6
  [3] => 2
  [4] => 4
  [5] => 3
)

// Example 2
Array
(
  [0] => 4
  [1] => 3
  [2] => 6
  [3] => 1
  [4] => 5
  [5] => 2
)*/


?>
<?php
$nums = [10, 100, -20, 50, 30];
$max=0;
foreach($nums as $a){
    if($a>$max){
        $max=$a;
    }
}
echo $max;
// Output
//100
?>
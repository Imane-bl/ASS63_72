<?php
$nums = [100, -10, 80, 50, 30];
$max=9999;
foreach($nums as $a){
    if($a<$max){
        $max=$a;
    }
}


echo $max;
// Output
//-10
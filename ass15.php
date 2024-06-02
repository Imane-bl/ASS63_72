<?php
$chars = ["o", "r", "e", "z", "l", "E"];

$len=0;
foreach($chars as $c){
    if($c<$max){
        $max=$c;
    }
}
// Output
//"Elzero"

echo $chars;
// Output
//100
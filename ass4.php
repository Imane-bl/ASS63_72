<?php

$nums = [10, 20, 30];

$res=array_reduce($nums,function($curr,$item){

return $curr+$item;
},0);

echo $res . "<br>";

$Pres=array_reduce($nums,fn($curr,$item)=>$curr+$item);
    
    echo $Pres;

/* Output
60
60*/
?>
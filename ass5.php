<?php
$nums = [5, 10, 20, 5, 30, 40];//notusing 5


$filter5=array_filter($nums,function($val){
    return $val!==5;
});
echo "<pre>";
print_r($filter5);
echo "<pre>";
$res=array_reduce($filter5,function($curr,$secend){
    return $curr+ $secend;
},0);



print_r($res);
/* Output
100*/

?>
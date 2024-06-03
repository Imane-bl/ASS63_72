<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo '<pre>';
//print_r(array_combine(array_change_key_case(array_flip($codes),CASE_LOWER),$means));
print_r(array_change_key_case(array_combine($codes,$means),CASE_LOWER));

//$val=array-
//print_r(array_($codes,$means));
echo '<pre>';
/* Output
Array
(
  [h] => HTML
  [c] => CSS
  [j] => JavaScript
)*/
<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
// Write Line Here
//$names=array_slice($names,2,5);


echo "<pre>";
print_r($names);
echo "<pre>";
echo current($names) . "<br>"; // "Sayed"

// Write Line Here
$names=array_reverse($names);

echo current($names) . "<br>"; // "Ali"

// Write Line Here
$names=array_reverse($names);
echo current($names) . "<br>"; // "Osama"

// Write Line Here
// Write Line Here
array_pop($names);
$names=array_reverse($names);



echo current($names) . "<br>"; // "Mahmoud"
?>
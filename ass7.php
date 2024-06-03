<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
// Write Line Here
//$names=array_slice($names,2,5);
next($names);
next($names);

echo "<pre>";
print_r($names);
echo "<pre>";
echo current($names) . "<br>"; // "Sayed"

// Write Line Here
//$names=array_reverse($names);
end($names);

echo current($names) . "<br>"; // "Ali"

// Write Line Here
//$names=array_reverse($names);
reset($names);

echo current($names) . "<br>"; // "Osama"

// Write Line Here
// Write Line Here
//rray_pop($names);
//$names=array_reverse($names);

/*
echo "<pre>";
print_r($names);
echo "<pre>";*/

end($names);
prev($names);
echo current($names) . "<br>"; // "Mahmoud"
?>
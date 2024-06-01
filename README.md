RESUME ABOUT WHAT I NEED TO SOLVE THESE ASSIGNMENTS :

String Functions
strlen() - Returns the length of a string.

php
echo strlen("Hello World!"); // Output: 12
strpos() - Finds the position of the first occurrence of a substring in a string.

php

echo strpos("Hello World!", "World"); // Output: 6
substr() - Returns a part of a string.

php

echo substr("Hello World!", 6); // Output: World!
str_replace() - Replaces all occurrences of a search string with a replacement string.

php

echo str_replace("World", "Dolly", "Hello World!"); // Output: Hello Dolly!
Array Functions
count() - Counts the elements in an array.

php

$array = array(1, 2, 3);
echo count($array); // Output: 3
array_merge() - Merges one or more arrays.

php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
in_array() - Checks if a value exists in an array.

php

$array = array("Mac", "NT", "Irix", "Linux");
echo in_array("Irix", $array); // Output: 1 (true)
Date and Time Functions
date() - Formats a local date and time.

php

echo date("Y-m-d H:i:s"); // Output: 2023-05-30 14:03:00
time() - Returns the current Unix timestamp.

php

echo time(); // Output: Unix timestamp
strtotime() - Parses an English textual datetime description into a Unix timestamp.

php

echo strtotime("now"); // Output: Unix timestamp
File Handling Functions
fopen() - Opens a file or URL.

php

$handle = fopen("test.txt", "r");
fread() - Reads from an open file.

php

$handle = fopen("test.txt", "r");
$contents = fread($handle, filesize("test.txt"));
fclose($handle);
fwrite() - Writes to an open file.

php

$handle = fopen("test.txt", "w");
fwrite($handle, "Hello World!");
fclose($handle);
file_get_contents() - Reads the entire file into a string.

php

$contents = file_get_contents("test.txt");
file_put_contents() - Writes a string to a file.

php

file_put_contents("test.txt", "Hello World!");
Mathematical Functions
abs() - Returns the absolute value of a number.

php

echo abs(-4.2); // Output: 4.2
round() - Rounds a floating-point number.

php

echo round(3.4); // Output: 3
rand() - Generates a random integer.

php

echo rand(1, 10); // Output: Random integer between 1 and 10
Miscellaneous Functions
isset() - Checks if a variable is set.

php

$var = 'PHP';
echo isset($var); // Output: 1 (true)
empty() - Checks if a variable is empty.

php

$var = '';
echo empty($var); // Output: 1 (true)
die() / exit() - Outputs a message and terminates the current script.

php

if (!file_exists("test.txt")) {
    die("File not found");
}
Regular Expression Functions
preg_match() - Performs a regular expression match.

php

if (preg_match("/php/i", "PHP is fun")) {
    echo "Match found!";
}
preg_replace() - Performs a regular expression search and replace.

php

echo preg_replace("/php/i", "JavaScript", "PHP is fun"); // Output: JavaScript is fun */

//----------------------------------------------------------------------


Array Creation and Manipulation
array() - Creates an array.

php

$array = array(1, 2, 3, 4);
array_push() - Adds one or more elements to the end of an array.

php

$array = array("red", "green");
array_push($array, "blue", "yellow");
// $array is now array("red", "green", "blue", "yellow")
array_pop() - Pops the element off the end of the array.

php

$array = array("red", "green", "blue");
$popped = array_pop($array); // $popped is "blue", $array is now array("red", "green")
array_shift() - Shifts an element off the beginning of the array.

php

$array = array("red", "green", "blue");
$shifted = array_shift($array); // $shifted is "red", $array is now array("green", "blue")
array_unshift() - Prepends one or more elements to the beginning of an array.

php

$array = array("green", "blue");
array_unshift($array, "red", "yellow");
// $array is now array("red", "yellow", "green", "blue")
Array Sorting
sort() - Sorts an array in ascending order.

php

$array = array(3, 2, 5, 1, 4);
sort($array); // $array is now array(1, 2, 3, 4, 5)
rsort() - Sorts an array in descending order.

php

$array = array(3, 2, 5, 1, 4);
rsort($array); // $array is now array(5, 4, 3, 2, 1)
asort() - Sorts an associative array in ascending order, according to the value.

php

$array = array("a" => 3, "b" => 2, "c" => 5);
asort($array); // $array is now array("b" => 2, "a" => 3, "c" => 5)
ksort() - Sorts an associative array in ascending order, according to the key.

php

$array = array("a" => 3, "c" => 2, "b" => 5);
ksort($array); // $array is now array("a" => 3, "b" => 5, "c" => 2)
usort() - Sorts an array by values using a user-defined comparison function.


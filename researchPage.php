<?php
/*
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

/*

Array Creation and Manipulation
array() - Creates an array.

php
Copier le code
$array = array(1, 2, 3, 4);
array_push() - Adds one or more elements to the end of an array.

php
Copier le code
$array = array("red", "green");
array_push($array, "blue", "yellow");
// $array is now array("red", "green", "blue", "yellow")
array_pop() - Pops the element off the end of the array.

php
Copier le code
$array = array("red", "green", "blue");
$popped = array_pop($array); // $popped is "blue", $array is now array("red", "green")
array_shift() - Shifts an element off the beginning of the array.

php
Copier le code
$array = array("red", "green", "blue");
$shifted = array_shift($array); // $shifted is "red", $array is now array("green", "blue")
array_unshift() - Prepends one or more elements to the beginning of an array.

php
Copier le code
$array = array("green", "blue");
array_unshift($array, "red", "yellow");
// $array is now array("red", "yellow", "green", "blue")
Array Sorting
sort() - Sorts an array in ascending order.

php
Copier le code
$array = array(3, 2, 5, 1, 4);
sort($array); // $array is now array(1, 2, 3, 4, 5)
rsort() - Sorts an array in descending order.

php
Copier le code
$array = array(3, 2, 5, 1, 4);
rsort($array); // $array is now array(5, 4, 3, 2, 1)
asort() - Sorts an associative array in ascending order, according to the value.

php
Copier le code
$array = array("a" => 3, "b" => 2, "c" => 5);
asort($array); // $array is now array("b" => 2, "a" => 3, "c" => 5)
ksort() - Sorts an associative array in ascending order, according to the key.

php
Copier le code
$array = array("a" => 3, "c" => 2, "b" => 5);
ksort($array); // $array is now array("a" => 3, "b" => 5, "c" => 2)
usort() - Sorts an array by values using a user-defined comparison function.

php
Copier le code
$array = array(3, 2, 5, 1, 4);
usort($array, function($a, $b) {
    return $a - $b;
});
// $array is now array(1, 2, 3, 4, 5)
Array Searching
in_array() - Checks if a value exists in an array.

php
Copier le code
$array = array("Mac", "NT", "Irix", "Linux");
$exists = in_array("Irix", $array); // $exists is true
array_search() - Searches an array for a value and returns the corresponding key if successful.

php
Copier le code
$array = array("a" => "red", "b" => "green", "c" => "blue");
$key = array_search("green", $array); // $key is "b"
array_key_exists() - Checks if the specified key exists in the array.

php
Copier le code
$array = array("a" => "red", "b" => "green", "c" => "blue");
$exists = array_key_exists("b", $array); // $exists is true
Array Utility Functions
array_keys() - Returns all the keys or a subset of the keys of an array.

php
Copier le code
$array = array("a" => "red", "b" => "green", "c" => "blue");
$keys = array_keys($array); // $keys is array("a", "b", "c")
array_values() - Returns all the values of an array.

php
Copier le code
$array = array("a" => "red", "b" => "green", "c" => "blue");
$values = array_values($array); // $values is array("red", "green", "blue")
array_flip() - Exchanges all keys with their associated values in an array.

php
Copier le code
$array = array("a" => "red", "b" => "green", "c" => "blue");
$flipped = array_flip($array); // $flipped is array("red" => "a", "green" => "b", "blue" => "c")
array_reverse() - Returns an array with elements in reverse order.

php
Copier le code
$array = array("a", "b", "c");
$reversed = array_reverse($array); // $reversed is array("c", "b", "a")
Array Merging and Slicing
array_merge() - Merges one or more arrays.

php
Copier le code
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
// $result is array("color" => "green", 0 => 2, 1 => 4, 2 => "a", 3 => "b", "shape" => "trapezoid", 4 => 4)
array_slice() - Extracts a slice of the array.

php
Copier le code
$array = array("a", "b", "c", "d", "e");
$slice = array_slice($array, 2, 2); // $slice is array("c", "d")
array_splice() - Removes a portion of the array and replaces it with something else.

php
Copier le code
$array = array("red", "green", "blue", "yellow");
array_splice($array, 2, 1, array("black", "maroon"));
// $array is now array("red", "green", "black", "maroon", "yellow")
Array Filtering and Mapping
array_filter() - Filters elements of an array using a callback function.

php
Copier le code
$array = array(1, 2, 3, 4, 5);
$even = array_filter($array, function($value) {
    return $value % 2 === 0;
});
// $even is array(2, 4)
array_map() - Applies a callback to the elements of the given arrays.

php
Copier le code
$array = array(1, 2, 3, 4, 5);
$squared = array_map(function($value) {
    return $value * $value;
}, $array);
// $squared is array(1, 4, 9, 16, 25)
Array Reduction
array_reduce() - Iteratively reduces the array to a single value using a callback function.
php
Copier le code
$array = array(1, 2, 3, 4, 5);
$sum = array_reduce($array, function($carry, $item) {
    return $carry + $item;
});
// $sum is 15
*/
//---------------------------------------------------------

 /* array_push()
The array_push() function adds one or more elements to the end of an array.

php
Copier le code
function array_push_custom(&$array, ...$values) {
    foreach ($values as $value) {
        $array[] = $value;
    }
    return count($array);
}

// Usage
$array = array("red", "green");
array_push_custom($array, "blue", "yellow");
print_r($array); // Output: Array ( [0] => red [1] => green [2] => blue [3] => yellow )
array_pop()
The array_pop() function removes the last element from an array.

php
Copier le code
function array_pop_custom(&$array) {
    if (empty($array)) {
        return null;
    }
    $value = $array[count($array) - 1];
    array_splice($array, -1);
    return $value;
}

// Usage
$array = array("red", "green", "blue");
$popped = array_pop_custom($array);
echo $popped; // Output: blue
print_r($array); // Output: Array ( [0] => red [1] => green )
array_shift()
The array_shift() function removes the first element from an array.

php
Copier le code
function array_shift_custom(&$array) {
    if (empty($array)) {
        return null;
    }
    $value = $array[0];
    array_splice($array, 0, 1);
    return $value;
}

// Usage
$array = array("red", "green", "blue");
$shifted = array_shift_custom($array);
echo $shifted; // Output: red
print_r($array); // Output: Array ( [0] => green [1] => blue )
array_unshift()
The array_unshift() function prepends one or more elements to the beginning of an array.

php
Copier le code
function array_unshift_custom(&$array, ...$values) {
    $array = array_merge($values, $array);
    return count($array);
}

// Usage
$array = array("green", "blue");
array_unshift_custom($array, "red", "yellow");
print_r($array); // Output: Array ( [0] => red [1] => yellow [2] => green [3] => blue )
array_merge()
The array_merge() function merges one or more arrays.

php
Copier le code
function array_merge_custom(...$arrays) {
    $merged = array();
    foreach ($arrays as $array) {
        foreach ($array as $key => $value) {
            $merged[] = $value;
        }
    }
    return $merged;
}

// Usage
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge_custom($array1, $array2);
print_r($result);
// Output: Array ( [0] => red [1] => 2 [2] => 4 [3] => a [4] => b [5] => green [6] => trapezoid [7] => 4 )
array_slice()
The array_slice() function extracts a slice of the array.

php
Copier le code
function array_slice_custom($array, $offset, $length = null) {
    $slice = array();
    $count = count($array);
    if ($offset < 0) {
        $offset = $count + $offset;
    }
    if (is_null($length)) {
        $length = $count - $offset;
    } elseif ($length < 0) {
        $length = $count + $length - $offset;
    }
    for ($i = $offset; $i < $offset + $length && $i < $count; $i++) {
        $slice[] = $array[$i];
    }
    return $slice;
}

// Usage
$array = array("a", "b", "c", "d", "e");
$slice = array_slice_custom($array, 2, 2);
print_r($slice); // Output: Array ( [0] => c [1] => d )
array_search()
The array_search() function searches an array for a value and returns the key if successful.

php
Copier le code
function array_search_custom($needle, $haystack) {
    foreach ($haystack as $key => $value) {
        if ($value === $needle) {
            return $key;
        }
    }
    return false;
}

// Usage
$array = array("a" => "red", "b" => "green", "c" => "blue");
$key = array_search_custom("green", $array);
echo $key; // Output: b
 */
//-----------------------------------------------------

/*
PHP Sort Functions
PHP provides several functions for sorting arrays. Here are the most commonly used ones:

sort()
Description: Sorts an array in ascending order.
Example:
php
Copier le code
$array = array(3, 2, 5, 1, 4);
sort($array);
print_r($array); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
rsort()
Description: Sorts an array in descending order.
Example:
php
Copier le code
$array = array(3, 2, 5, 1, 4);
rsort($array);
print_r($array); // Output: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
asort()
Description: Sorts an associative array in ascending order, according to the value.
Example:
php
Copier le code
$array = array("a" => 3, "b" => 2, "c" => 5);
asort($array);
print_r($array); // Output: Array ( [b] => 2 [a] => 3 [c] => 5 )
ksort()
Description: Sorts an associative array in ascending order, according to the key.
Example:
php
Copier le code
$array = array("a" => 3, "c" => 2, "b" => 5);
ksort($array);
print_r($array); // Output: Array ( [a] => 3 [b] => 5 [c] => 2 )
usort()
Description: Sorts an array by values using a user-defined comparison function.
Example:

php
Copier le code
$array = array(3, 2, 5, 1, 4);
usort($array, function($a, $b) {
    return $a - $b;
});
print_r($array); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
array_multisort()
Description: Sorts multiple or multi-dimensional arrays.
Example:
php
Copier le code
$array1 = array(3, 2, 5, 1, 4);
$array2 = array("three", "two", "five", "one", "four");
array_multisort($array1, $array2);
print_r($array1); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
print_r($array2); // Output: Array ( [0] => one [1] => two [2] =
 */
/*$numbers = array(1, 2, 3, 4, 5);
$squared = array_map(function($n) {
    return $n * $n;
}, $numbers);
print_r($squared); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
Example 2: Using array_filter()
Description: Filters elements of an array using a callback function.
Example:

php

$numbers = array(1, 2, 3, 4, 5, 6);
$evenNumbers = array_filter($numbers, function($n) {
    return $n % 2 === 0;
});
print_r($evenNumbers); // Output: Array ( [1] => 2 [3] => 4 [5] => 6 )
Example 3: Using array_reduce()
Description: Iteratively reduces the array to a single value using a callback function.
Example:
php

$numbers = array(1, 2, 3, 4, 5);
$sum = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
}, 0);
echo $sum; // Output: 15*/

?>
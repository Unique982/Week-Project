<?php

// Define an array
$fruits = array("apple", "banana", "orange");

// array_push() - Add one or more elements to the end of an array
array_push($fruits, "mango", "grape");
// echo "<pre>";
echo "After array_push(): ";
print_r($fruits);
// echo "</pre>";
echo "<br/>";

// array_shift() - Shift an element off the beginning of array
$shifted = array_shift($fruits);
echo "After array_shift(): ";
print_r($fruits);
echo "<br/>";
// array_search() - Search an array for a value and return the corresponding key if successful
$key = array_search("banana", $fruits);
echo "Key of 'banana': " . $key . "\n";
echo "<br/>";
// array_unshift() - Prepend one or more elements to the beginning of an array
array_unshift($fruits, "kiwi");
echo "After array_unshift(): ";
print_r($fruits);
echo "<br/>";
// sort() - Sort an array
sort($fruits);
echo "After sort(): ";
print_r($fruits);
echo "<br/>";
// asort() - Sort an array and maintain index association
asort($fruits);
echo "After asort(): ";
print_r($fruits);
echo "<br/>";
// ksort() - Sort an array by key
ksort($fruits);
echo "After ksort(): ";
print_r($fruits);
echo "<br/>";
// rsort() - Sort an array in reverse order
rsort($fruits);
echo "After rsort(): ";
print_r($fruits);
echo "<br/>";
// arsort() - Sort an array in reverse order and maintain index association
arsort($fruits);
echo "After arsort(): ";
print_r($fruits);
echo "<br/>";
// krsort() - Sort an array by key in reverse order
krsort($fruits);
echo "After krsort(): ";
print_r($fruits);
echo "<br/>";
// Using foreach instead of each() to get the current key and value
foreach ($fruits as $key => $value) {
    echo $key . ' => ' . $value . "\n";
}

// current() - Return the current element in an array
echo "Current element: " . current($fruits) . "\n";
echo "<br/>";
// reset() - Set the internal pointer of an array to its first element
reset($fruits);
echo "After reset(), first element: " . current($fruits) . "\n";
echo "<br/>";
// end() - Set the internal pointer of an array to its last element
end($fruits);
echo "After end(), last element: " . current($fruits) . "\n";
echo "<br/>";
// pos() is an alias of current()
echo "Position (using pos()): " . pos($fruits) . "\n";
echo "<br/>";
// prev() - Rewind the internal array pointer
prev($fruits);
echo "After prev(), current element: " . current($fruits) . "\n";
echo "<br/>";
// shuffle() - Shuffle an array
shuffle($fruits);
echo "After shuffle(): ";
print_r($fruits);

// array_reverse() - Return an array with elements in reverse order
$reversed = array_reverse($fruits);
echo "Reversed array: ";
print_r($reversed);
echo "<br>";
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 17 E</p>";
?>

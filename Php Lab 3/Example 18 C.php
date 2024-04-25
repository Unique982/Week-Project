<?php

// Define a function with one default argument
function Strings($string1, $string2 = " World") {
    return $string1 . $string2;
}

// Call the function with both arguments
echo Strings("Hello", " Sathi") . "<br>";

// Call the function with only the non-default argument
echo Strings("Hello");
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 18 C</p>";
?>

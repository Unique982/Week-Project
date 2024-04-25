<?php
// Function to check age
function checkAge($age) {
    if ($age < 18) {
        return "You are restricted";
    } else {
        return "Welcome";
    }
}

// Test the function
$age = 10; // You can change the age to test different cases
$message = checkAge($age);
echo $message;
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 18 A</p>";
?>

<!-- d)	Write a PHP program containing associative array and illustrate 
the use of for loop and foreach loop in accessing arrays.   -->
<?php

// Define an associative array
$users = [
    "Name" => 28,
    "age" => 34
   
];

echo "Accessing associative array using foreach loop:\n";
// Using foreach loop to iterate through the associative array
foreach ($users as $name => $age) {
    echo "Name: $name, Age: $age\n";
}

echo "<br>";

echo "Accessing associative array using for loop:\n";
// Getting the keys of the associative array
$keys = array_keys($users);
// Using for loop to iterate through the keys of the associative array
for ($i = 0; $i < count($keys); $i++) {
    // Accessing each element of the associative array by its key
    $name = $keys[$i];
    $age = $users[$name];
    echo "Name: $name, Age: $age\n";
}
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 17 D</p>";

?>

<?php 
$a = array(3,5,8,1,10,10,18);

function sumSecondLargestAndSmallest($a) {
    // Sort the array in ascending order
    sort($a);
    
    // Calculate the sum of the second smallest and second largest elements
    $sum = $a[1] + $a[count($a) - 2];
    
    // Print the sum
    echo "Sum of the second largest and smallest elements: " . $sum;
}
sumSecondLargestAndSmallest($a);
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 18 B</p>";
?>
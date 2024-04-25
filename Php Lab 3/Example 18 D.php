<?php 
// Pass by value
 $n = 2;
 echo "value of n = $n <br/>";
 function add($a){
    echo "value inside function $a <br/>";
    $a =4;
echo "Value inside function $a <br/>";
}
add($n);
echo "Value OF N = $n <br/>";


//  Pass by Reference
     $n =2;
     echo "value of n = $n <br/>";
     function test($b){
        echo "value inside function $b <br/>";
 $n = 4;
 echo "Value inside function $b <br/>";
     }
     test($n);
     echo "Value of n = $n <br/>";
     echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 18 D</p>";
?>
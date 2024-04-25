<!-- c)	Write a PHP program to demonstrate different ways
 to create arrays and display them using var_dump() and print_r() functions -->

  <!-- print_r()
     This function is used to display information in a way that's readable by humans.
  synatx: print_r($a)->array name here
  return can be true or false. by default there is false
  when return is set  true, print_r() will return the information -->
  <!-- var_dump() 
var_dump() Function: The var_dump() function is used to dump information about a variable that displays structured information such as the type and value of the given variable.

Syntax:void var_dump ($expression)

    $expression: It can be one single variable or an expression containing several space-separated variables of any type.

Return Value: This function has no return type.
-->
 
 
 <?php 
 $b = array("Ram"=>150,"sita"=>200,"Gita"=>100);
 print_r($b,true);// return value store echo $b;
 $a = array("Ram"=>150,"sita"=>200,"Gita"=>100);
 echo "<pre>";
 print_r($a);
 echo "</pre>";// output-> Array( [Ram] => 150 [sita] => 200 [Gita] => 100)
 
 //var_dump Exa
 $new = ['a','b','c'];
  echo "<pre>";
  var_dump($new);
  echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 17 C</p>";
 
 ?>
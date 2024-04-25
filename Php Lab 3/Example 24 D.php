<!-- d)	Write a PHP program to delete a  record from a table in MySQL  -->
<?php
$servername = "localhost:3307";
$username = "root";
$password ="";
$dbname = "bcathird";
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Could not connect: " . mysqli_connect_error());

   }

   // start code 
   $sql= "DELETE FROM lab3 WHERE id=2";
   $result = mysqli_query($conn,$sql);
   if($result){
    echo "Record deleted successfully";
   }
   else{
   echo"Unsuccessful";
   }
   echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 24 D</p>";
?>
<!-- e)	Write a PHP program to display the detail of given  record ( like: record_no, id) from a table in MySQL  -->
<?php

$servername = "localhost:3307";
$username = "root";
$password ="";
$dbname = "bcathird";
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Could not connect: " . mysqli_connect_error());

   }
   // Start code 
   $sql = "SELECT * FROM lab3 WHERE id=5";
   $result = mysqli_query($conn,$sql);
   if($result){
    while($row =mysqli_fetch_assoc($result)){
        echo "ID: ".$row['id']."<br>";
        echo "Name: ".$row['name']."<br>";
        echo "Email: ".$row['email']."<br>";
        echo "Address: ".$row['address']."<br>";
        echo "<br>";
    }
   }
   echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 24 E</p>";

?>
<?php 
//b)	Write a PHP program to read all  data from a table in MySQL 
$servername = "localhost:3307";
$username = "root";
$password ="";
$dbname = "bcathird";
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Could not connect: " . mysqli_connect_error());

   }
   // code start Q.N 24 B
   $sql = "SELECT * FROM lab3";
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
   echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 24 B</p>";
?>
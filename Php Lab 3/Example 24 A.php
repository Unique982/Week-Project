<?php 
$servername = "localhost:3307";
$username = "root";
$password ="";
$dbname = "bcathird";
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Could not connect: " . mysqli_connect_error());

   }

//    Q.N a) Write a PHP program to insert some data into a table in MySQL 
$sql = "INSERT INTO lab3 (name,email,address) VALUES ('Unique Neupane','testing123@.com','DANG')";
if(mysqli_query($conn,$sql)){
    echo "New record created successfully";
}else{
    echo "New record not created successfully";
}
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 24 A</p>";
?>
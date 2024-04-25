<!-- f)	Write PHP program to fetch records from two tables in MySQL using subqueries.  -->
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
   $sql ="SELECT * FROM lab3 WHERE id IN (SELECT id FROM script)";
   $rseult = mysqli_query($conn,$sql);
   if($rseult){
 while($row = mysqli_fetch_assoc($rseult)){
     echo "ID: ".$row['id']."<br>";
     echo "Name: ".$row['name']."<br>";
     echo "Email: ".$row['email']."<br>";
     echo "Address: ".$row['address']."<br>";
     echo "<br>";
 }
   }
   echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 24 F</p>";


?>
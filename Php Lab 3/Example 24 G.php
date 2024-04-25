<!-- g)	Write PHP program to fetch records from two tables in MySQL using SQL joins.  -->
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
$sql = "SELECT lab3.id,lab3.name,lab3.address,script.phone FROM lab3
LEFT JOIN script ON lab3.id = script.id";
$result = mysqli_query($conn,$sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        echo "ID: ".$row['id']."<br>";
        echo "Name: ".$row['name']."<br>";
        echo "Phone: ".$row['phone']."<br>";
        echo "Address: ".$row['address']."<br>";
        echo "<br>";
    }
}
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 24 G</p>";


?>
<!-- c)	Write a PHP program to update  a record  of a  table in MySQL  -->
<?Php
$servername = "localhost:3307";
$username = "root";
$password ="";
$dbname = "bcathird";
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Could not connect: " . mysqli_connect_error());

   }
   $sql = "UPDATE lab3 SET name='Khemraj Neupane' WHERE id='1'";
   $result = mysqli_query($conn,$sql);
   if($result){
       echo "Record updated successfully";
   }else{
    echo "Record not updated ";
   }
   echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 24 C</p>";
?>
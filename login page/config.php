<?php
session_start();
$servername = "localhost";
$username = "root";
$password ="";
$dbname= "dbtesting";
$conn =  mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    
    echo "Connection failed: ".mysqli_connect_error();
    
}

?>
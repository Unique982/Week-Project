<?php 
require 'config.php';
if(!empty($_SESSION['id'])){
    header("location :index.php");
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform = $_POST['conform'];
    $dulicate = mysqli_query($conn, "SELECT * FROM `reg` WHERE username ='$username' OR email = '$email'");
    if(mysqli_num_rows($dulicate) > 0){
        echo "<script>alert('Username or Email has Alerady taken');</script>";
    }
else{
    if($password == $conform){
        $query = "INSERT INTO reg(name,username,email,password,conform) VALUES ('$name','$username','$email','$password','$conform')"; 
         mysqli_query($conn,$query);
        echo "<script> alert('Registration successful'); </script>";
        

    }
    else{
        echo "<script> alert ('Pasword does not match');</script>";
    }
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Reg</title>
</head>
<body>
    <form action="" method="POST" autocomplete="off">
      Name: <input type="text" name="name" placeholder="enter Your name"><br/>
      Username: <input type="text" name="username" placeholder="Enter our user name"><br/>
      email : <input type="email" name="email" placeholder="emter your email"><br/>
      password : <input type="password" name="password" placeholder="Enter your password"><br/>
      conform pw :  <input type="password" name="conform" placeholder="Enter your cm pw"><br/>
      <input type="submit" name="submit" value="submit"><br/>
     <a href="login.php">Login</a>
    </form>
  
</body>
</html>

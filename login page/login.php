<?php 

require 'config.php';
if(isset($_POST['submit'])){
  $usernameemail = $_POST['usernameemail'];
  $password = $_POST['password'];
  $result = mysqli_query($conn,"SELECT * FROM `reg` WHERE username ='$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
   if($password ==$row ["password"]){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $row["id"];
    header("Location: index.php");

   }
   else{
    echo "<script>alert('Wroong Password');</script>";
   }
 
}
else{
  echo "<script>alert('User Not Registered ');</>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="reg.php">reg</a></li>

            <li><a href="login.php">logout</a></li>

        </ul>
    </nav>
    <section class="login">
      <form action="" method="POST" autocomplete="off">
        Username/Email: <input type="text" name="usernameemail" placeholder="enter your name"></br>
        password: <input type="password" name="password" placeholder="enter password"></br>
        <input type="submit" name="submit" value="submit">
      </form>
      <a href="reg.php"></a>
    </section>
    
</body>
</html>

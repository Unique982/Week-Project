<?php
// Initialize variables to store errors
$nameErr = $usernameErr = $ageErr = $passwordErr = $cpasswordErr = "";
$name = $username = $age = $password = $cpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // Username validation
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        if (strlen($username) < 8 || !ctype_alpha($username[0])) {
            $usernameErr = "Must be at least 8 characters long and start with a letter";
        }
    }

    // Age validation
    if (empty($_POST["age"])) {
        $ageErr = "Age is required";
    } else {
        $age = test_input($_POST["age"]);
        if ($age < 18) {
            $ageErr = "You must be at least 18 years old";
        }
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    // Confirm password validation
    if (empty($_POST["cpassword"])) {
        $cpasswordErr = "Confirm password is required";
    } else {
        $cpassword = test_input($_POST["cpassword"]);
        if ($password !== $cpassword) {
            $cpasswordErr = "Passwords do not match";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXample</title>
</head>
<body>
    <form action="" method="POST">
        <div class="input-box">
            <label for="">Name:</label>
            <input type="text" name="name">
            <span class="name" style="color:red"><?php echo $nameErr ?></span>
        </div>
        <div class="input-box">
            <label for="">Username</label>
        <input type="text" name="username">
        <span class="error"style="color:red"><?php echo $usernameErr ?></span>
    </div>

        <div class="input-box">
            <label for="">Age</label>
        <input type="number" name="age">
        <span class="error"style="color:red"><?php echo $ageErr ?></span>
    </div>
        <div class="input-box">
            <label for="">Password</label>
        <input type="text" name="password">
        <span class="error"style="color:red"><?php echo $passwordErr ?></span>
    </div>
        <div class="input-box">
            <label for="">Confirm Password</label>
        <input type="text" name="cpassword">
        <span class="error"style="color:red"><?php echo $cpasswordErr ?></span>
    </div>
    <input type="submit" name="reg" value="Register">
    </form>
    <p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 20</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table of Larger Number</title>
</head>
<body>
    <form action="" method="POST">
        <div class="input-box">
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" id="num1" required>
        </div>
        <div class="input-box">
            <label for="num2">Number 2:</label>
            <input type="number" name="num2" id="num2" required>
        </div>
        <input type="submit" name="submit" Value="Mul">
    </form>

<?php 
if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Determine the larger number
    $largerNum = max($num1, $num2);
  
    echo "Multiplication Table for $largerNum";
    for ($i = 1; $i <= 10; $i++) {
        $result = $largerNum * $i;
        echo "$largerNum * $i = $result<br>";
    }
}
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 17 A</p>";
?>
</body>
</html>

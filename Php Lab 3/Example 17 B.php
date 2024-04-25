<!-- b)	Create a html form to take two numbers form text fields and an operator (among +, -, *, /, %) from combo box and display the result on a label when user press a submit button by using switch-case-default syntax in PHP.   -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div class="input-box">
            <label>Enter Number:</label>
            <input type="number" name="num1">
        </div>
        <div class="input-box">
            <label>Enter second Number:</label>
            <input type="number" name="num2">
        </div>
        <div class="input-box">
            <label>Operator:</label>
            <select name="operator" id="oper">
                <option value="+">Add</option>
                <option value="-">Sub</option>
                <option value="/">Div</option>
                <option value="%">Mod</option>
            </select>
           
        </div>
        <input type="submit" name="example" value="Submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['example'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $sum ='';
    switch($operator){
        case '+':
           $sum = $num1 + $num2;
           break;
           case '-':
            $sum = $num1 - $num2;
            break;
            case '/':
                $sum = $num1 / $num2;
                break;
                case '%':
                    $sum = $num1 % $num2;
                    break;
                    default:
                    $sum ="Enter valid number ";
                    break;
    }
    echo "<label>Total:$sum</label>";
 }
echo "<p>Name:Khemraj Neupane<br> Roll No: 19<br> Lab 3 :Q.N 17 B</p>";

?>
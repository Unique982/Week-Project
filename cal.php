<?php
if(isset($_POST['calculate'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    switch($operator){
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'sub':
            $result = $num1 - $num2;
            break;
        case 'mul':
            $result = $num1 * $num2;
            break;
        case 'div':
            $result = $num1 / $num2;
            break;
        case 'mod':
            $result = $num1 % $num2;
            break;
        default:
            $result = 0;
            break;
    
} echo $result;
}
?>
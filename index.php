<!-- php code  -->
<?php
$result = 0;
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
    
} 
}
?>
<!-- php code end -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculate</title>
</head>
<style>
    *{
       margin: 0 px;
       padding: 0 px;
       font-family: sans-serif;
       box-sizing: border-box;
       outline: none;
    }
    body{
        
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         flex-direction: column;
         text-align: center;
    }
    .container{
        width: 500px;
        height: 500px;
        border: 1px solid black;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        background: gray;
    }h2{
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 30px;
        text-transform: uppercase;
       
        text-align: center;
        color: #000;
       
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input{
        width: 100%;
        height: 40px;
        border: 1px solid black;
        border-radius: 5px;
        padding: 0 10px;
        margin-bottom: 20px;
        outline: none;
        font-size: 16px;
        font-weight: 600;
        
    }
    select{
        width: 100%;
        height: 40px;
        border: 1px solid black;
        border-radius: 5px;
        padding: 0 10px;
        margin-bottom: 20px;
        outline: none;
        font-size: 16px;
        
    }
    .btn{
        width: 100%;
        height: 40px;
        border: 1px solid black;
        border-radius: 5px;
        padding: 0 10px;
        margin-bottom: 20px;
        outline: none;
        font-size: 16px;
        cursor: pointer;
        background: #000;
        color: white;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-align: center;
        transition: all 0.3s ease;
    }
  .btn:hover{
        background: #fff;
        color: #000;
    }
   
    </style>
<body>
    <div class="container">
        <h2>Simple Calculator</h2>
   <form action="index.php" method="POST">
 
    <input type="text" name="num1" placeholder="Enter Frist Number"><br>
    <input type="text" name="num2" placeholder="Enter Second number"><br>

    <select name="operator">
    <option>Please Select Number</option>
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
        <option value="mod">%</option>
        <!-- <option value="pow">^</option>
        <option value="sqrt">√</option>
        <option value="sin">sin</option>
        <option value="cos">cos</option>
        <option value="tan">tan</option> -->
    </select>
    <input type="submit" name="calculate" value="calculator" class="btn">
      <h2>Your Answer: 
        <?php echo $result; ?>
    </h2>
   </form>
    </div>
    <footer>
        <p>Copyright &copy; 2080</p>
        <p> Sample Calculator Design by Unique Neupane (KhemRaj Neupane)</p>
    </footer>
</body>
</html>

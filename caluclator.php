<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculate</title>
</head>
<body>
   <form action="cal.php" method="POST">
    <input type="text" name="num1"><br>
    <input type="text" name="num2"><br>
    <select name="operator">
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
    <input type="submit" name="calculate" value="calculator">

   </form>
</body>
</html>

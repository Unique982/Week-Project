
<!-- f. Create form to take values needed for a bio-data and generate a bio-data in pdf
format using PHP. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Biodata PDF</title>
</head>
<body>
    <h2>Enter Your Biodata</h2>
    <form action="pdf.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age"><br><br>
        
        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="50"></textarea><br><br>
        
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone"><br><br>
        
        <input type="submit" value="Generate PDF">
    </form>
</body>
</html>

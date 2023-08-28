<?php
include "datbase_conn.php";
if(isset($_POST['submit'])){
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $price = $_POST['price'];
    $query = "INSERT INTO `schoolcrud` (`id`, `bookname`, `author`, `publisher`, `price`)  VALUES(NULL, '$bookname','$author','$publisher','$price')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: Crud.php?msg=New record created successfully");
     } else {
        echo "Failed: " . mysqli_error($conn);
     }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    } 
    body{
        background-color: rgb(238, 238, 238);
        display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         flex-direction: column;
         text-align: center;
    }
.container{
  
    background-color: white;
    width: 600px;
        height: 600px;
        border: 1px solid black;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
form{
    display: flex;
    flex-direction: column;
    align-items: center;
}
h1{
    font-size: 20px;
        font-weight: 600;
        margin-bottom: 30px;
        text-transform: uppercase;
        text-align: center;
        color: #000;
}
label{
    font-size: 15px;
        font-weight: 600;
        
        text-transform: uppercase;
       
        text-align: center;
        color: #000
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
    .btn-success{
    width: 100%;
         height: 40px;
        margin-bottom: 10px;
         outline: none;
         font-size: 16px;
        background-color: green;
        color: white;
        font-size: 20px;
    }
    .btn-danger{
        width: 100%;
         height: 40px;
         outline: none;
         font-size: 16px;
        background-color: red;
        color: white;
        font-size: 20px;
        text-decoration: none;
    }
  
</style>
<body>
    <div class="container">
    <form method="post" action="">
    <h1>Book Management System</h1>
    <label>Book Name:</label>
    <input type="text" name="bookname" placeholder="Enter Book Name" required><br>
    <label>Author:</label>
    <input type="text" name="author" placeholder="Enter Author" required><br>
    <label>Publisher</label>
    <input type="text" name="publisher" placeholder="Enter publisher"required><br>
   
    <label>Price:</label>
    <input type="number" name="price" value="" placeholder="Enter Price" required><br>
    
    <button type="submit" class="btn-success" name="submit">Save</button>
               <a href="Crud.php" class="btn-danger">Cancel</a>
</div>
            </form>
</body>
</html>
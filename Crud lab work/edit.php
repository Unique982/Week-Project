<?php
include "datbase_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $price = $_POST['price'];

  $sql = "UPDATE `schoolcrud` SET `bookname`='$bookname',`author`='$author',`publisher`='$publisher',`price`='$price' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: Crud.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
   lab-Work CRUD
  </nav>











  

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Book  Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>
   
    <?php
    $sql = "SELECT * FROM `schoolcrud` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Book Name:</label>
            <input type="text" class="form-control" name="bookname" value="<?php echo $row['bookname'] ?>">
          </div>

          <div class="col">
            <label class="form-label">author</label>
            <input type="text" class="form-control" name="author" value="<?php echo $row['author'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Publisher</label>
          <input type="text" class="form-control" name="publisher" value="<?php echo $row['publisher'] ?>">

          <!-- <select name="publisher" value="">
        <option>Please Select Publisher</option>
        <option value="Unique">Unique</option>
        <option value="KEC">KEC</option>
        <option value="Asmita">Asmita</option>
        <option value="khemraj">Khemraj</option>
    </select> -->
        </div>

        <div class="form-group mb-3">
          <label>Price</label>
          <input type="number" class="form-control" name="price" value="<?php echo $row['price'] ?>">
         
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="curd.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
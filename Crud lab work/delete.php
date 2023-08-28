<?php
include "datbase_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `schoolcrud` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: Crud.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
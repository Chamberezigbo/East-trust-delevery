<?php
require("./db.php");
if (isset($_GET['deleteId'])) {
     $id = $_GET['deleteId'];

     $sql = "DELETE FROM packages 
     WHERE id = $id";
     $result = mysqli_query($conn, $sql);
     if ($result) {
          header("location:admin-control.php");
     } else {
          echo (mysqli_error($conn));
          header("location:admin-control.php?error=mysqli_error");
     }
}

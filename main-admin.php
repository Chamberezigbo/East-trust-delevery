<?php

if (isset($_POST['RegisterPro'])) {
     $pass = $_POST['pass'];
     if ($pass == 'admin12345678910') {
          # code...
          session_start();
          $_SESSION['auth'] = true;
          header("location:admin-control.php");
     } else {
          session_start();
          $_SESSION['error'] = 1;
          $_SESSION['message'] = "password incorrect";
     }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Document</title>
</head>

<body>
     <div class="container-fluid bg-dark mb-5">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <div class="container-fluid">
                    <a class="navbar-brand" href="#">Admin dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
     </div>
     <?php
     if (isset($_SESSION['error']) &&  $_SESSION['error'] == 1) { ?>
          <div class="container mt-5 pt-5">
               <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                         <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                         <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </symbol>
               </svg>
               <div class="d-flex justify-content-end" id="alertActivation">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                         <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                              <use xlink:href="#check-circle-fill" />
                         </svg>
                         <div>
                              <?= $_SESSION['message']; ?>
                              <?php $_SESSION['error'] = 0; ?>
                         </div>
                    </div>
               </div>
          </div>
     <?php } ?>

     <div class="container">
          <div class="card text-center">
               <div class="card-header">
                    Welcome to Admin
               </div>
               <div class="card-body">
                    <form action="" method="post">
                         <div class="mb-3 row">
                              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                   <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="East Trust Delivery">
                              </div>
                         </div>
                         <div class="mb-3 row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                   <input type="password" name="pass" class="form-control" id="inputPassword" required>
                              </div>
                         </div>
                         <button class="btn btn-primary" type="submit" name="RegisterPro">Login</button>
                    </form>
               </div>
               <div class="card-footer text-muted">
                    powered by East Trust Delevery
               </div>
          </div>
     </div>



     <script>
          setInterval(function() {
               let alertDev = document.getElementById('alertActivation').classList.add("d-none")
          }, 13500);
     </script>

</body>

</html>
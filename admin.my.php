<?php session_start();
if (!$_SESSION['auth']) {
     header('location:main-admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="res/fontawesome-free-6.0.0-web/css/all.css">
     <link rel="stylesheet" href="res/css/main.style.css">
     <link rel="stylesheet" href="res/css/global.style.css">

     <title>Global ....</title>
</head>

<body>
     <div class="container-fluid my-5">
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top first-nav">
               <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                         <img src="res/image/parcel-7404620_1280.png" alt="" width="70" height="35">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                              <li class="nav-item">
                                   <a class="nav-link active" type="button" href="admin-control.php">View All Product</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>

     </div>
     <?php
     require_once "register.pro.inc.php";
     if (isset($_SESSION['success']) &&  $_SESSION['success'] == 1) { ?>
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
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                         <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                              <use xlink:href="#check-circle-fill" />
                         </svg>
                         <div>
                              <?= $_SESSION['message']; ?>
                              <?php $_SESSION['success'] = 0; ?>
                         </div>
                    </div>
               </div>
          </div>
     <?php } ?>

     <div class="container mt-5 pt-3">
          <form action="register.pro.inc.php" method="post">
               <div class="mb-3">
                    <h1 class="text-center">Receiver Information</h1>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <input type="text" class="form-control" name="clientName" id="exampleFormControlInput1" required>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlTextarea1" name="clientAddress" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Phone Number</label>
                    <input class="form-control" type="tel" id="exampleFormControlTextarea1" name="phone" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Country</label>
                    <input class="form-control" type="text" name="clientCountry" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Email Address</label>
                    <input class="form-control" type="email" name="clientEmail" id="exampleFormControlTextarea1" required placeholder="name@example.com"></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Arrival Location</label>
                    <input class="form-control" type="text" name="clientLocation" id="exampleFormControlTextarea1" required></input>
               </div>

               <!-- Senders Info -->
               <div class="mb-3">
                    <h1 class="text-center">Senders Information</h1>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Senders Name</label>
                    <input type="text" class="form-control" name="senderName" id="exampleFormControlInput1" required>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Senders Email</label>
                    <input class="form-control" type="email" name="senderEmail" id="exampleFormControlTextarea1" required placeholder="name@example.com"></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                    <input class="form-control" type="text" name="stat" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Senders Country</label>
                    <input class="form-control" type="text" name="senderCountry" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Senders Location</label>
                    <input class="form-control" type="text" name="senderLocation" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Current Location</label>
                    <input class="form-control" type="text" name="currentLocation" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Arrival Date This Formate (Y-m-d) </label>
                    <input class="form-control" type="text" name="arrivalDate" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Arrival Day Full Day</label>
                    <input class="form-control" type="text" name="arrivalDay" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Package Wight</label>
                    <input class="form-control" type="text" name="packageWight" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="text-center">
                    <button class="btn btn-danger" type="submit" name="RegisterPro">Submit</button>
               </div>
          </form>
     </div>

     <script>
          setInterval(function() {
               let alertDev = document.getElementById('alertActivation').classList.add("d-none")
          }, 13500);
     </script>

</body>

</html>
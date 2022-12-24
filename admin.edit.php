<?php
require("./db.php");
$id = $_GET['updateId'];
$sql = "select * from packages where id =$id";
$result = mysqli_query($conn, $sql);
if ($result) {
     while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $senderName = $row['senders_name'];
          $receiveName = $row['receivers_name'];
          $receiverEmail = $row['recivers_email'];
          $address = $row['address'];
          $phone = $row['phone'];
          $departureCountry = $row['departure_country'];
          $arrivalCountry = $row['arrival_country'];
          $senderEmail = $row['sender_email'];
          $receiversEmail = $row['recivers_email'];
          $departureLocation = $row['departure_location'];
          $arrivalLocation = $row['arrival_location'];
          $packageWeight = $row['package_weight'];
          $status = $row['status'];
          $TrackingId = $row['tracking_id'];
          $arrivalDate = $row['arriva_date'];
          $arrivalDay = $row['arriva_day'];
          $currentLocation = $row['current_location'];
     }
}

if (isset($_POST['RegisterPro'])) {
     $clientName = $_POST['clientName'];
     $clientAddress = $_POST['clientAddress'];
     $phone = $_POST['phone'];
     $clientCountry = $_POST['clientCountry'];
     $clientEmail = $_POST['clientEmail'];
     $clientLocation = $_POST['clientLocation'];

     // senders details //
     $senderName = $_POST['senderName'];
     $senderEmail = $_POST['senderEmail'];
     $senderCountry = $_POST['senderCountry'];
     $senderLocation = $_POST['senderLocation'];
     $arrivalDate = $_POST['arrivalDate'];
     $arrivalDay = $_POST['arrivalDay'];
     $packageWight = $_POST['packageWight'];
     $status = $_POST['stat'];
     $currentLocation = $_POST['currentLocation'];

     $sql2 = "UPDATE packages
     SET senders_name = '$senderName',
      receivers_name = '$clientName',
      address = '$clientAddress',
      phone = '$phone',
      departure_country = '$senderCountry' ,
      arrival_country = '$clientCountry',
      sender_email = '$senderEmail',
      recivers_email = '$clientEmail',
      departure_location = '$senderLocation',
      arrival_location = '$clientLocation',
      package_weight = '$packageWight',
      status = '$status',
      arriva_date = '$arrivalDate',
      arriva_day = '$arrivalDay',
      current_location = '$currentLocation'
     WHERE id = $id";
     $result = mysqli_query($conn, $sql2);
     if ($result) {
          header("location:admin-control.php");
     } else {
          echo (mysqli_error($conn));
          header("location:admin-control.php?error=mysqli_error");
     }
}

// if (isset($_GET['updateId'])) {
//      $id = $_GET['updateId'];
//      if (isset($_POST['update'])) {
//           $enteredBal = $_POST['enteredBal'];
//           $sql = "UPDATE  users SET balance ='$enteredBal'  WHERE id=$id";
//           $result = mysqli_query($conn, $sql);
//           if ($result) {
//                header("location:admin.php");
//           } else {
//                echo (mysqli_error($conn));
//                header("location:admin.php?error=mysqli_error");
//           }
//      }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Airships investment</title>
     <link rel="shortcut icon" href="/favicon.ico" />
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

     <div class="container">
          <div class="container mt-5 pt-3">
               <form action="" method="post">
                    <div class="mb-3">
                         <h1 class="text-center">Receiver Information</h1>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                         <input type="text" class="form-control" name="clientName" value="<?= $receiveName ?>" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                         <input type="text" class="form-control" value="<?= $address ?>" id="exampleFormControlTextarea1" name="clientAddress" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Phone Number</label>
                         <input class="form-control" type="tel" value="<?= $phone ?>" id="exampleFormControlTextarea1" name="phone" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Country</label>
                         <input class="form-control" type="text" value="<?= $arrivalCountry ?>" name="clientCountry" id="exampleFormControlTextarea1" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Email Address</label>
                         <input class="form-control" type="email" value="<?= $receiversEmail ?>" name="clientEmail" id="exampleFormControlTextarea1" required placeholder="name@example.com"></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Arrival Location</label>
                         <input class="form-control" type="text" value="<?= $arrivalLocation ?>" name="clientLocation" id="exampleFormControlTextarea1" required></input>
                    </div>

                    <!-- Senders Info -->
                    <div class="mb-3">
                         <h1 class="text-center">Senders Information</h1>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlInput1" class="form-label">Senders Name</label>
                         <input type="text" class="form-control" value="<?= $senderName ?>" name="senderName" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Senders Email</label>
                         <input class="form-control" type="email" value="<?= $senderEmail ?>" name="senderEmail" id="exampleFormControlTextarea1" required placeholder="name@example.com"></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                         <input class="form-control" type="text" value="<?= $status ?>" name="stat" id="exampleFormControlTextarea1" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Senders Country</label>
                         <input class="form-control" type="text" value="<?= $departureCountry ?>" name="senderCountry" id="exampleFormControlTextarea1" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Senders Location</label>
                         <input class="form-control" type="text" value="<?= $departureLocation ?>" name="senderLocation" id="exampleFormControlTextarea1" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Arrival Date This Formate (Y-m-d) </label>
                         <input class="form-control" type="text" value="<?= $arrivalDate ?>" name="arrivalDate" id="exampleFormControlTextarea1" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Arrival Day Full Day</label>
                         <input class="form-control" type="text" value="<?= $arrivalDay ?>" name="arrivalDay" id="exampleFormControlTextarea1" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Package Wight</label>
                         <input class="form-control" type="text" value="<?= $packageWeight ?>" name="packageWight" id="exampleFormControlTextarea1" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Tracking Number</label>
                         <input class="form-control" disabled type="text" value="<?= $TrackingId ?>" id="exampleFormControlTextarea1" required></input>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Current Location</label>
                         <input class="form-control" type="text" value="<?= $currentLocation ?>" name="currentLocation" id="exampleFormControlTextarea1" required></input>
                    </div>
                    <div class="text-center">
                         <button class="btn btn-danger" type="submit" name="RegisterPro">Submit</button>
                    </div>
               </form>
          </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
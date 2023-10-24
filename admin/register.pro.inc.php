<?php

require_once("db.php");

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



     $sql = " INSERT INTO packages (
          senders_name, 
          receivers_name, 
          address, 
          phone, 
          departure_country, 
          arrival_country, 
          sender_email, 
          recivers_email,
          departure_location, 
          arrival_location, 
          package_weight ,
          status,
          tracking_id,
          departure_date,
          departure_day,
          departure_time,
          arriva_date,
          arriva_day,
          current_location
          ) VALUES (
               ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
     )";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location:register.php?error=sqlerror");
          exit();
     } else {
          $trackingId = strtoupper(substr(sha1(mt_rand()), 17, 10));
          $departureDate = date("Y-m-d");
          $departureDay = date("l");
          $departureTime = date("h:i:sa");
          mysqli_stmt_bind_param(
               $stmt,
               "sssssssssssssssssss",
               $senderName,
               $clientName,
               $clientAddress,
               $phone,
               $senderCountry,
               $clientCountry,
               $senderEmail,
               $clientEmail,
               $senderLocation,
               $clientLocation,
               $packageWight,
               $status,
               $trackingId,
               $departureDate,
               $departureDay,
               $departureTime,
               $arrivalDate,
               $arrivalDay,
               $currentLocation
          );
          mysqli_stmt_execute($stmt);
          session_start();
          $_SESSION['success'] = 1;
          $_SESSION['message'] = "your package has been registered successfully and your tracking ID is " . $trackingId;
          header('Location:admin.my.php');
     }
}

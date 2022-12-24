<?php

if (isset($_POST['track'])) {
     require 'db.php';
     $trackingId = trim(strtoupper($_POST['trackingId']));

     $sql = "SELECT * FROM packages WHERE tracking_id = ?";
     $stmt = mysqli_stmt_init($conn);

     if (!mysqli_stmt_prepare($stmt, $sql)) {
          session_start();
          $_SESSION['error'] = 1;
          $_SESSION['errorMassage'] = "Tracking ID Not Found";
          header("Location:index.php");
          exit();
     } else {
          mysqli_stmt_bind_param($stmt, "s", $trackingId);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if ($row = mysqli_fetch_assoc($result)) {
               session_start();
               $_SESSION['auth'] = true;
               $_SESSION['start'] = time();
               $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
               $_SESSION['error'] = 0;
               $_SESSION['sessionId'] = $row['id'];
               $_SESSION['senderName'] = $row['senders_name'];
               $_SESSION['clientName'] = $row['receivers_name'];
               $_SESSION['departureLocation'] = $row['departure_location'];
               $_SESSION['address'] = $row['address'];
               $_SESSION['phone'] = $row['phone'];
               $_SESSION['departureCountry'] = $row['departure_country'];
               $_SESSION['receiversEmail'] = $row['recivers_email'];
               $_SESSION['arrivalLocation'] = $row['arrival_location'];
               $_SESSION['status'] = $row['status'];
               $_SESSION['arrivalCountry'] = $row['arrival_country'];
               $_SESSION['senderEmail'] = $row['sender_email'];
               $_SESSION['packageW'] = $row['package_weight'];
               $_SESSION['departureDate'] = $row['departure_date'];
               $_SESSION['departureD'] = $row['departure_day'];
               $_SESSION['departureT'] = $row['departure_time'];
               $_SESSION['arrivalDate'] = $row['arriva_date'];
               $_SESSION['arrivalD'] = $row['arriva_day'];
               $_SESSION['trackingId'] = $row['tracking_id'];

               header("Location:tracking.php");
          } else {
               session_start();
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Tracking ID Not Found";
               header("Location:index.php");
          }
     }
}
// ! looking at handleing database request //
// finch up and the tracking 
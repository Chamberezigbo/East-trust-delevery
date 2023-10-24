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
          $totalAmount = $row['total_amount'];
          $paymentMethod = $row['payment_mode'];
     }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Delivery Service</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

     <!-- Optional theme -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

     <!-- Latest compiled and minified JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

     <!-- Customized Bootstrap Stylesheet -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
     body {
          margin-top: 10px;
          background: #eee;
     }

     .invoice {
          padding: 30px;
     }

     .invoice h2 {
          margin-top: 0px;
          line-height: 0.4em;
     }

     .invoice .small {
          font-weight: 300;
     }

     .invoice hr {
          margin-top: 10px;
          border-color: #ddd;
     }

     .invoice .table tr.line {
          border-bottom: 1px solid #ccc;
     }

     .invoice .table td {
          border: none;
     }

     .invoice .identity {
          margin-top: 10px;
          font-size: 1.1em;
          font-weight: 300;
     }

     .invoice .identity strong {
          font-weight: 600;
     }


     .grid {
          position: relative;
          width: 100%;
          background: #fff;
          color: #666666;
          border-radius: 2px;
          margin-bottom: 25px;
          box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
     }
</style>

<body>
     <div class="container" id="section1">
          <div class="row">
               <!-- BEGIN INVOICE -->
               <div class="col-xs-12">
                    <div class="grid invoice">
                         <div class="grid-body">
                              <div class="invoice-title">
                                   <div class="row">
                                        <div class="col-xs-12">
                                             <a class="navbar-brand" href="#">
                                                  <img src="../res/image/parcel-7404620_1280.png" alt="" width="70" height="35">
                                                  <h4>East Trust</h4>
                                             </a>
                                        </div>
                                   </div>
                                   <br>
                                   <div class="row">
                                        <div class="col-xs-12">
                                             <h2>
                                                  <img src="images/images.jpeg" alt="" srcset="">
                                             </h2>
                                        </div>
                                   </div>
                              </div>
                              <hr>
                              <div class="row">
                                   <div class="col-xs-6">
                                        <address>
                                             <strong>Billed To:</strong><br>
                                             <?= $arrivalLocation ?><br>
                                             <?= $arrivalCountry ?><br>
                                             <?= $receiversEmail ?><br>
                                             <abbr title="Phone">P:</abbr> <?= $phone ?>
                                        </address>
                                   </div>
                                   <div class="col-xs-6 text-right">
                                        <address>
                                             <strong>Shipped To:</strong><br>
                                             <?= $receiveName ?><br>
                                             <?= $address ?><br>
                                             <abbr title="Phone">P:</abbr> <?= $phone ?>
                                        </address>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-xs-6">
                                        <address>
                                             <strong>Payment Method:</strong><br>
                                             <?= $paymentMethod ?><br>
                                             <?= $receiverEmail ?><br>
                                        </address>
                                   </div>
                                   <div class="col-xs-6 text-right">
                                        <address>
                                             <strong>Arrival Date:</strong><br>
                                             <?= $arrivalDate ?>
                                        </address>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-12">
                                        <h3>Shipping Information</h3>
                                        <table class="table table-striped">
                                             <thead>
                                                  <tr class="line">
                                                       <td class="text-center"><strong>ORIGIN</strong></td>
                                                       <td class="text-center"><strong>PACKAGE</strong></td>
                                                       <td class="text-right"><strong>STATUS</strong></td>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td><strong><?= $departureCountry ?></strong></td>
                                                       <td class="text-center">1</td>
                                                       <td class="text-right"><?= $status ?></td>
                                                  </tr>
                                                  <tr>
                                                       <td><strong>Destination</strong></td>
                                                       <td class="text-center">Carrie</td>
                                                       <td class="text-center">Type of shipping</td>
                                                  </tr>
                                                  <tr class="line">
                                                       <td><strong><?= $arrivalCountry ?></strong></td>
                                                       <td class="text-center"> </td>
                                                       <td class="text-center">Air Shipping</td>
                                                  </tr>
                                                  <tr>
                                                       <td><strong>Product</strong></td>
                                                       <td class="text-center">Qty</td>
                                                       <td class="text-center">Payment Mode</td>
                                                  </tr>
                                                  <tr>
                                                       <td><strong>Family Valuables</strong></td>
                                                       <td class="text-center">1</td>
                                                       <td class="text-center"><?= $paymentMethod ?></td>
                                                  </tr>
                                                  <tr>
                                                       <td><strong>Weight</strong></td>
                                                       <td class="text-center">Shipping Mode</td>
                                                       <td class="text-center">Carrier Reference No:</td>
                                                  </tr>
                                                  <tr>
                                                       <td><strong><?= $packageWeight ?></strong></td>
                                                       <td class="text-center">Air Shipping</td>
                                                       <td class="text-center"><?= $TrackingId ?></td>
                                                  </tr>
                                                  <tr>
                                                       <td><strong>Current Location</strong></td>
                                                       <td class="text-center">Departure Date</td>
                                                       <td class="text-center">Pickup Date</td>
                                                  </tr>
                                                  <tr>
                                                       <td><strong><?= $currentLocation ?></strong></td>
                                                       <td class="text-center"><?= $arrivalDate ?></td>
                                                       <td class="text-center"><?= $arrivalDay ?></td>
                                                  </tr>
                                                  <tr>
                                                       <td colspan="1">
                                                       </td>
                                                       <td class="text-right"><strong>Total</strong></td>
                                                       <td class="text-right"><strong>$ <?= $totalAmount ?></strong></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                              <!-- <div class="row">
                                   <div class="col-md-12 identity">
                                        <p>
                                             Awaiting $1150 for the customs clearance fee at the airport. Thanks for choosing swift express service company,
                                             We are here to serve you better
                                        </p>
                                   </div>
                              </div> -->
                         </div>
                    </div>
               </div>
               <!-- END INVOICE -->
          </div>
     </div>
     <div class="container">
          <button class="btn btn-primary" onclick="printSection('section1')">Print</button>
     </div>
</body>
<script type="text/javascript">
     function printSection(el) {
          var getFullContent = document.body.innerHTML;
          var printsection = document.getElementById(el).innerHTML;
          document.body.innerHTML = printsection;
          window.print();
          document.body.innerHTML = getFullContent;
     }
</script>

</html>
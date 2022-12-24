<?php
error_reporting(0);
session_start();

if (!$_SESSION['auth']) {
     header('location:index.php');
} else {
     $currentTime = time();
     if ($currentTime > $_SESSION['expire']) {
          session_unset();
          session_destroy();
          header('location:index.php');
     } else {
          require_once "header.php";
?>
          <div class="my-5 tracking-nav">
               <div class="container py-5">
                    <h1>Tracker</h1>
                    <h6>Know exactly where your cargo/freight is at all times</h6>
               </div>
          </div>
          <div class="container">
               <div class="">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                         <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Tracking</li>
                              <li class="breadcrumb-item active" aria-current="page"><?= $_SESSION['trackingId'] ?></li>
                         </ol>
                    </nav>
               </div>
          </div>
          <div class="">
               <div class="mapouter pt-2 mb-5">
                    <div class="gmap_canvas"><iframe width="1500" height="325" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br>
                         <style>
                              .mapouter {
                                   position: relative;
                                   height: 325px;
                                   width: 100%;
                              }
                         </style><a href="https://www.embedgooglemap.net">google maps on my web site</a>
                         <style>
                              .gmap_canvas {
                                   overflow: hidden;
                                   background: none !important;
                                   height: 325px;
                                   width: 100%;
                              }
                         </style>
                    </div>
               </div>
          </div>

          <div class="container">
               <div class="row">
                    <div class="col-lg-9">
                         <div class="">
                              <h4>Track Your Cargo: <span><?= $_SESSION['trackingId'] ?></span></h4>
                              <p class="fs-6">
                                   (<?= $_SESSION['address'] ?>, <?= $_SESSION['location'] ?>, <?= $_SESSION['country'] ?>)
                              </p>
                         </div>
                         <div class=" mt-5">
                              <!-- add the arrival date when fetched from database -->
                              <h6>Expected arrival:</h6>
                              <p class="text-start fs-6">
                                   A consignment was sent to you through shipping Express Courier We recommend that you regularly keep track
                                   of your freight through our tracking system here. Feel free to contact us if you need any assistance of whatsoever. kind. .
                              </p>
                         </div>

                         <div class="table-responsive">
                              <table class="table table-striped table-hover caption-top">
                                   <caption>Tracking Details</caption>
                                   <thead>
                                        <tr>
                                             <th scope="col">Details</th>
                                             <th scope="col">Location</th>
                                             <th scope="col">Country</th>
                                             <th scope="col">Day</th>
                                             <th scope="col">Date</th>
                                             <th scope="col">Time</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                             <td scope="row">Departure Detail</td>
                                             <td><?= $_SESSION['departureLocation'] ?></td>
                                             <td><?= $_SESSION['departureCountry'] ?></td>
                                             <td><?= $_SESSION['departureD'] ?></td>
                                             <td><?= $_SESSION['arrivalDate'] ?></td>
                                             <td><?= $_SESSION['departureT'] ?></td>

                                        </tr>
                                        <tr>
                                             <td scope="row">Previous Location</td>
                                             <td></td>
                                             <td></td>
                                             <td>Null</td>
                                             <td></td>
                                             <td></td>
                                        </tr>
                                        <tr>
                                             <td scope="row">Current Location Detail</td>
                                             <td><?= $_SESSION['currentLocation'] ?></td>
                                             <td></td>
                                             <td><?= date("l") ?></td>
                                             <td><?= date("Y-m-d") ?></td>
                                             <td><?= date("h:i:sa") ?></td>
                                        </tr>
                                        <tr>
                                             <td scope="row">Arrival Detail</td>
                                             <!-- add database date and time here -->
                                             <td><?= $_SESSION['arrivalLocation'] ?></td>
                                             <td><?= $_SESSION['arrivalCountry'] ?></td>
                                             <td><?= $_SESSION['arrivalD'] ?></td>
                                             <td><?= $_SESSION['arrivalDate'] ?></td>
                                             <td><?= $_SESSION['departureT'] ?></td>
                                        </tr>
                                   </tbody>
                              </table>

                              <table class="table mt-5 mb-5">
                                   <thead>
                                        <tr>
                                             <td scope="col">Details</td>
                                             <td scope="col">Location</td>
                                             <td scope="col">Country</td>
                                             <td scope="col">Day</td>
                                             <td scope="col">Date-Time</td>
                                             <td scope="col">Remark</td>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                             <td scope="row">Departure Detail</td>
                                             <td><?= $_SESSION['departureLocation'] ?></td>
                                             <td><?= $_SESSION['departureCountry'] ?></td>
                                             <!-- add database date and time here -->
                                             <td><?= $_SESSION['departureD'] ?></td>
                                             <td><?= $_SESSION['arrivalDate'] . " " . $_SESSION['departureT'] ?></td>
                                             <td>shipped</td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>

                    <div class="col-lg-3">
                         <div class="card border-warning">
                              <h5 class="card-header">CONSIGNMENT DETAILS</h5>
                              <div class="card-body">
                                   <h5 class="card-title text-center">Receiver's Details.</h5>
                                   <p class="card-text">Receiver's name: <?= $_SESSION['clientName'] ?> </p>
                                   <p class="card-text">Address: <?= $_SESSION['arrivalLocation'] ?> </p>
                                   <p class="card-text">Phone: <?= $_SESSION['phone'] ?> </p>
                                   <p class="card-text">Email: <?= $_SESSION['receiversEmail'] ?> </p>
                                   <p class="card-text pt-5">Sender's name: <?= $_SESSION['senderName'] ?> </p>
                                   <p class="card-text pt-5">Sender's Email: <?= $_SESSION['senderEmail'] ?> </p>
                                   <p class="card-text">Consignment Content: Very confidentail and valuable items </p>
                                   <p class="card-text">Package weight: <?= $_SESSION['packageW'] ?> </p>
                                   <p class="card-text">Tracking number: <?= $_SESSION['trackingId'] ?> </p>
                                   <p class="card-text">Status: <span class="text-danger"> <?= $_SESSION['status'] ?></span></p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
<?php
     }
}
?>


<?php require_once 'footer.php' ?>
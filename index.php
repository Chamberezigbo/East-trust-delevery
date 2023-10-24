<?php
require_once "header.php";
session_start();
?>

<div class="tracking-sec" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
     <div class="container pt-3" id="home">
          <?php
          if (isset($_SESSION['error']) &&  $_SESSION['error'] == 1) { ?>
               <div class="container mt-5 position-relative">
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
                    <div class="d-flex align-items-center position-absolute top-0 end-0" id="alertActivation">
                         <div class="alert alert-danger d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                   <use xlink:href="#check-circle-fill" />
                              </svg>
                              <div>
                                   <?= $_SESSION['errorMassage']; ?>
                                   <?php $_SESSION['error'] = 0; ?>
                              </div>
                         </div>
                    </div>
               </div>
          <?php } ?>
          <div class="container w-75 pt-5">
               <div class="pt-5">
                    <h3 class="text-capitalize">track your shipment</h3>
               </div>
               <form action="tracking.inc.php" method="POST">
                    <div class="input-group mb-2 text-center ">
                         <input type="text" name="trackingId" class="form-control" required placeholder="Enter your tracking number(s)" aria-label="Recipient's username" aria-describedby="button-addon2">
                         <button type="submit" class="btn btn-danger" name="track">Track</button>
                    </div>
               </form>
               <div class="">
                    <p>The East Trust Express Reference Tracking></p>
               </div>

          </div>
     </div>
</div>

<!-- Todo: finch up with the cards on hover effect  -->
<div class="container mt-5">
     <div class="container">
          <div class="row">
               <div class="col-lg-3">
                    <div class="card text-dark mb-3 card-inquiry bg-white courser-pointer">
                         <div class="card-body text-center ">
                              <h6 class="card-text">
                                   <i class="fa-solid fa-calendar-days text-danger fa-2x"></i>
                              </h6>
                              <h6 class="card-text hoverDesc">
                                   Ship Now
                              </h6>
                              <p class="card-text fwt-sm fw-lighter">
                                   find the right service
                              </p>
                         </div>
                    </div>
               </div>

               <div class="col-lg-3">
                    <div class="card text-dark mb-3 card-inquiry bg-white courser-pointer">
                         <div class="card-body text-center ">
                              <h6 class="card-text">
                                   <i class="fa-solid fa-square-check text-danger fa-2x"></i>
                              </h6>
                              <h6 class="card-text hoverDesc">
                                   Get A Quote
                              </h6>
                              <p class="card-text fwt-sm fw-light">
                                   Estimate cost to share and compare
                              </p>
                         </div>
                    </div>
               </div>

               <div class="col-lg-3">
                    <div class="card text-dark mb-3 card-inquiry bg-white card-for-buz courser-pointer">
                         <div class="card-body text-center ">
                              <h6 class="card-text">
                                   <i class="fa-solid fa-city fa-2x text-danger"></i>
                              </h6>
                              <h6 class="card-text hoverDesc">
                                   The East Trust For Business
                              </h6>
                              <p class="card-text fwt-sm fw-light">
                                   Shipping regularly? Request a business account and profit from
                                   from exclusive benefits
                              </p>
                         </div>
                    </div>
               </div>

               <div class="col-lg-3">
                    <div class="card text-dark mb-3 card-inquiry bg-white courser-pointer">
                         <div class="card-body text-center ">
                              <h6 class="card-text">
                                   <i class="fa-solid fa-user text-danger fa-2x"></i>
                              </h6>
                              <h6 class="card-text hoverDesc">
                                   Portal Login
                              </h6>
                              <p class="card-text fwt-sm fw-light">
                                   Our divisions offer different online tools for your shipping and logistics needs
                              </p>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</div>

<div class="container text-danger covid-sec p-2 mt-2">
     <h6><strong> Covid-19 Updates > </strong></h6>
</div>


<section>
     <div class="container my-5 ">
          <div class="text-center mb-5">
               <h2><strong>Shipping Service</strong></h2>
          </div>
          <div class="container">
               <div class="row">
                    <div class="col-lg-3">
                         <div class="card text-center">
                              <div class="card-body">
                                   <h2 class="card-title"><i class="fa-solid fa-envelopes-bulk text-danger"></i></h2>
                                   <p class="card-text">
                                        <strong>Document & Parcel</strong>
                                   </p>
                                   <p class="card-text card-text-hover">
                                        Domestic and <br> international <span class="text-danger"> ></span>
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-2">
                         <div class="card text-center">
                              <div class="card-body">
                                   <h2 class="card-title"><i class="fa-solid fa-plane-departure text-danger"></i></h2>
                                   <p class="card-text">
                                        <strong>Air Freight</strong>
                                   </p>
                                   <p class="card-text card-text-hover">
                                        international <br> Same Day <span class="text-danger"> ></span>
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-2">
                         <div class="card text-center">
                              <div class="card-body">
                                   <h2 class="card-title"><i class="fa-solid fa-ship text-danger"></i></h2>
                                   <p class="card-text">
                                        <strong>Ocean Freight</strong>
                                   </p>
                                   <p class="card-text card-text-hover">
                                        International <span class="text-danger"> ></span>
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-2">
                         <div class="card text-center">
                              <div class="card-body">
                                   <h2 class="card-title"><i class="fa-solid fa-truck-moving text-danger"></i></h2>
                                   <p class="card-text">
                                        <strong>Road Freight</strong>
                                   </p>
                                   <p class="card-text card-text-hover">
                                        International <span class="text-danger"> ></span>
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-3">
                         <div class="card text-center">
                              <div class="card-body">
                                   <h2 class="card-title"><i class="fa-solid fa-plane-arrival text-danger"></i></h2>
                                   <p class="card-text">
                                        <strong>Rail Freight</strong>
                                   </p>
                                   <p class="card-text card-text-hover">
                                        Between Europe And <br> Asia <span class="text-danger"> ></span>
                                   </p>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
</section>

<section data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
     <div class="container my-5">
          <div class="text-center mb-5">
               <h2><strong>Logistics Solutions</strong></h2>
          </div>

          <div class="container">
               <div class="row">
                    <div class="col-lg-4 pt-2">
                         <div class="card card-shadow">
                              <img src="res/image/packages.jpg" class="card-img-top w-50" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Warehouse Solutions</h5>
                                   <p class="card-text text-danger fw-light">
                                        Warehouse for Small and Medium Business ><br><br>
                                        Warehouse for Enterprise >
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 pt-2">
                         <div class="card card-shadow">
                              <img src="res/image/plan-mood.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Transport and Distribution</h5>
                                   <p class="card-text text-danger fw-light">
                                        Warehouse for Small and Medium Business ><br>
                                        Warehouse for Enterprise >
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-4 pt-2">
                         <div class="card card-shadow">
                              <img src="res/image/man-contract.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Contract Logistics</h5>
                                   <p class="card-text text-danger fw-light">
                                        Warehouse for Small and Medium Business >
                                   </p>
                              </div>
                         </div>
                    </div>

               </div>
          </div>

          <div class="container text-center my-5">
               <h1 class="text-danger"><strong>IMPORTANT INFORMATION</strong></h1>
               <h6 class="my-5"> <strong>Service bulletins keep you up to date with events that might affect our high service standards</strong></h6>
               <p class="text-danger">SMS-Scam “Download Our Application to Track Your Parcel”></p>
               <hr>
          </div>

          <div class="container green-logistics my-5">
               <div>
                    <div class="row">
                         <div class="col-lg-6 side-sect pt-3">
                              <div class="container-fluid">
                                   <h3>
                                        <strong>Green Logistics</strong>
                                   </h3>
                                   <p>
                                        By the year 2050 we want to reduce all logistics-related emissions to zero – a highly ambitious goal. Our mission as the leading mail
                                        and logistics company is to connect people and improve lives.
                                   </p>
                                   <button class="btn btn-danger">Learn More</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="container vision-logistics my-5">
               <div>
                    <div class="row">
                         <div class="col-lg-6 side-sect pt-3 ms-auto">
                              <div class="container-fluid">
                                   <h3>
                                        <strong>Our Divisions</strong>
                                   </h3>
                                   <p>
                                        East trust connects people in over 220 countries and territories worldwide. Driven by the power of more than 400,000 employees, we deliver integrated services and
                                        tailored solutions for managing and transporting letters, goods and information.
                                   </p>
                                   <button class="btn btn-danger">Learn More</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="container" id="scrollspyHeading1">
               <div class="row">
                    <div class="col-lg-3">
                         <div>
                              <h5 class="text-danger"><strong>Help Center</strong></h5> <br>
                              <p class="card-text-hover fw-1"> Contact US</p>
                              <p class="card-text-hover fw-1">Customer Portal Logins </p>
                              <p class="card-text-hover fw-1">Digital Partners and Integration </p>
                              <p class="card-text-hover fw-1">Developers Portal </p>
                         </div>
                    </div>

                    <div class="col-lg-3">
                         <div>
                              <h5 class="text-danger"><strong>Our Divisions</strong></h5> <br>
                              <p class="card-text-hover fw-1">Post and Packet Deutschland</p>
                              <p class="card-text-hover fw-1">East trust Express</p>
                              <p class="card-text-hover fw-1">East trust Delivery Forwarding</p>
                              <p class="card-text-hover fw-1">East trust Freight</p>
                              <p class="card-text-hover fw-1">East trust Supply Chain</p>
                              <p class="card-text-hover fw-1">East trust eCommerce solution</p>
                         </div>
                    </div>

                    <div class="col-lg-3">
                         <div>
                              <h5 class="text-danger"><strong>Industry Sectors</strong></h5> <br>
                              <p class="card-text-hover fw-1"> Auto-Mobility</p>
                              <p class="card-text-hover fw-1">Chemical</p>
                              <p class="card-text-hover fw-1">Consumer</p>
                              <p class="card-text-hover fw-1">Engineering and Manufacturing</p>
                              <p class="card-text-hover fw-1">Life Science and Healthcare</p>
                              <p class="card-text-hover fw-1">Public Sector</p>
                              <p class="card-text-hover fw-1">Retails</p>
                              <p class="card-text-hover fw-1">Technology</p>
                         </div>
                    </div>

                    <div class="col-lg-3">
                         <div>
                              <h5 class="text-danger"><strong>Company Information</strong></h5> <br>
                              <p class="card-text-hover fw-1"> About East trust</p>
                              <p class="card-text-hover fw-1">Delivered</p>
                              <p class="card-text-hover fw-1">Consumer</p>
                              <p class="card-text-hover fw-1">Careers</p>
                              <p class="card-text-hover fw-1">Press Center</p>
                              <p class="card-text-hover fw-1">Suitability</p>
                              <p class="card-text-hover fw-1">Insight and Innovation</p>
                              <p class="card-text-hover fw-1">Officials Logistics Partners</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>



<!-- Optional JavaScript; choose one of the two! -->

<?php
require_once('footer.php');
?>
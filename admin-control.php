<?php
require_once('db.php');
session_start();

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
     <title>Admin Global ....</title>
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
                                   <a class="nav-link active" aria-current="page" href="admin.my.php">Register new product</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
     </div>
     <!-- table section for the users  -->
     <div class="container mt-5 table-responsive">
          <table class="table table-light table-">
               <caption class="text-center">List of users and you and can update your balance by clicking the button</caption>
               <thead class="table-dark">
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">Senders Name</th>
                         <th scope="col">Receiver Name</th>
                         <th scope="col">Email</th>
                         <th scope="col">Tracking Id</th>
                         <th scope="col">Status</th>
                         <th scope="col">ID</th>
                         <th scope="col">Operation</th>
                         <th scope="col">Operation</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                    $sql = "Select * from `packages`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                         $num = 0;
                         while ($row = mysqli_fetch_assoc($result)) {
                              $id = $row['id'];
                              $senderName = $row['senders_name'];
                              $receiveName = $row['receivers_name'];
                              $receiverEmail = $row['recivers_email'];
                              $TrackingId = $row['tracking_id'];
                              $status = $row['status'];
                              $num++;
                    ?>

                              <tr>
                                   <th scope="row"><?= $num ?></th>
                                   <td><?= $senderName ?></td>
                                   <td><?= $receiveName ?></td>
                                   <td><?= $receiverEmail ?></td>
                                   <td><?= $TrackingId ?></td>
                                   <td><?= $status ?></td>
                                   <td><?= $id ?></td>
                                   <td>
                                        <button type="button" class="btn btn-danger">
                                             <a href="admin.edit.php?updateId='<?= $id; ?>'" class="text-light">Edit</a>
                                        </button>
                                   </td>
                                   <td>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                             <a href="#" class="text-light">Delete</a>
                                        </button>
                                   </td>
                              </tr>
                    <?php }
                    } ?>
               </tbody>
          </table>
     </div>

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         Are you sure you want to delete
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                         <button type="button" class="btn btn-primary">
                              <a class="text-light" href="delete.admin.inc.php?deleteId='<?= $id; ?>'">Yes</a>
                         </button>
                    </div>
               </div>
          </div>
     </div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
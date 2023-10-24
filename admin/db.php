<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "logisticsv1";

// $dbHost = "localhost";
// $dbUser = "webshipp_package";
// $dbPass = "t7KdTG7@8xs7ABb";
// $dbName = "webshipp_logistics	";


$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
     die("Database not connected");
}

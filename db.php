<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "logistics";

// $dbHost = "localhost";
// $dbUser = "webshipp_package";
// $dbPass = "t7KdTG7@8xs7ABb";
// $dbName = "webshipp_logistics	";


$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
     die("Database not connected");
}

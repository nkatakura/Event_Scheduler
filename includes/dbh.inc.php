<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "event_scheduler";
$port = '3307';

// echo 'trying to connect to the server...';

$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
// if (mysqli_connect_error()) {
//   die("Database connection failed: " . mysqli_connect_error());
// }
//   echo "Connected successfully";
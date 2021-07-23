<?php
    include_once 'dbh.inc.php';

    $event_id = $_GET["event_id"];

    $sql = "SELECT * FROM events WHERE event_id = '$event_id';";

    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck > 0){

    }
?>
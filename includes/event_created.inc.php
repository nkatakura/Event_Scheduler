<?php
include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="background:#C0C0C0">
        <div class="container">
            <div class="jumbotron">
            <a href=../index.php style="color:black;text-decoration:none"><h1 class="display-4">Event Scheduler</h1></a>
                <p class="lead">A tool to create sharable events that people you know can sign up to</p>
                <hr class="my-4">
                <h5>Your event id is:</h5>

                <?php

                $event_name = $_POST['event_name'];
                $event_date = $_POST['event_date'];
                $event_start_time = $_POST['event_start_time'];
                $event_end_time = $_POST['event_end_time'];

                $sql = "INSERT INTO events (event_name, event_date, event_start_time, event_end_time) VALUES
                           ('$event_name', '$event_date', '$event_start_time', '$event_end_time');";

                mysqli_query($conn, $sql);

                $sql = "SELECT MAX(event_id) FROM events AS event_id;";

                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);

                if ($resultcheck > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo $row['MAX(event_id)'];
                    }
                }
                ?>

                <h5>Share this ID to invite people to sign up, or to view current sign ups</h5>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include_once 'dbh.inc.php';

$selected_event_id = $_POST['selected_event_id'];
$sign_up_name = $_POST['sign_up_name'];
$sign_up_role = $_POST['sign_up_role'];

$sql = "INSERT INTO sign_ups (sign_up_name, sign_up_role, sign_up_event_id) VALUES ('$sign_up_name', '$sign_up_role', $selected_event_id) ;";

mysqli_query($conn, $sql);

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
    <div class="container" style="background:#C0C0C0;">
        <div class="container">
            <div class="jumbotron">
                <a href=../index.php style="color:black;text-decoration:none">
                    <h1 class="display-4">Event Scheduler</h1>
                </a>
                <p class="lead">A tool to create sharable events that people you know can sign up to</p>
                <hr class="my-4">
            </div>
        </div>
        <h5>You have succesfully signed up!</h5>

    </div>
</body>

</html>
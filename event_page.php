<?php
include_once 'includes/dbh.inc.php';
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
                <a href=index.php style="color:black;text-decoration:none">
                    <h1 class="display-4">Event Scheduler</h1>
                </a>
                <p class="lead">A tool to create sharable events that people you know can sign up to</p>
                <hr class="my-4">
            </div>
        </div>
        <h2>
            <?php
            $event_id = [];
            $event_id = $_GET['event_id'] ?? '';
            // $event_id = $_GET["event_id"];

            $sql = "SELECT * FROM events WHERE event_id = '$event_id'";

            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if ($resultcheck > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['event_name']; // Print a single column data
                }
            }
            ?>
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Organizers:<h5>
                            <?php
                            $event_id = [];
                            $event_id = $_GET['event_id'] ?? '';
                            // $event_id = $_GET["event_id"];

                            $sql = "SELECT * FROM sign_ups WHERE sign_up_event_id = '$event_id' AND sign_up_role = 'organizer';";

                            $result = mysqli_query($conn, $sql);
                            $resultcheck = mysqli_num_rows($result);

                            if ($resultcheck > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo $row['sign_up_name'] . "<br>"; // Print a single column data
                                }
                            }
                            ?>
                </div>
                <div class="col-md-4">
                    <h5>Vendors:<h5>
                            <?php
                            $event_id = [];
                            $event_id = $_GET['event_id'] ?? '';
                            // $event_id = $_GET["event_id"];

                            $sql = "SELECT * FROM sign_ups WHERE sign_up_event_id = '$event_id' AND sign_up_role = 'vendor';";

                            $result = mysqli_query($conn, $sql);
                            $resultcheck = mysqli_num_rows($result);

                            if ($resultcheck > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo $row['sign_up_name'] . "<br>"; // Print a single column data
                                }
                            }
                            ?>
                </div>
                <div class="col-md-4">
                    <h5>Guests:<h5>
                            <?php
                            $event_id = [];
                            $event_id = $_GET['event_id'] ?? '';
                            // $event_id = $_GET["event_id"];

                            $sql = "SELECT * FROM sign_ups WHERE sign_up_event_id = '$event_id' AND sign_up_role = 'guest';";

                            $result = mysqli_query($conn, $sql);
                            $resultcheck = mysqli_num_rows($result);

                            if ($resultcheck > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo $row['sign_up_name'] . "<br>"; // Print a single column data
                                }
                            }
                            ?>
                </div>
            </div>
        </div class="row">
        <div class="container" style="padding-bottom: 2em;">
            <div class="col-md-4">
                <form method="GET" action="sign_up.php">
                    <input type="hidden" name="selected_event_id" value="<?php echo $event_id ?>">
                    <button type="submit" class="btn btn-primary">Sign up to this event</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
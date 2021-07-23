<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body">
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
        <div class="container" style="padding-bottom:2em">
            <div class="row">
                <div class="col-md-4">
                    <a href="create_event.php">
                        <h4>Create an event</h4>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4>To view an event, enter a event ID:</h4>
                    <form action="event_page.php" method="GET">
                        <div class="form-group">
                            <input type="input" name="event_id" class="form-control" id="event_id">
                        </div>
                        <button type="submit" class="btn btn-primary">View Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>

</html>
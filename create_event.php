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
		<div class="container" style="padding-bottom:2em">
			<div class="row">
				<div class="col-lg-4">
					<form action="includes/event_created.inc.php" method="POST">
						<div class="form-group">
							<input type="text" name="event_name" class="form-control" placeholder="Event name" style="margin-bottom:1em">
						</div>
						<div class="form-group">
							<input type="text" name="event_date" class="form-control" placeholder="Date" style="margin-bottom:1em">
						</div>
						<div class="form-group">
							<input type="text" name="event_start_time" class="form-control" placeholder="Start time" style="margin-bottom:1em">
						</div>
						<div class="form-group">
							<input type="text" name="event_end_time" class="form-control" placeholder="End time" style="margin-bottom:1em">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
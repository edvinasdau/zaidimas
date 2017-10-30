<?php

session_start();
if (isset($_SESSION['username'])) {
} else {
	//user is guest
	header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="style.css"> 	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<h1>Dice game</h1>
		</div>
		<div id="log" class="row">
			<div class="col-sm-8">
			</div>
			<div class="col-sm-4">
				<a href="index.php" class="btn btn-danger">Back</a>
			</div>
		</div>
	</div>
	<div id="pagr" class="container">
		<div class="row">
			 <div class="col">
				<canvas id="myChart" width="400" height="400"></canvas>
			</div>
			<div class="col">
				<canvas id="mChart" width="400" height="400"></canvas>
			</div>
		</div>
	</div>
<script src="stats.js"></script>
</body>
</html>


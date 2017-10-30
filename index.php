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
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 

</head>

<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<h1><i class="fa fa-cubes" aria-hidden="true"></i> Dice game <i class="fa fa-cubes" aria-hidden="true"></i></h1>
		</div>
		<div id="log" class="row">
			<div class="col-sm-8">
			</div>
			<div class="col-sm-4">
				<form method="POST">
					<a href="logout.php" class="btn btn-danger">Logout</a><br><br>
					<a href="stats.php" class="btn btn-info">Stats</a>
				</form>
			</div>
		</div>
	</div>
	<div id="pagr" class="container">
		<div class="row">
			<div class="col-md-8">
				<button onclick="new_game()" id="new" type="button" class="btn btn-primary">New game</button><br><br>
				<button id="rd" onclick="roll()" type="button" class="btn btn-basic">Roll dices</button><br><br>
				 <div class="row">
					<div id="dice11" class="dice col-md-4">	<img  id="dice1" src=""></div>
					<div id="dice22" class="dice col-md-4">	<img  id="dice2" src=""></div>
					<div id="dice33" class="dice col-md-4">	<img  id="dice3" src=""></div>
				</div>
			</div>
			<div id="lentele" class="col-md-4"><br></div>
			 <div class="row">
			 	 <div id="wonn" class="col-md"></div>
			 	 <div class="col-md"><img  id="prize" src=""></div>
			 </div>
			
		</div>
	</div>
<script src="game.js"></script>
</body>
</html>
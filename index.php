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
				<form method="POST">
					<a href="logout.php" class="btn btn-danger">Logout</a>
				</form>
			</div>
		</div>
	</div>
	<div id="pagr" class="container">
		<div class="row">
			<div class="col-md-8">
				<button onclick="new_game()" id="new" type="button" class="btn btn-info">New game</button><br><br>
				<button id="rd" onclick="roll()" type="button" class="btn btn-info">Roll dices</button><br><br>
				 <div class="row">
					<div id="dice11" class="dice col-md-4">	<img  id="dice1" src=""></div>
					<div id="dice22" class="dice col-md-4">	<img  id="dice2" src=""></div>
					<div id="dice33" class="dice col-md-4">	<img  id="dice3" src=""></div>
				</div>
			</div>
			<div id="lentele" class="col-md-4"><br>
				 <div class="row">
				 	 <div id="wonn" class="col-md-4">Labas</div>
				 </div>
			</div>
		</div>
	</div>
<script src="game.js"></script>
</body>
</html>
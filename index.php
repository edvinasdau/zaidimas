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
				<button id="new" type="button" class="btn btn-info">New game</button><br><br>
				<button onclick="roll()" type="button" class="btn btn-info">Roll dices</button><br><br>
				 <div class="row">
					<div id="dice1" class="col-md-4"></div>
					<div id="dice2" class="col-md-4">dgfhdfg</div>
					<div id="dice3" class="col-md-4">dfhgdfghfdgh</div>
				</div>
			</div>
			<div class="col-md-4">

			</div>
		</div>
	</div>

</body>
</html>
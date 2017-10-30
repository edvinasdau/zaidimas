<?php
session_start();

if (isset($_POST['username'])){
	//jeigu parasytas username, bandau jungtis i DB
	try {
		$conn = new PDO("mysql:host=localhost;dbname=game;charset=utf8", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$statement = $conn->prepare("SELECT * FROM players WHERE username = :username");
		$statement->bindParam(':username', $_POST['username']);
		$statement->execute();
		$user_data = $statement->fetch(PDO::FETCH_ASSOC);

	}	catch(PDOException $e) {
		echo $e->getMessage();
	}
	//print_r($user_data);
	//patikrinu ar ivestas teisingas pw
	if(password_verify($_POST['password'], $user_data['password'])){
			
		$_SESSION['username'] = $_POST['username'];
		// $_SESSION['level'] = $user_data['level'];
		// $_SESSION['last_login'] = date("Y-m-d H:m:s");
		
		// setcookie("sausainis_username", $user_data['username'], time() + 86400*7, "/");
		header("location: index.php");	
		} else {
			echo "Check your username or password";
		}
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
					<input type="text" name="username" placeholder="username">&nbsp
					<input type="password" name="password" placeholder="password">&nbsp
					<button class="btn btn-success">Login</button>
					<a href="register.php" class="btn btn-warning">Register</a>
				</form>	
			</div>
		</div>
	</div>

</body>
</html>
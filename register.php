<?php

session_start();
//tikrinu ar yra ivestas username ir pw, ar sutampa pw
if (isset($_POST['username']) && $_POST['username'] != "" && $_POST['password'] != "" && ($_POST['password']) == ($_POST['repeat_password'])){
	//jungiuosi prie DB
	try {
		$conn = new PDO("mysql:host=localhost;dbname=game;charset=utf8", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//patikrinu ar yra jau toks username duomenu bazeje
	$statement = $conn->prepare("SELECT * FROM players WHERE username = :username");
			$statement->bindParam(':username', $_POST['username']);
			$statement->execute();
			$user_data = $statement->fetch(PDO::FETCH_ASSOC);
			
			if($user_data > 0){
				echo "Such user already exists. Please try different username";
			} else {
				//irasau nauja username
		$statement = $conn->prepare("INSERT INTO players (username, password)
			VALUES (:username, :password)");
		$statement->bindParam(':username', $_POST['username']);
		$crypt = password_hash($_POST['password'],PASSWORD_DEFAULT);
		$statement->bindParam(':password', $crypt);
		$statement->execute();
		$conn = null;
		header("Location: login.php");
			}
	}	catch(PDOException $e) {
		echo $e->getMessage();
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
					<input id="username" type="text" name="username" placeholder="username">
					<input id="pw" type="password" name="password" placeholder="password">
					<input id="pw_r" type="password" name="repeat_password" placeholder="repeat_password">
					<input id="reg" type="submit" name="registruotis" class="btn btn-warning" value="Register">
					<a href="login.php" class="btn btn-success">Login</a>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
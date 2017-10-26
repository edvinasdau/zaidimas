<?php
session_start();

if (isset($_POST['username'])){

	try {
		$conn = new PDO("mysql:host=localhost;dbname=students;charset=utf8", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$statement = $conn->prepare("SELECT * FROM userss WHERE username = :username");
		$statement->bindParam(':username', $_POST['username']);
		$statement->execute();
		$user_data = $statement->fetch(PDO::FETCH_ASSOC);

	}	catch(PDOException $e) {
		echo $e->getMessage();
	}
	//print_r($user_data);
	if(password_verify($_POST['password'], $user_data['password'])){
			
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['level'] = $user_data['level'];
		$_SESSION['last_login'] = date("Y-m-d H:m:s");
		
		setcookie("sausainis_username", $user_data['username'], time() + 86400*7, "/");
		header("location: index.php");	
		} else {
			echo "Check your username or pw";
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
					<form method="post">
						<form method="POST">
							<input type="text" name="username" placeholder="username">&nbsp
							<input type="password" name="password" placeholder="password">&nbsp
							<a href="login.php" class="btn btn-success">Login</a>
						</form>	
				</form>
			</div>
		</div>
	</div>

</body>
</html>
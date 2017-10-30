<?php
header("Content-type:application/json");
session_start();
try {
	$conn = new PDO("mysql:host=localhost;dbname=game;charset=utf8", "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected successfully";

	if (isset($_POST['result'])) {

		$statement = $conn->prepare("INSERT INTO stats (username, result, ip) VALUES (:username, :result, :ip)");
		$statement->bindParam(':username', $_SESSION['username']);
		$statement->bindParam(':result', $_POST['result']);
		$statement->bindParam(':ip', $_SERVER["REMOTE_ADDR"]);
		$statement->execute();
		

	} else if (isset($_GET['opa'])) {
		//gaunu tik sesijos zaidejo statistika
		$statement = $conn->prepare("SELECT * FROM stats WHERE username = :username");
		$statement->bindParam(':username', $_SESSION['username']);
		$statement->execute();
		$response = $statement->fetchAll(PDO::FETCH_ASSOC);
		//visu zaideju statistika
	} else {
		$statement = $conn->prepare("SELECT * FROM stats");
		$statement->execute();
		$response = $statement->fetchAll(PDO::FETCH_ASSOC);
	}
	$conn = null;
} catch(PDOException $e) {
	$response['message'] = ['type' => 'danger','body' => $e->getMessage()];
}

//print_r($response);
echo json_encode($response);
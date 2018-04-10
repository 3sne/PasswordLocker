<?php
	session_start();
	$pdo = new PDO('mysql:host=localhost;dbname=pwd_lkr_db', "root", ""); 
	$un = $_SESSION['sid'];
	$sql = "SELECT TITLE, UID, PASS, URL FROM USERDATA WHERE username='$un'"; 
	$statement = $pdo->prepare($sql);
	$statement->execute();
	$results=$statement->fetchAll(PDO::FETCH_ASSOC);
	$json=json_encode($results);
	echo($json);
?>

 
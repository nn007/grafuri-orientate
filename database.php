<?php 
	$server= "localhost";
	$username = "root";
	$password ="";
	$db = "auth";

	try {
		$conn = new PDO("mysql:host=$server;dbname=$db;", $username, $password);
	} catch (PDOExeception $e) {
		die("Connection failed" . $e->getMessage());
	}
?>
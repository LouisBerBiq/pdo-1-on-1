<?php
define('DB_PATH', $_SERVER['DOCUMENT_ROOT'] . '/datas/data.db');

try {
	$connection = new PDO('sqlite:' . DB_PATH);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
	exit($e->getMessage());
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$userRequest = 'SELECT * FROM users WHERE id = ' . $id;
	$view = 'user.php';
} else {
	$userRequest = 'SELECT * FROM users';
	$pdoSt = $connection->query($userRequest); 
	//this is a "PDO statement"
	$users = $pdoSt->fetchAll();
	$view = 'users.php';
}



require("./views/{$view}");


/*
BEGINNER NOTES:
	-> = modify properties of instance
	:: = modify properties of general class
*/
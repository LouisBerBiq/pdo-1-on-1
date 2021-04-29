<?php
require('./configs/config.php');
require('./configs/dbconnection.php');

$connection = getConnection();

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$user = find($connection, $id);

	$view = 'user.php';
} else {
	$userS = all($connection);
	$view = 'users.php';
}



require("./views/{$view}");


/*
BEGINNER NOTES:
	-> = modify properties of instance
	:: = modify properties of general class
*/